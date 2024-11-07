<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/homepage", function(){
    return view("homepage");
});

Route::get("/category", function(){
    return view("category");
});

Route::get("/detail", function(){
    return view("detail");
});