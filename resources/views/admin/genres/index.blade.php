<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Genres</title>
</head>
<body>
    <h1>Manage Genres</h1>

    <p>
        <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
    </p>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <p>
        <a href="{{ route('admin.genres.create') }}">Add New Genre</a>
    </p>

    @forelse ($genres as $genre)
        <hr>

        <h2>{{ $genre->name }}</h2>

        <p>Books in this genre: {{ $genre->books_count }}</p>

        <p>
            <a href="{{ route('admin.genres.show', $genre) }}">View</a>
            |
            <a href="{{ route('admin.genres.edit', $genre) }}">Edit</a>
        </p>

        <form action="{{ route('admin.genres.destroy', $genre) }}"
              method="POST"
              onsubmit="return confirm('Delete this genre?');">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>
    @empty
        <p>No genres have been added yet.</p>
    @endforelse
</body>
</html>
