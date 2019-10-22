<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;

class pagecontroller extends Controller
{
    //
//     public  function store(Request $request){
        
//       $input['select'] = 12;
        
//     }
// }
    public function index(){
        $i=0;
        $cats = DB::table('categories') ->get();
        return view('Webpages.index',compact('cats' , 'i'));
    }

    public function show(Request $request,$id){
        $i=1;
        $input = $request -> all();
        if(@$input['select']){
        
        switch($input['select']){
            case 12 :
                $value = 12 ;
                break;
            case 24 :
                $value = 24 ;
                break;
            case 48 :
                $value = 48;
                break;
            case 96 :
                $value = 96 ;
                break;
            default :
                $value = 12;
        }}
      
        $product = Product::where('category_id',$id)->paginate(@$value);
        return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>$product,'value'=>@$value , 'i'=>$i]);
    
}

    public function cart(){
        return view('Webpages.cart');
    }

    public function checkout(){
        return view('Webpages.checkout');
    }

    public function product($id){
        $product = Product::where('id',$id)->get();
        return view('Webpages.product-details',compact('id' ,'product'));
    }

    // public function productdata($id){
    //     $products = Product::where('id',$id);
    //     return view('Webpages.product-details',compact('products'));
    // }
   
}
