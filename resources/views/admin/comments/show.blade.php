<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Details</title>
</head>
<body>
    <h1>Comment Details</h1>

    <p>
        <a href="{{ route('admin.comments.index') }}">Back to Comments</a>
    </p>

    <p><strong>Book:</strong> {{ $comment->book->title }}</p>
    <p><strong>Written by:</strong> {{ $comment->user->name }}</p>
    <p><strong>Comment:</strong></p>

    <p>{{ $comment->text }}</p>

    <p>
        <a href="{{ route('admin.comments.edit', $comment) }}">Edit Comment</a>
    </p>
</body>
</html>