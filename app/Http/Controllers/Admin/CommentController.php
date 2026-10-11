<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function index(): View
    {
        $comments = Comment::with('user', 'book')
            ->latest()
            ->get();

        return view('admin.comments.index', compact('comments'));
    }

    public function show(Comment $comment): View
    {
        $comment->load('user', 'book');

        return view('admin.comments.show', compact('comment'));
    }

    public function edit(Comment $comment): View
    {
        return view('admin.comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'text' => ['required', 'string', 'max:2000'],
        ]);

        $comment->update($validated);

        return redirect()
            ->route('admin.comments.index')
            ->with('success', 'Comment updated successfully!');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()
            ->route('admin.comments.index')
            ->with('success', 'Comment deleted successfully!');
    }
}
