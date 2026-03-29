<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/contact', function () {
    return view('contact');
});