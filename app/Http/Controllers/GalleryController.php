<?php

namespace App\Http\Controllers;
use App\Category;
use App\ImageChild;

class GalleryController extends Controller {
    public function index() {
        $categories = Category::all();
        $images = ImageChild::all();
        return view('welcome', compact('images', 'categories'));
    }
}
