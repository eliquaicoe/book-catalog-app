<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Book Catalog App</title>
</head>
<body>
    <h1>Log In</h1>

    <form action="{{ route('login.store') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Log In</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>

    <p><a href="/">Back to Home</a></p>
</body>
</html>