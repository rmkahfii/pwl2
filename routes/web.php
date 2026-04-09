<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'totalUser' => User::count(),
        'users' => User::latest()->take(5)->get()
    ]);
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

Route::get('/report', function () {
    return view('report');
});

Route::get('/list-data', function() {
    return view('list-data');
});
