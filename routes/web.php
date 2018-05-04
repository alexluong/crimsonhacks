<?php

Route::get('/', function () {
    $name = 'Alex';
    return view('welcome', compact('name'));
});

Auth::routes();

Route::get('/admin', 'AdminController@index');

Route::get('/dashboard' , 'HomeController@index')->name('home');
Route::get('/apply'     , 'HomeController@apply');
