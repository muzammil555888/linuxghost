<?php

use Illuminate\Support\Facades\Route;


Route::controller(KatenController::class)->group(function () {
    Route::get('home', 'home')->name('home');
});