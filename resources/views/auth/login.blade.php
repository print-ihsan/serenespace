<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SereneSpace</title>
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <style>
        /* Simple Green & White Theme */
        :root {
            --primary-green: #10b981;
            --dark-green: #059669;
            --white: #ffffff;
            --light-gray: #f8fafc;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --border-color: #e5e7eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .login-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .login-subtitle {
            color: var(--text-light);
            font-size: 1rem;
        }

        .login-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border-color);
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .form-label-icon {
            color: var(--primary-green);
            width: 16px;
            height: 16px;
        }

        .form-input {
            padding: 0.75rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        .checkbox-group {
            flex-direction: row;
            align-items: center;
            gap: 0.5rem;
        }

        .form-checkbox {
            width: 1rem;
            height: 1rem;
            accent-color: var(--primary-green);
        }

        .form-checkbox-label {
            margin-bottom: 0;
            font-size: 0.9rem;
            color: var(--text-dark);
        }

        .btn-login {
            background: var(--primary-green);
            color: var(--white);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        .btn-login:hover {
            background: var(--dark-green);
            transform: translateY(-1px);
        }

        .login-links {
            text-align: center;
            margin-top: 2rem;
        }

        .login-link {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .login-text {
            color: var(--text-light);
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        /* Alert Styles */
        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border-left: 4px solid;
            font-size: 0.9rem;
        }

        .alert-danger {
            background-color: #fef2f2;
            border-color: #f87171;
            color: #dc2626;
        }

        .alert-success {
            background-color: #f0fdf4;
            border-color: var(--primary-green);
            color: var(--dark-green);
        }

        .alert ul {
            margin: 0;
            padding-left: 1rem;
        }

        .alert li {
            margin-bottom: 0.25rem;
        }

        /* Back to Home */
        .back-home {
            text-align: center;
            margin-top: 2rem;
        }

        .back-home-link {
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: color 0.3s ease;
        }

        .back-home-link:hover {
            color: var(--primary-green);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-card {
                padding: 2rem 1.5rem;
            }
            
            body {
                padding: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Login Header -->
        <div class="login-header">
            <div class="login-icon">🌿</div>
            <h1 class="login-title">SereneSpace</h1>
            <p class="login-subtitle">Login to your account</p>
        </div>

        <!-- Login Card -->
        <div class="login-card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                
                <div class="form-group">
                    <label for="email" class="form-label">
                        <span>📧</span>
                        Email Address
                    </label>
                    <input type="email" id="email" name="email" class="form-input" 
                           value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">
                        <span>🔒</span>
                        Password
                    </label>
                    <input type="password" id="password" name="password" class="form-input" 
                           required placeholder="Enter your password">
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="remember" name="remember" class="form-checkbox">
                    <label for="remember" class="form-checkbox-label">Remember me</label>
                </div>

                <button type="submit" class="btn-login">
                    LOG IN
                </button>
            </form>

            <div class="login-links">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="login-link">
                        Forgot your password?
                    </a>
                @endif
                <p class="login-text">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="login-link">Register here</a>
                </p>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="back-home">
            <a href="{{ url('/') }}" class="back-home-link">
                ← Back to Home
            </a>
        </div>
    </div>
</body>
</html>