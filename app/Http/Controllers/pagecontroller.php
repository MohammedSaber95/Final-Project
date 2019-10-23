<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



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

//     public function show(Request $request,$id){
//         $input = $request -> all();
//         $input['select'] = 12;
//         if(@$input['select']){
        
//         switch($input['select']){
//             case 12 :
//                 $value = 12 ;
//                 break;
//             case 24 :
//                 $value = 24 ;
//                 break;
//             case 48 :
//                 $value = 48;
//                 break;
//             case 96 :
//                 $value = 96 ;
//                 break;
//             default :
//                 $value = 12;
//         }}
      
//         $product = Product::where('category_id',$id)->paginate(@$value);
//         return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>$product,'value'=>@$value]);
    
// }



public function sort( Request $request,$id){
    $input = $request -> all();

        /*Display products by view  */
        /*switch on request which has values 12 , 24 , 48 and 96 */
    switch(@$input['select']){
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
    }

               /*Display products by view  and sort by */
        /*switch on request which has values date ,newest and popular */
            switch (@$input['sortSelect']){
                case 'Date' :
                    $SortedValue = 'Date';
                    $product = Product::where('category_id',$id)->orderBy('id','asc')->paginate(@$value);
                    return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>@$product , 'SortedValue'=>@$SortedValue,'value'=>@$value]);
                    break;
                case 'Newest' :
                    $SortedValue = 'Newest';
                    $product = Product::where('category_id',$id)->orderBy('id','desc')->paginate(@$value);
                    return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>@$product , 'SortedValue'=>@$SortedValue,'value'=>@$value]);
                    break;
                case 'Popular' :
                    $SortedValue = 'Popular';
                    $product = Product::where('category_id',$id)->orderBy('rating','desc')->paginate(@$value);
                    return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>@$product , 'SortedValue'=>@$SortedValue,'value'=>@$value]);
                    break; 
                default:
                    $product = Product::where('category_id',$id)->orderBy('id','asc')->paginate(12);
                    return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>@$product , 'SortedValue'=>'Date','value'=>12 ]);
               
        }
    

  
               
}




    public function cart(){
        return view('Webpages.cart');
    }

    public function checkout(){
        return view('Webpages.checkout');
    }

    public function product($id){
        $product = Product::find($id);
        return view('Webpages.product-details',compact('id' ,'product'));
    }

    // public function productdata($id){
    //     $products = Product::where('id',$id);
    //     return view('Webpages.product-details',compact('products'));
    // }

    public function RateFun(Request $request){
        if(\Auth::check()){
        $product = Product::find($request->id);
        $product -> rating = $request ->rate;
        $product -> save();
        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;

        $product->ratings()->save($rating);
        
        return redirect()->route("product",$request->id);
        }else{
            return redirect("login");

        }
    }
   
}
