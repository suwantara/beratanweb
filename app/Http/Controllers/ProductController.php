<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $products = Product::all(); // Ambil semua produk dari database
        return view('products.index');
    }
}
