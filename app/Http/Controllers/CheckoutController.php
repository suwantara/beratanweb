<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        // Logic to display the checkout page
        return view('checkout.index');
    }
}
