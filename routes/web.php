<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\GenreController as AdminGenreController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::post('/books/{book}/comments', [BookController::class, 'storeComment'])
    ->middleware('auth')
    ->name('books.comments.store');

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
   
    Route::get('/admin/genres', [AdminGenreController::class, 'index'])
    ->name('admin.genres.index');

    Route::get('/admin/genres/create', [AdminGenreController::class, 'create'])
    ->name('admin.genres.create');

    Route::post('/admin/genres', [AdminGenreController::class, 'store'])
    ->name('admin.genres.store');

    Route::get('/admin/genres/{genre}', [AdminGenreController::class, 'show'])
    ->name('admin.genres.show');

    Route::get('/admin/genres/{genre}/edit', [AdminGenreController::class, 'edit'])
    ->name('admin.genres.edit');

    Route::put('/admin/genres/{genre}', [AdminGenreController::class, 'update'])
    ->name('admin.genres.update');

    Route::delete('/admin/genres/{genre}', [AdminGenreController::class, 'destroy'])
    ->name('admin.genres.destroy');
    
    Route::get('/admin/comments', [AdminCommentController::class, 'index'])
    ->name('admin.comments.index');

    Route::get('/admin/comments/{comment}', [AdminCommentController::class, 'show'])
    ->name('admin.comments.show');

    Route::get('/admin/comments/{comment}/edit', [AdminCommentController::class, 'edit'])
    ->name('admin.comments.edit');

    Route::put('/admin/comments/{comment}', [AdminCommentController::class, 'update'])
    ->name('admin.comments.update');

    Route::delete('/admin/comments/{comment}', [AdminCommentController::class, 'destroy'])
    ->name('admin.comments.destroy');

    Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])
    ->name('admin.users.index');
    
    Route::delete('/admin/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])
    ->name('admin.users.destroy');
}); 