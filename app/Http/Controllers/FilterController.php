<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\ImageChild;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller {
    public function index($category) {
        $categories = Category::all();
        $photographers = User::where('user_type', 1)->get();
        $images = ImageChild::where('category', $category)->paginate(20);
        return view('filter', compact('images', 'categories', 'photographers'));
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

        if($request["photographer"]) {
            $images = $images->where('user_id', $request["photographer"]);
        }

        $images = $images->skip($previousPage * 1)->take(1)->paginate(20);

        return response()->json(['images' => $images, 'status' => 200], 200);
    }
}
