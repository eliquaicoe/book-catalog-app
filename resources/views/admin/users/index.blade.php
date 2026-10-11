@extends('layouts.app')

@section('title', 'Manage Users')

@section('content')
    <h2>Manage Users</h2>

    <p>
        <a href="{{ route('admin.dashboard') }}">Back to Admin Dashboard</a>
    </p>

    @if ($users->isEmpty())
        <p>No users found.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Registered</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at?->format('d M Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection