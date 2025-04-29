<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        // $products = Product::all(); // Ambil semua produk dari database
        return view('gallery.index');
    }
}
