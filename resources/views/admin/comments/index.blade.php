<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Comments</title>
</head>
<body>
    <h1>Manage Comments</h1>

    <p>
        <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
    </p>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    @forelse ($comments as $comment)
        <hr>

        <p><strong>Book:</strong> {{ $comment->book->title }}</p>
        <p><strong>Written by:</strong> {{ $comment->user->name }}</p>
        <p>{{ $comment->text }}</p>

        <p>
            <a href="{{ route('admin.comments.show', $comment) }}">View</a>
            |
            <a href="{{ route('admin.comments.edit', $comment) }}">Edit</a>
        </p>

        <form action="{{ route('admin.comments.destroy', $comment) }}"
              method="POST"
              onsubmit="return confirm('Are you sure you want to delete this comment?');">
            @csrf
            @method('DELETE')

            <button type="submit">Delete Comment</button>
        </form>
    @empty
        <p>There are no comments yet.</p>
    @endforelse
</body>
</html>