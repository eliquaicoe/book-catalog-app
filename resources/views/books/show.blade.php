<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - Book Catalog</title>
</head>
<body>
    <a href="{{ route('books.index') }}">← Back to all books</a>

    <h1>{{ $book->title }}</h1>

    <p><strong>Author:</strong> {{ $book->author }}</p>

    <p><strong>Genre:</strong> {{ $book->genre->name }}</p>

    <h2>About this book</h2>
    <p>{{ $book->description }}</p>

    <p><strong>Added by:</strong> {{ $book->user->name }}</p>

     <h2>Comments</h2>

    @forelse ($book->comments as $comment)
    <article>
        <p><strong>{{ $comment->user->name }}</strong></p>
        <p>{{ $comment->text }}</p>
    </article>
    <hr>
    @empty
    <p>No comments yet. Be the first to comment!</p>
    @endforelse

</body>
</html>