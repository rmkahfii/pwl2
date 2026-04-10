<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Kelompok 1'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/activity', function () {
    return view('activity', [
        'title' => 'Activity'
    ]);
});

Route::get('/list-data', function() {
    return view('list-data', [
        'title' => 'List Data'
    ]);
});

