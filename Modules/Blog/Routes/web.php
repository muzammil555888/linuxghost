<?php

use Illuminate\Support\Facades\Route;

Route::resources([
    'category' => CategoryController::class,
    'post' => PostController::class,
    'tag' => TagController::class,    
]);