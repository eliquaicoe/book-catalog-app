<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GenreController extends Controller
{
    public function index(): View
    {
        $genres = Genre::withCount('books')->orderBy('name')->get();

        return view('admin.genres.index', compact('genres'));
    }

    public function create(): View
    {
        return view('admin.genres.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:genres,name'],
        ]);

        Genre::create($validated);

        return redirect()
            ->route('admin.genres.index')
            ->with('success', 'Genre added successfully!');
    }

    public function show(Genre $genre): View
    {
        $genre->load('books');

        return view('admin.genres.show', compact('genre'));
    }

    public function edit(Genre $genre): View
    {
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:genres,name,' . $genre->id,
            ],
        ]);

        $genre->update($validated);

        return redirect()
            ->route('admin.genres.index')
            ->with('success', 'Genre updated successfully!');
    }

    public function destroy(Genre $genre)
    {
        if ($genre->books()->exists()) {
            return redirect()
                ->route('admin.genres.index')
                ->with('error', 'You cannot delete a genre that still has books.');
        }

        $genre->delete();

        return redirect()
            ->route('admin.genres.index')
            ->with('success', 'Genre deleted successfully!');
    }
}
