<?php

Route::get('/', function () {
    return view('blog.index');
});

Route::get('/dashboard/index', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/signin', function () {
    return view('dashboard.signin');
});


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
