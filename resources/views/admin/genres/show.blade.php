<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $genre->name }} - Genre Details</title>
</head>
<body>
    <h1>{{ $genre->name }}</h1>

    <p>
        <a href="{{ route('admin.genres.index') }}">Back to Genres</a>
    </p>

    <p>Number of books: {{ $genre->books->count() }}</p>

    <h2>Books in this Genre</h2>

    @forelse ($genre->books as $book)
        <article>
            <h3>{{ $book->title }}</h3>
            <p>Author: {{ $book->author }}</p>
        </article>
    @empty
        <p>There are no books in this genre yet.</p>
    @endforelse

    <p>
        <a href="{{ route('admin.genres.edit', $genre) }}">Edit Genre</a>
    </p>
</body>
</html>
