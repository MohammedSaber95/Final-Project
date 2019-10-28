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
        $input = $request -> all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'role' =>  'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
        ]);
        $User=new User();
        $User['name']=$request->input('name');
        $User['email']=$request->input('email');
        $User['password']=$request->input('password');
        $User['role']=$request->input('role');
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
        return back()->with('message',' Successfully added');
        
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
        $User=User::find($id);
        return view('dash_pages.pages.Admins & Users.EditeUsers' , compact('User' , $User));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id )
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'role' =>  'required',
       ]);
        $User=User::find($id);
        $User['name']=request('name');
        $User['email']=request('email');
        $User['password']=request('password');
        $User['role']=request('role');
        // $users->image=$request->input('image');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('img/users-img/',$filename);
            $User->image=$filename;

    
        }
        $User->save();
        return redirect('dashboard/users')->with('sucess','data updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $users = User::findOrFail($id);
       $users->delete();
        return redirect('dashboard/users');
    }
}
