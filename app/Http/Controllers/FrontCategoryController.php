<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontCategoryController extends Controller
{
    public function category_details($id){
        $category = Category::findOrFail($id);
        return view('categories.category_details', compact(['category']));
    }
}
