<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $genre->name }} Books</title>
</head>
<body>
    <a href="{{ route('genres.index') }}">← Back to all genres</a>

    <h1>{{ $genre->name }} Books</h1>

    @forelse ($genre->books as $book)
        <article>
            <h2>
                <a href="{{ route('books.show', $book) }}">
                    {{ $book->title }}
                </a>
            </h2>

            <p><strong>Author:</strong> {{ $book->author }}</p>

            <p>{{ $book->description }}</p>
        </article>
    @empty
        <p>No books have been added to this genre yet.</p>
    @endforelse
</body>
</html>