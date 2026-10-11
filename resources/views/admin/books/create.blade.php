<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book - Book Catalog App</title>
</head>
<body>
    <h1>Add a New Book</h1>

    <p><a href="{{ route('admin.books.index') }}">Back to Manage Books</a></p>

    @if ($errors->any())
        <div>
            <p>Please fix the following errors:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.books.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Book Title:</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
            >
        </div>

        <div>
            <label for="author">Author:</label>
            <input
                type="text"
                id="author"
                name="author"
                value="{{ old('author') }}"
                required
            >
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea
                id="description"
                name="description"
                required
            >{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="genre_id">Genre:</label>
            <select id="genre_id" name="genre_id" required>
                <option value="">Choose a genre</option>
                @foreach ($genres as $genre)
                    <option
                        value="{{ $genre->id }}"
                        @selected(old('genre_id') == $genre->id)
                    >
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Save Book</button>
    </form>
</body>
</html>