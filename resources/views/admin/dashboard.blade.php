@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h2>Admin Dashboard</h2>

    <p>Welcome, Site Admin!</p>
    <p>You have successfully accessed the admin area.</p>

    <h3>Manage Your Catalog</h3>

    <ul>
        <li>
            <a href="{{ route('admin.books.index') }}">Manage Books</a>
        </li>
        <li>
            <a href="{{ route('admin.genres.index') }}">Manage Genres</a>
        </li>
        <li>
            <a href="{{ route('admin.comments.index') }}">Manage Comments</a>
        </li>
        <li>
            <a href="{{ route('admin.users.index') }}">Manage Users</a>
        </li>
    </ul>
@endsection