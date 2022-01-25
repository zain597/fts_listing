<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category()
    {

        return view('category.add_category');
    }

    public function categoryStore(Request $request)
    {
        $request->validate([
            'text'=> 'required'
        ]);
        BusinessCategory::insert([
            'text'=>$request->text
        ]);

        return redirect()->back();
    }

    public function add_business()
    {

        return view('category.add_category');
    }


}
