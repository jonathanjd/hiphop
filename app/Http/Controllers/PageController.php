<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('page.page');
    }

    public function list(Request $request)
    {
        # code...
        if ($request->parent_id) {
            # code..
            $parentID = $request->parent_id;
            $pages = Page::where('parent_id', $parentID)->get();
            $pages = count($pages) > 0 ? $pages : [];
        } else {
            # code...
            $pages = Page::where('parent_id', null)->get();
            $pages = count($pages) > 0 ? $pages : [];
        }

        return response()->json($pages, 200);
    }

    public function edit($id)
    {
        # code...
        $page = Page::find($id);
        return response()->json($page, 200);
    }
}
