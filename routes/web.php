<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.home.dashboard', ['type_menu' => 'Dashboard']);
    })->name('home');
});
