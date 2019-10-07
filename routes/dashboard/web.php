<?php
Route::prefix('dashboard')->group(function(){
    Route::get('/index' , function(){
        return  view('dash_pages.index');
    })->name('index');
    Route::get('/widgets' , function(){
        return view('dash_pages.pages.widgets');
    })->name('widgits');
    Route::get('/ChartJs' , function(){
        return view('dash_pages.pages.charts.chartjs');
    })->name('chartJs');
    Route::get('/flot' , function(){
        return view('dash_pages.pages.charts.flot');
    })->name('flot');
    Route::get('/inline' , function(){
        return view('dash_pages.pages.charts.inline');
    })->name('Inline');
    Route::get('/buttons' , function(){
        return view('dash_pages.pages.UI.buttons');
    })->name('buttons');
    Route::get('/icons' , function(){
        return view('dash_pages.pages.UI.icons');
    })->name('icons');
    Route::get('/modals' , function(){
        return view('dash_pages.pages.UI.modals');
    })->name('modals');
    Route::get('/navbar' , function(){
        return view('dash_pages.pages.UI.navbar');
    })->name('navbar');
    Route::get('/sliders' , function(){
        return view('dash_pages.pages.UI.sliders');
    })->name('sliders');
    Route::get('/data' , function(){
        return view('dash_pages.pages.tables.data');
    })->name('datatables');
    Route::get('/jsgrid' , function(){
        return view('dash_pages.pages.tables.jsgrid');
    })->name('jsgrid');
    Route::get('/simple' , function(){
        return view('dash_pages.pages.tables.simple');
    })->name('simple');
    Route::get('/calendar' , function(){
        return view('dash_pages.pages.calendar');
    })->name('calendar');
    Route::get('/gallery' , function(){
        return view('dash_pages.pages.gallery');
    })->name('gallery');
    Route::get('/compose' , function(){
        return view('dash_pages.pages.mailbox.compose');
    })->name('compose');
    Route::get('/mailbox' , function(){
        return view('dash_pages.pages.mailbox.mailbox');
    })->name('inbox');
    Route::get('/read' , function(){
        return view('dash_pages.pages.mailbox.read-mail');
    })->name('read');
    Route::get('/404' , function(){
        return view('dash_pages.pages.Extra.404');
    })->name('404');
    Route::get('/500' , function(){
        return view('dash_pages.pages.Extra.500');
    })->name('500');
    Route::get('/contacts' , function(){
        return view('dash_pages.pages.Extra.contacts');
    })->name('contact');
    Route::get('/e-commerce' , function(){
        return view('dash_pages.pages.Extra.e_commerce');
    })->name('e-commerce');
    Route::get('/language-menu' , function(){
        return view('dash_pages.pages.Extra.language-menu');
    })->name('langs');
    Route::get('/login' , function(){
        return view('dash_pages.pages.Extra.login');
    })->name('login');
    Route::get('/register' , function(){
        return view('dash_pages.pages.Extra.register');
    })->name('register');
});
    // Route::get('/check' , function(){
    //     return "this dashboard";
    // });