<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Genres</title>
</head>
<body>
    <h1>Explore Book Genres</h1>

    <p>Choose a genre to explore its books.</p>

    @forelse ($genres as $genre)
        <article>
            
   <h2>
    <a href="{{ route('genres.show', $genre) }}">
        {{ $genre->name }}
    </a>
    </h2>

        </article>
    @empty
        <p>No genres have been added yet.</p>
    @endforelse

    <p><a href="/">Back to Home</a></p>
</body>
</html>