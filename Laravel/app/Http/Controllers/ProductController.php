<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // mengambil semua data produk
        return view('index', compact('products')); // kirim ke view
    }

    public function welcome()
    {
        
        return view('welcome'); // kirim ke view
    }
}
