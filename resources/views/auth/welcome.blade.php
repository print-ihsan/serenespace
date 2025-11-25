<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="nav-logo">MyApp</a>
            <div class="nav-menu">
                @auth
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                    <form method="POST" action="/logout" class="nav-form">
                        @csrf
                        <button type="submit" class="nav-link logout-btn">Logout</button>
                    </form>
                @else
                    <a href="/login" class="nav-link">Login</a>
                    <a href="/register" class="nav-link">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="main-content">
        <div class="welcome-container">
            <div class="welcome-content">
                <h1 class="welcome-title">Welcome to MyApp</h1>
                <p class="welcome-description">
                    Aplikasi web modern dengan fitur authentication lengkap.
                </p>
                <div class="welcome-buttons">
                    @auth
                        <a href="/dashboard" class="btn btn-primary">Go to Dashboard</a>
                    @else
                        <a href="/login" class="btn btn-primary">Login</a>
                        <a href="/register" class="btn btn-secondary">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>