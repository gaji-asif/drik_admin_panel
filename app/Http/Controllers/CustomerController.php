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
use App\Category;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;


class CustomerController extends Controller {
    public function index() {
        $categories = Category::all();
        $images = ImageChild::all();
        $user = Auth::user();
        if($user->user_type == 1){//contributors
            return view('web.contributors.dashboard', compact('images', 'categories', 'user'));
        }else{
            return view('web.customers.dashboard', compact('images', 'categories', 'user'));
        }
    }
    
    public function profile(){
        $categories = Category::all();
        $images = ImageChild::all();
        $id = Auth::user()->id;
        $user = user::find($id);

        return view('web.customers.profile',compact('images', 'categories', 'user'));
    }
    
    public function edit_profile(Request $request){

        $id = Auth::user()->id;
        $userss = User::where('id', Auth::user()->id)->first();
        if(empty($request->get('password'))){
            $password = $userss->password;
        } else{
            $password = Hash::make( $request->get('password') );
        }

        $user = User::find($id);
        $user->company_name = $request->get('company_name');
        $user->job_title = $request->get('job_title');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $password;

        if ($request->hasFile('upload_img')) {
            $upload = $request->file('upload_img');
            $file_type = $upload->getClientOriginalExtension();
            $upload_name =  time() . $upload->getClientOriginalName();
            $destinationPath = public_path('uploads/user_img');
            $upload->move($destinationPath, $upload_name);
            $user->upload_img = 'public/uploads/user_img/'.$upload_name;
        }

        $result = $user->update();
        if($result){
        //$userss = User::where('id', Auth::user()->id)->first();
        Session::put('users_img', $userss->upload_img);
        }

        return redirect('customer-profile')->with('message-success', 'Profile has been updated');
    }

    public function wishlist() {
        $categories = Category::all();
        $images = ImageChild::all();
        $user = Auth::user();
        $favorites = DB::table('favorites')
                    ->leftjoin('all_images_childs', 'all_images_childs.id', '=', 'favorites.image_id')
                    ->select('favorites.*', 'all_images_childs.image_name', 'all_images_childs.small_url', 'all_images_childs.small_price')
                    ->where('favorites.user_id', $user->id)
                    ->get();
        return view('web.customers.wishlist', compact('images', 'categories', 'user', 'favorites'));
    }
   
}