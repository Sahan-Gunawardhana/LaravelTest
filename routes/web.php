<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second', function(){
    return view('second');
});

Route::view('/simple','simple');

Route::view('/products','products');