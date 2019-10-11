<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;

class pagecontroller extends Controller
{
    //
    public function index(){
        $cats = DB::table('categories') ->get();
        return view('Webpages.index',compact('cats'));
    }

    public function show($id){
        $product = Product::where('category_id',$id)->paginate(4);
        return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>$product]);
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
