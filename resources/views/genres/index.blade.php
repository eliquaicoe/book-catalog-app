@extends('layouts.app')

@section('title', 'Genres')

@section('content')
    <h2>Browse Genres</h2>

    @forelse ($genres as $genre)
        <article>
            <h3>
                <a href="{{ route('genres.show', $genre) }}">
                    {{ $genre->name }}
                </a>
            </h3>

            @if ($genre->description)
                <p>{{ $genre->description }}</p>
            @endif
        </article>
        <hr>
    @empty
        <p>No genres have been added yet.</p>
    @endforelse
@endsection