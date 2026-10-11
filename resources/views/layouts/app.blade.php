<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book Catalog App')</title>
</head>
<body>
    <header>
        <h1><a href="{{ url('/') }}">Book Catalog App</a></h1>

        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ route('books.index') }}">Books</a> |
            <a href="{{ route('genres.index') }}">Genres</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('contact') }}">Contact</a>

            @guest
                | <a href="{{ route('login') }}">Login</a>
                | <a href="{{ route('register') }}">Register</a>
            @else
                
                @if (auth()->user()->role === 'admin')
                    | <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                @endif

                <form action="{{ route('logout') }}" method="POST"
                      style="display: inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endguest
        </nav>

        <hr>
    </header>

    <main>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @if (session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Book Catalog App</p>
    </footer>
</body>
</html>