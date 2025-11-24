<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin/product/product-list', compact('products'));
    }
}
