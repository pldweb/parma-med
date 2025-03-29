<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $params = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('front.index', $params);
    }

    public function productDetails(Product $product)
    {
        $params = ['product' => $product];
        return view('front.details', $params);

    }

    public function categoryDetails(Category $category)
    {
        dd($category);
    }
}
