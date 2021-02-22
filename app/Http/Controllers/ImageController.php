<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller {
    public function get_image_metas(Request $request) {
        $image = $request->file("image");
        $metas = @exif_read_data($image);
        return response()->json(['data' => $metas], 200);
    }

    public function upload_image(Request $request) {
        $image = $request->file("image");
        $contributor = $request["contributor"];
        $masterId = $request["masterId"];
        $name = $image->getClientOriginalName();
        $destinaionPath = public_path("images\uploaded_images");
        $image->move($destinaionPath, $name);

        // db saving
        $image_url = $request->getHttpHost()."/drik/public/images/uploaded_images/".$name;

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
            'image_main_url' => $image_url
        ]);

        //$imagePath = $destinaionPath."\\".$name;
        //$resizedImage =$this->resize_image($imagePath, 200, 200, $name);
        return response()->json(['data' => $masterImage], 200);
    }

    public function resize_image($file, $w, $h, $name) {
        list($width, $height) = getimagesize($file);
        $what = getimagesize($file);
        $r = $width / $height;
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
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
        $destination = public_path("images\uploaded_images\\".$fileNameNoExtension."200.".$extension);
        imagejpeg($dst, $destination);

        return "success";
    }

    public function upload_images(Request $request) {
        $contributor = $request["contributor"];
        $images = json_decode($request["images"]);

        return gettype($images);


        foreach ($images as $image) {
            return gettype($image->image);
            $name = $imageFile->getClientOriginalName();
            $destinaionPath = public_path("images\uploaded_images");
            $imageFile->move($destinaionPath, $name);
        }


    }
}
