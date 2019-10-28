<?php

namespace App\Http\Controllers\dashboard_controllers;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('dash_pages.pages.Comments&Orders.comment',compact('comments'));
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
     
        if(\Auth::check()){
            $product = Product::find($request->id);
            $comments=new Comment();
            $comments['title']=$request->input('title');
            $comments['description']=$request->input('description');
            $comments['status']=$request->input('status');
            $comments['product_id']=$request->input('product_id');
            $comments['user_id']=auth()->user()->id;
            $comments->save();
            return back();
        }else{
            return redirect("login");

        }

       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comment::find($id);
        return view('dash_pages.pages.Comments&Orders.commentData' , compact('comments' ,'id' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments=Comment::find($id);
        $comments->delete();
        return back();
    }
}
