<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();

    return view('home', [
        'users' => $users,
        'totalUser' => $users->count()
    ]);
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
