<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category(){
        return view('admin.category');
    }
    public function add_category(Request $request){
        $category = new Category();
        $category->category_name = $request->name;
        $category->save();
}
}