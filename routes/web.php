<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BookController as AdminBookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');

Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genres.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');
  
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

    Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

    Route::middleware('admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/books', [AdminBookController::class, 'index'])
        ->name('admin.books.index');

    Route::get('/admin/books/create', [AdminBookController::class, 'create'])
        ->name('admin.books.create');

    Route::post('/admin/books', [AdminBookController::class, 'store'])
        ->name('admin.books.store');
    
    Route::get('/admin/books/{book}/edit', [AdminBookController::class, 'edit'])
    ->name('admin.books.edit');

    Route::put('/admin/books/{book}', [AdminBookController::class, 'update'])
    ->name('admin.books.update');
   
     Route::delete('/admin/books/{book}', [AdminBookController::class, 'destroy'])
    ->name('admin.books.destroy');

}); 