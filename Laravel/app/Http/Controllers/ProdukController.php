<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProdukController extends Controller
{
    public function index()
    {   // mengambil semua data produk
        return view('produk'); // kirim ke view
    }
}