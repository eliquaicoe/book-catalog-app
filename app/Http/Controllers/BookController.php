<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::with('genre')->latest()->get();

        return view('books.index', compact('books'));
    }

    public function show(Book $book): View
    {
        $book->load('genre', 'user', 'comments.user');

        return view('books.show', compact('book'));
    }
}