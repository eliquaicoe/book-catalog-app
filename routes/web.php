<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');

Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genres.show');