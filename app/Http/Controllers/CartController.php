<?php

namespace App\Http\Controllers;

use App\Category;
use App\ImageChild;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller {
    public function addItem(Request $request) {
        $id = $request["imageId"];
        $size = $request["size"];
        $image = ImageChild::find($id);
        $image->price = $image[$size];
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                $id => $image
            ];
        } else {
            $cart[$id] = $image;
        }

        session()->put('cart', $cart);

        return response()->json(['data' => $image, 'status' => 200], 200);
    }

    public function removeItem(Request $request) {
        $id = $request['productId'];
        $cart = session()->get('cart');

        unset($cart[$id]);

        session()->put('cart', $cart);

        return response()->json(['data' => $cart, 'status' => 200], 200);
    }

    public function getCart() {
        $cart = session()->get('cart');
        return response()->json(['data' => $cart, 'status' => 200], 200);
    }
}
