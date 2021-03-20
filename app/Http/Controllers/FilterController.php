<?php

namespace App\Http\Controllers;

use App\Category;
use App\ImageChild;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller {
    public function index($category) {
        $categories = Category::all();
        $images = ImageChild::where('category', $category)->paginate(1);
        return view('filter', compact('images', 'categories'));
    }

    public function filterImage(Request $request) {
//        $searchKey = $request['search'];
//        $images = ImageChild::Where('title', 'like', '%' . $searchKey . '%')->get();
        $page = $request["page"];
        $previousPage = $page - 1;

        $images = DB::table('all_images_childs')
            ->orderBy('id', 'desc');

        if($request["sorting"]) {
            if($request["sorting"] === "asc") {
                $images = DB::table('all_images_childs')
                    ->orderBy('id', 'asc');
            } else {
                $images = DB::table('all_images_childs')
                    ->orderBy('id', 'desc');
            }
        }
        if($request["time"]) {
            $images = $images->where('created_at', '>=', Carbon::now()->subDay($request["time"]));
        }

        $images = $images->skip($previousPage * 1)->take(1)->get();

        return response()->json(['images' => $images, 'status' => 200], 200);
    }
}
