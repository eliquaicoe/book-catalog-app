@extends('layouts.app')

@section('title', 'Book Catalog')

@section('content')
    <h2>Our Book Catalog</h2>

    @forelse ($books as $book)
        <article>
            <h3>
                <a href="{{ route('books.show', $book) }}">
                    {{ $book->title }}
                </a>
            </h3>

            <p>Author: {{ $book->author }}</p>
            <p>Genre: {{ $book->genre->name }}</p>
            <p>{{ $book->description }}</p>
        </article>
        <hr>
    @empty
        <p>No books have been added yet.</p>
    @endforelse
@endsection