<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MyApp</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="nav-logo">MyApp</a>
            <div class="nav-menu">
                <span class="nav-welcome">Welcome, {{ Auth::user()->name }}!</span>
                <a href="/dashboard" class="nav-link">Dashboard</a>
                <form method="POST" action="/logout" class="nav-form">
                    @csrf
                    <button type="submit" class="nav-link logout-btn">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="main-content">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <h1 class="dashboard-title">Dashboard</h1>
                <p class="dashboard-subtitle">Welcome back, {{ Auth::user()->name }}!</p>
            </div>
            
            <div class="dashboard-stats">
                <div class="stat-card">
                    <div class="stat-icon">👤</div>
                    <div class="stat-info">
                        <h3>Profile</h3>
                        <p>Manage your account information</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">📊</div>
                    <div class="stat-info">
                        <h3>Analytics</h3>
                        <p>View your activity statistics</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">⚙️</div>
                    <div class="stat-info">
                        <h3>Settings</h3>
                        <p>Configure your preferences</p>
                    </div>
                </div>
            </div>
            
            <div class="dashboard-content">
                <div class="info-card">
                    <h3>User Information</h3>
                    <div class="user-info">
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Member since:</strong> {{ Auth::user()->created_at->format('F d, Y') }}</p>
                        <p><strong>Account type:</strong> Standard User</p>
                    </div>
                </div>
                
                <div class="dashboard-actions">
                    <a href="/" class="btn btn-secondary">Back to Home</a>
                    <form method="POST" action="/logout" class="inline-form">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>