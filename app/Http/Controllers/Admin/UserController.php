<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('name')->get();

        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
    // Stop the logged-in admin from deleting their own account.
    if ($user->id === auth()->id()) {
        return redirect()->route('admin.users.index')
            ->with('error', 'You cannot delete your own account.');
    }

    // Keep users who still have books or comments.
    if ($user->books()->exists() || $user->comments()->exists()) {
        return redirect()->route('admin.users.index')
            ->with('error', 'This user has books or comments and cannot be deleted.');
    }

    $user->delete();

    return redirect()->route('admin.users.index')
        ->with('success', 'User deleted successfully!');
    }
}
