<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ImageChild;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller {
    public function get_image_metas(Request $request) {
        $image = $request->file("image");

        $metas = $this->read_metas($image);

        return response()->json(['data' => $metas], 200);
    }

    public function read_metas($image) {
        try {
            $metas = exif_read_data($image);
        } catch (\Throwable $e) {
            try{
                $metas = getimagesize($image);
            } catch (\Throwable $e){
                $metas = $e->getMessage();
            }

        }

        $metas = $this->convert_from_latin1_to_utf8_recursively($metas);
        return $metas;
    }

    public function convert_from_latin1_to_utf8_recursively($dat)
    {
        if (is_string($dat)) {
            return utf8_encode($dat);
        } elseif (is_array($dat)) {
            $ret = [];
            foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);

            return $ret;
        } elseif (is_object($dat)) {
            foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);

            return $dat;
        } else {
            return $dat;
        }
    }

    public function create_thumbnail($image, $name){
        $metas = $this->read_metas($image);
        $computed = $metas["COMPUTED"];
        // $height = $computed["Height"];
        // $width = $computed["Width"];

       if(isset($metas["COMPUTED"])){
    $computed = $metas["COMPUTED"];
        $height = $computed["Height"];
        $width = $computed["Width"];
} else {
    if(isset($meta["height"])) {
        $height = $meta["height"];
        $width = $meta["width"];
    } else {
        $height = $meta[1];
        $width = $meta[0];
    }
}


        $size = $height < $width ? $height : $width;

        $name = $this->resize_image($image, $size, $size, $name, false);

        return config('app.url').'/public/images/uploaded_images/thumbnails/'.$name;
    }

    public function upload_image(Request $request) {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'height' => 'required',
            'width' => 'required'
        ]);
        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        $image = $request->file("image");
        $contributor = $request["contributor"];
        $masterId = $request["masterId"];
        try{
            $name = time().$image->getClientOriginalName();
            $destinaionPath = public_path("images/uploaded_images");
            $image->move($destinaionPath, $name);
            $thumbnail_url = $this->create_thumbnail($destinaionPath.'/'.$name, $name);
            // db saving
            $image_url = config('app.url').'/public/images/uploaded_images/'.$name;

            $userId = Auth::user()->id;

            if(!$masterId) {
                $masterImage = DB::table('all_images_masters')->insertGetId([
                    'user_id' => $userId
                ]);
            } else {
                $masterImage = $masterId;
            }


            DB::table("all_images_childs")->insertGetId([
                'master_id' => $masterImage,
                'image_name' => $name,
                'user_id' => $userId,
                'height' => $request['height'],
                'width' => $request['width'],
                'image_main_url' => $image_url,
                'thumbnail_url' => $thumbnail_url,
                'user_id' => $contributor,
            ]);
        } catch (\Throwable $e) {
            return response()->json(["data" => $masterId, "errors" => $e->getMessage()], 500);
        }
        return response()->json(['data' => $masterImage], 200);
    }

    public function resize_image($file, $w, $h, $name, $keepRatio=true) {
        list($width, $height) = getimagesize($file);
        $what = getimagesize($file);
        if($keepRatio) {
            $r = $width / $height;
            if ($w/$h > $r) {
                $newwidth = $h*$r;
                $newheight = $h;
            } else {
                $newheight = $w/$r;
                $newwidth = $w;
            }
        } else {
            $newheight = $h;
            $newwidth = $w;
        }


        $extension = "png";

        switch(strtolower($what['mime']))
        {
            case 'image/png':
                $src = imagecreatefrompng($file);
                break;
            case 'image/jpeg':
                $src = imagecreatefromjpeg($file);
                $extension = "jpeg";
                break;
            case 'image/gif':
                $src = imagecreatefromgif($file);
                $extension = "gif";
                break;
            default: die();
        };
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        $fileNameNoExtension = preg_replace("/\.[^.]+$/", "", $name);
        $destination = public_path("images/uploaded_images/thumbnails/".$fileNameNoExtension.".".$extension);
        imagejpeg($dst, $destination);
        return $fileNameNoExtension.".".$extension;
    }

    public function imageList() {
        return view('backEnd.patients.image_list');
    }

    public function getAllImages() {
        $images = ImageChild::all();
        return response()->json($images);
    }

    public function deleteImage(Request $request) {
        $imageId = $request->imageId;
        $image = ImageChild::find($imageId);
        $deleted = $image->delete();
        return response()->json(['data' => $deleted]);
    }
}
