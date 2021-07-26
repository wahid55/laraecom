<?php

use Illuminate\Support\Facades\Route;
Route::prefix('admin')->name("admin.")->middleware(['theme:admin'])->group(function() {
    Route::middleware(['auth'])->group(function () {
        Route::view('/', 'home')->name('home');
    });    
});