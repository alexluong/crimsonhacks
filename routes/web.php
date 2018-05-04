<?php

Route::get('/', function () {
    $name = 'Alex';
    return view('welcome', compact('name'));
});

Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');