<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Genre</title>
</head>
<body>
    <h1>Add a New Genre</h1>

    <p>
        <a href="{{ route('admin.genres.index') }}">Back to Genres</a>
    </p>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.genres.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Genre Name:</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
                maxlength="255"
            >
        </div>

        <button type="submit">Save Genre</button>
    </form>
</body>
</html>
