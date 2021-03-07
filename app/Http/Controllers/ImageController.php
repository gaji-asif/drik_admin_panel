<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\ImageChild;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Svg\Tag\Image;

class ImageController extends Controller {
    public function get_image_metas(Request $request) {
        $image = $request->file("image");

        $metas = ImageHelper::read_metas($image);

        return response()->json(['data' => $metas], 200);
    }

    public function create_thumbnail($image, $name){
        $metas = ImageHelper::read_metas($image);
        $x = 0;
        $y = 0;
        $size = 0;
        $height = $metas["Height"];
        $width = $metas["Width"];

        if($height < $width) {
            $size = $height;
            $x = floor(($width - $size)/2);
            $y = 0;
        } else {
            $size = $width;
            $y = floor(($height - $size)/2);
            $x = 0;
        }

        $name = ImageHelper::cropImage($image, $x, $y, $size, $size, $name, "images/uploaded_images/thumbnails");

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
            $width = $request["width"];
            $height = $request["height"];
            $medium_width = floor($width*0.8);
            $medium_height = floor($height*0.8);
            $small_width = floor($width*0.5);
            $small_height = floor($height*0.5);
            $name = time().$image->getClientOriginalName();
            $destinaionPath = public_path("images/uploaded_images");
            $image->move($destinaionPath, $name);
            $imagePath = $destinaionPath.'/'.$name;

            if($request["metas"]) {
                $metas = json_decode($request["metas"]);
                ImageHelper::addMetaToImage($imagePath, $metas);
            }

            $thumbnail_url = $this->create_thumbnail($imagePath, $name);
            $medium_url = ImageHelper::resize_image($imagePath, $medium_width, $medium_height, $name, "images/uploaded_images/medium");
            $medium_url = config('app.url')."/public/images/uploaded_images/medium/".$medium_url;
            $small_url = ImageHelper::resize_image($imagePath, $small_width, $small_height, $name, "images/uploaded_images/small");
            $small_url = config('app.url')."/public/images/uploaded_images/small/".$small_url;
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
                'author' => isset($metas->Author) ? $metas->Author : "",
                'country' => isset($metas->Country) ? $metas->Country : "",
                'city' => isset($metas->City) ? $metas->City : "",
                'state' => isset($metas->State) ? $metas->State : "",
                'postal_code' => isset($metas->PostalCode) ? $metas->PostalCode : "",
                'phone' => isset($metas->Phone) ? $metas->Phone : "",
                'email' => isset($metas->Email) ? $metas->Email : "",
                'caption' => isset($metas->Caption) ? $metas->Caption : "",
                'website' => isset($metas->Website) ? $metas->Website : "",
                'headline' => isset($metas->Headline) ? $metas->Headline : "",
                'title' => isset($metas->Title) ? $metas->Title : "",
                'copy_right' => isset($metas->Copyright) ? $metas->Copyright : "",
                'keywords' => isset($metas->Keywords) ? $metas->Keywords : "",
                'image_main_url' => $image_url,
                'medium_url' => $medium_url,
                'small_url' => $small_url,
                'thumbnail_url' => $thumbnail_url
            ]);
        } catch (\Throwable $e) {
            return response()->json(["data" => $masterId, "errors" => $e->getMessage()], 500);
        }
        return response()->json(['data' => $masterImage], 200);
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

    public function imageDetails($id) {
        $image = ImageChild::find($id);
        return response()->json(['data'=> $image], 200);
    }

    public function updateImage(Request $request, $id) {
        $image = ImageChild::find($id);
        $imageName = $image->image_name;
        ImageHelper::addMetaToImage(public_path("images/uploaded_images/${imageName}"), [
            'Author' => $request->author
        ]);
        $image = $image->update([
            'author'=>$request->author,
            'phone'=>$request->phone,
            'country'=>$request->country,
            'email'=>$request->email,
            'city'=>$request->city,
            'state'=>$request->state,
            'title'=>$request->title,
            'caption'=>$request->caption,
            'website'=>$request->website,
            'headline'=>$request->headline,
            'keywords'=>$request->keywords,
            'copy_right'=>$request->copy_right,
            'postal_code'=>$request->postal_code

        ]);
        return response()->json(['data'=>$image], 200);
    }
}
