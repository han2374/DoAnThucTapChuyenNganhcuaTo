<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductSearchController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->query('q');
        $category = $request->query('category');

        $query = Product::query()->where('status', 1);

        if ($q) {
            $query->where(function($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")
                    ->orWhere('description', 'like', "%{$q}%")
                    ->orWhere('content', 'like', "%{$q}%");
            });
        }

        if ($category) {
            $query->where('idcategory', $category);
        }

        $products = $query->paginate(12)->appends($request->query());
        $categories = Category::where('status', 1)->get();

        return view('search.results', compact('products', 'q', 'categories'));
    }
}
