<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\View\View;

class GenreController extends Controller
{
    public function index(): View
    {
        $genres = Genre::orderBy('name')->get();

        return view('genres.index', compact('genres'));
    }

    public function show(Genre $genre): View
{
    $genre->load('books');

    return view('genres.show', compact('genre'));
}

}