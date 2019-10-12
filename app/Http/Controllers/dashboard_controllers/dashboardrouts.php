<?php

namespace App\Http\Controllers\dashboard_controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardrouts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('dash_pages.index');        
    }
    public function widgets()
    {
        return view('dash_pages.pages.widgets');
    }
    //  public function users()
    // {
    //     return view('dash_pages.pages.Admins & Users.users');
    // }
    
    // public function Admins ()
    // {
    //     return view('dash_pages.pages.Admins & Users.Admins');
    // } 
    public function Inline()
    {
        return view('dash_pages.pages.charts.inline');
    
    }
    //  public function Products()
    // {
    //     return view('dash_pages.pages.Categories&Products.Products');
    // } 
    public function modals()
    {
        return view('dash_pages.pages.UI.modals');
    }
     public function navbar()
    {
        return view('dash_pages.pages.UI.navbar');
    }
    public function sliders()
    {
        return view('dash_pages.pages.UI.sliders');
    }
    public function data()
    {
        return view('dash_pages.pages.UI.data');
    }
    public function jsgrid()
    {
        return view('dash_pages.pages.tables.jsgrid');
    }
    public function simple()
    {
        return view('dash_pages.pages.tables.simple');
    }
    public function calendar()
    {
        return view('dash_pages.pages.calendar');
    }
    public function gallery()
    {
        return view('dash_pages.pages.gallery');
    }
    public function compose()
    {
        return view('dash_pages.pages.mailbox.compose');
    }
    public function mailbox()
    {
        return view('dash_pages.pages.mailbox.mailbox');
    }
    public function read()
    {
        return view('dash_pages.pages.mailbox.read-mailbox');
    }
    public function page404()
    {
        return view('dash_pages.pages.Extra.404');
    }
    public function page500()
    {
        return view('dash_pages.pages.Extra.500');
    }
    public function contacts()
    {
        return view('dash_pages.pages.Extra.contacts');
    } 
    public function e_commerce()
    {
        return view('dash_pages.pages.Extra.e-commerce');
    }
    public function language_menu()
    {
        return view('dash_pages.pages.Extra.language-menu');
    }
    public function login()
    {
        return view('dash_pages.pages.Extra.login');
    }
    public function registerr()
    {
        return view('dash_pages.pages.Extra.register');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
