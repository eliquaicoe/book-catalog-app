<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog</title>
</head>
<body>
    <h1>Our Book Catalog</h1>

@if (Auth::check())
    <p>Welcome, {{ Auth::user()->name }}!</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Log Out</button>
    </form>
@else
    <p>
        <a href="{{ route('login') }}">Log In</a> |
        <a href="{{ route('register') }}">Register</a>
    </p>
@endif

    @forelse ($books as $book)
        <article>
        <h2>
            <a href="{{ route('books.show', $book) }}">
               {{ $book->title }}
            </a>
       </h2>
            <p>Author: {{ $book->author }}</p>
            <p>Genre: {{ $book->genre->name }}</p>
            <p>{{ $book->description }}</p>
        </article>
    @empty
        <p>No books have been added yet.</p>
    @endforelse
</body>
</html>