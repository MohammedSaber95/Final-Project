<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    //
    public function index(){
        return view('Webpages.index');
    }


    public function shop(){
        return view('Webpages.shop');
    }

    public function cart(){
        return view('Webpages.cart');
    }

    public function checkout(){
        return view('Webpages.checkout');
    }

    public function product(){
        return view('Webpages.product-details');
    }
}
