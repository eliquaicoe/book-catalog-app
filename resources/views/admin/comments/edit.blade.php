<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comment</title>
</head>
<body>
    <h1>Edit Comment</h1>

    <p>
        <a href="{{ route('admin.comments.index') }}">Back to Comments</a>
    </p>

    <p><strong>Book:</strong> {{ $comment->book->title }}</p>
    <p><strong>Written by:</strong> {{ $comment->user->name }}</p>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.comments.update', $comment) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="text">Comment:</label>

            <textarea
                id="text"
                name="text"
                required
                maxlength="2000"
                rows="6"
            >{{ old('text', $comment->text) }}</textarea>
        </div>

        <button type="submit">Update Comment</button>
    </form>
</body>
</html>