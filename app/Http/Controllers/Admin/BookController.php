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
    $genres = \App\Models\Genre::orderBy('name')->get();

    return view('admin.books.create', compact('genres'));
}

    public function store(\Illuminate\Http\Request $request)
{
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'author' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'genre_id' => ['required', 'exists:genres,id'],
    ]);

    $validated['user_id'] = auth()->id();

    Book::create($validated);

    return redirect()
        ->route('admin.books.index')
        ->with('success', 'Book added successfully!');
}

    public function show(Book $book): View
    {
        //
    }

    public function edit(Book $book): View
   {
    $genres = \App\Models\Genre::orderBy('name')->get();

    return view('admin.books.edit', compact('book', 'genres'));
   }
    
public function update(\Illuminate\Http\Request $request, Book $book)
 {
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'author' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'genre_id' => ['required', 'exists:genres,id'],
    ]);

    $book->update($validated);

    return redirect()
        ->route('admin.books.index')
        ->with('success', 'Book updated successfully!');
 }

      public function destroy(Book $book)
    {
    $book->comments()->delete();

    $book->delete();

    return redirect()
        ->route('admin.books.index')
        ->with('success', 'Book deleted successfully!');
   }
}