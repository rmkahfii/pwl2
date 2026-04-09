<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
feature-statistik
    return view('dashboard'); 

    $users = User::all();

    return view('home', [
        'users' => $users,
        'totalUser' => $users->count()
    ]);
master
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