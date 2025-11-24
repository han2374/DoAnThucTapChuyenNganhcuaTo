<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller 
{
    public function index()
    {
        $categories = Category::all();
        return view('admin/category/category-list', compact('categories'));
    }
}