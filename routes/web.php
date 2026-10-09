<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::resource('categories', CategoryController::class)
    ->except(['show']);
Route::resource('books', BookController::class)
    ->except(['show']);
