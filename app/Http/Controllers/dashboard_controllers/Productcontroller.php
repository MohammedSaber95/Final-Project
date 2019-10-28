<?php

namespace App\Http\Controllers\dashboard_controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::All();
        return view('dash_pages.pages.Categories&Products.Products' , compact('products'));
    }


    public function image($file){
            
        $extention = $file->getClientOriginalExtension();
        $sha1 = sha1($file->getClientOriginalName());
        $filename  = time().'_'.$sha1.'.'.$extention;
        $file->move('img/product-img/',$filename);
        return $filename;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request -> all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:5',
        ]);
        $products=new Product();
        $products['name'] = request('name');
        $products['description'] = request('description');
      
        if($request->hasfile('image1')){
            $file=$request->file('image1');
            $extention=$file->getClientOriginalExtension();
            $sha1 = sha1($file->getClientOriginalName());
            $filename=time().'_'.$sha1.'.'.$extention;
            $file->move('img/product-img/',$filename);
            $products->image1=$filename;
           }else{
            return $request;
            $products->image1='';
        }
           if($request->hasfile('image2')){
               $file1=$request->file('image2');
               $extention=$file1->getClientOriginalExtension();
               $sha1 = sha1($file1->getClientOriginalName());
               $filename1=time().'_'.$sha1.'.'.$extention;
               $file1->move('img/product-img/',$filename1);
               $products->image2=$filename1;
              }else{
                return $request;
                $products->image2='';
            }
              if($request->hasfile('image3')){
               $file2=$request->file('image3');
               $extention=$file2->getClientOriginalExtension();
               $sha1 = sha1($file2->getClientOriginalName());
               $filename2=time().'_'.$sha1.'.'.$extention;
               $file2->move('img/product-img/',$filename2);
               $products->image3=$filename2;
              }else{
                return $request;
                $products->image3='';
            }
           $products['price'] = request('price');
           $products['color'] =request('color'); 
           $products['user_id'] =request('user_id'); 
           $products['category_id'] =request('category_id'); 
            $products -> save();
    
       return back()
       ->with('message',' Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product ,$id)
    {
        $products=Product::find($id);
        return view('dash_pages.pages.Categories&Products.editeProduct' , compact('products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:5|max:10000',
            // 'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        
        $products=new Product();
        $products['name'] = request('name');
        $products['description'] = request('description');
            $file=$request->file('image1');
      
            if( request('image1')){
                $file=$request->file('image1');
                $extention=$file->getClientOriginalExtension();
                $sha1 = sha1($file->getClientOriginalName());
                $filename=time().'_'.$sha1.'.'.$extention;
                $file->move('img/product-img/',$filename);
                $products->image1=$filename;
               }
            //    if( request('image2')){
            //        $file1=$request->file('image2');
            //        $extention=$file1->getClientOriginalExtension();
            //        $sha1 = sha1($file1->getClientOriginalName());
            //        $filename1=time().'_'.$sha1.'.'.$extention;
            //        $file1->move('img/product-img/',$filename1);
            //        $products->image2=$filename1;
            //       }
            //       if(request('image3')){
            //        $file2=$request->file('image3');
            //        $extention=$file2->getClientOriginalExtension();
            //        $sha1 = sha1($file2->getClientOriginalName());
            //        $filename2=time().'_'.$sha1.'.'.$extention;
            //        $file2->move('img/product-img/',$filename2);
            //        $products->image3=$filename2;}
               
           $products['price'] = request('price');
           $products['color'] =request('color'); 
           $products['user_id'] =request('user_id'); 
           $products['category_id'] =request('category_id'); 
            $products -> save();
    
       return redirect('dashboard/Products')
       ->with('message',' Successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product ,$id)
    {
        $products = Product::findOrFail($id);
       $products->delete();
        return back();
    }
    }

