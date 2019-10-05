<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }


    public function shop(){
        return view('pages.shop');
    }

    public function cart(){
        return view('pages.cart');
    }

    public function checkout(){
        return view('pages.checkout');
    }

    public function product(){
        return view('pages.product-details');
    }
}
