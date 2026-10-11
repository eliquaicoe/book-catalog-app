<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\Request;

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
    
    public function storeComment(Request $request, Book $book)
    {
    $validated = $request->validate([
        'text' => ['required', 'string', 'max:2000'],
    ]);

    $book->comments()->create([
        'text' => $validated['text'],
        'user_id' => $request->user()->id,
    ]);

    return redirect()
        ->route('books.show', $book)
        ->with('success', 'Your comment was added successfully!');
    }
}