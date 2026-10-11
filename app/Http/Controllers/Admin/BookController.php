<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::with('genre', 'user')->latest()->get();

        return view('admin.books.index', compact('books'));
    }

    public function create(): View
    {
        //
    }

    public function store()
    {
        //
    }

    public function show(Book $book): View
    {
        //
    }

    public function edit(Book $book): View
    {
        //
    }

    public function update(Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
}