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


class CustomerController extends Controller {
    public function index() {
        $categories = Category::all();
        $images = ImageChild::all();
        $user = Auth::user();
        return view('web.customers.index', compact('images', 'categories', 'user'));
    }

   
}
