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
        $cats = DB::table('categories') ->get();
        return view('Webpages.index',compact('cats'));
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
                    $product = Product::where('category_id',$id)->orderBy('id','asc')->paginate(@$value);
                    return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>@$product , 'SortedValue'=>@$SortedValue,'value'=>@$value]);
                    break; 
                default:
                    $product = Product::where('category_id',$id)->orderBy('id','asc')->paginate(12);
                    return view('Webpages.shop',['id'=>Category::findOrFail($id),'products'=>@$product , 'SortedValue'=>'Date','value'=>12]);
               
        }
    

  
               
}




    public function cart(){
        return view('Webpages.cart');
    }

    public function checkout(){
        return view('Webpages.checkout');
    }

    public function product($id){
        $product = Product::find($id)->get();
        return view('Webpages.product-details',compact('id'));
    }


   
}
