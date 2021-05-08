<?php

namespace App\Http\Controllers;
use App\Category;
use App\ImageChild;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller {
    public function index() {
        $categories = Category::all();
        $images = ImageChild::all();
        $user = Auth::user();
        return view('welcome', compact('images', 'categories', 'user'));
    }
}
