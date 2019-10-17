<?php

namespace App\Http\Controllers\dashboard_controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Usersctcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderby('created_at', 'asc')->get();
        return view('dash_pages.pages.Admins & Users.users' , compact('users'));
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
        $User=new User();
        $User->name=$request->input('name');
        $User->email=$request->input('email');
        $User->password=$request->input('password');
        $User->role=$request->input('role');
        // $users->image=$request->input('image');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('img/users-img/',$filename);
            $User->image=$filename;

        }else{
            return $request;
            $User->image='';
        }
        $User->save();
        $users=User::orderby('created_at', 'asc')->get();
        return view('dash_pages.pages.Admins & Users.users' , compact('users'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::find($id);
        return redirect('dashboard/users');
    }
}
