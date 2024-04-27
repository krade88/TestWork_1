<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $catalog = Category::all();
        $categories = Category::latest()->take(4)->get();
        $products = Product::latest()->take(4)->get();
        return view('index', compact('categories', 'products', 'catalog'));
    }
}
