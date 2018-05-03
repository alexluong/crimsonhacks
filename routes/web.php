<?php

Route::get('/', function () {
    $name = 'Alex';
    return view('welcome', compact('name'));
});

Auth::routes();

Route::get('/admin', 'AdminController@index');

Route::get('/home', 'HomeController@index')->name('home');
