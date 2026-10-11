<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Books - Book Catalog App</title>
</head>
<body>
    <h1>Manage Books</h1>

    @if (session('success'))
    <p>{{ session('success') }}</p>
@endif

   <p>
    <a href="{{ route('admin.books.create') }}">+ Add New Book</a>
   </p>

    <p>Welcome, {{ auth()->user()->name }}!</p>

    <p><a href="{{ route('admin.dashboard') }}">Back to Admin Dashboard</a></p>

    <h2>All Books</h2>

    @forelse ($books as $book)
        <article>
            <h3>{{ $book->title }}</h3>
            <p>Author: {{ $book->author }}</p>
            <p>Genre: {{ $book->genre->name }}</p>
            <p>Added by: {{ $book->user->name }}</p>

            <p>
        <a href="{{ route('admin.books.edit', $book) }}">Edit</a>
            </p>
        </article>
        <hr>
    @empty
        <p>No books have been added yet.</p>
    @endforelse
</body>
</html>