<?php

namespace App\Http\Controllers;

use App\Category;
use App\ImageChild;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller {
    public function index() {
        $categories = Category::all();
        $page = "checkout";
        return view('checkout', compact('categories', 'page'));
    }
}
