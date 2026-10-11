<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Book Catalog App</title>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <p>Welcome, {{ auth()->user()->name }}!</p>

    <p>You have successfully accessed the admin area.</p>

    <p><a href="{{ route('books.index') }}">View Book Catalog</a></p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Log Out</button>
    </form>
</body>
</html>