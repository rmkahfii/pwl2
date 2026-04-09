<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard'); // Kita paksa halaman utama nampilin file dashboard kamu
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/activity', function () {
    return view('activity');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/list-data', function() {
    return view('list-data');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});