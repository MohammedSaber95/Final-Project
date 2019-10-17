<?php

namespace App\Http\Controllers\dashboard_controllers;
use Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Addproductscontroller extends Controller
{
    public function index()
    {
        // $products=Product::All();
        return view('dash_pages.pages.Categories&Products.AddProducts' );
    }
}
