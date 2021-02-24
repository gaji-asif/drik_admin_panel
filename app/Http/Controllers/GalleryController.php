<?php

namespace App\Http\Controllers;
use App\ImageChild;

class GalleryController extends Controller {
    public function index() {
        $images = ImageChild::all();
        return view('welcome', compact('images'));
    }
}
