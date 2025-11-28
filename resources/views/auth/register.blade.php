<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SereneSpace</title>
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

        .register-container {
            width: 100%;
            max-width: 400px;
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .register-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .register-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .register-subtitle {
            color: var(--text-light);
            font-size: 1rem;
        }

        .register-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border-color);
        }

        .register-form {
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

        .btn-register {
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

        .btn-register:hover {
            background: var(--dark-green);
            transform: translateY(-1px);
        }

        .register-links {
            text-align: center;
            margin-top: 2rem;
        }

        .register-link {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        .register-text {
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
            .register-card {
                padding: 2rem 1.5rem;
            }
            
            body {
                padding: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Register Header -->
        <div class="register-header">
            <div class="register-icon">🌿</div>
            <h1 class="register-title">SereneSpace</h1>
            <p class="register-subtitle">Create your account</p>
        </div>

        <!-- Register Card -->
        <div class="register-card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf
                
                <div class="form-group">
                    <label for="name" class="form-label">
                        <span>👤</span>
                        Full Name
                    </label>
                    <input type="text" id="name" name="name" class="form-input" 
                           value="{{ old('name') }}" required autofocus placeholder="Enter your full name">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">
                        <span>📧</span>
                        Email Address
                    </label>
                    <input type="email" id="email" name="email" class="form-input" 
                           value="{{ old('email') }}" required placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">
                        <span>🔒</span>
                        Password
                    </label>
                    <input type="password" id="password" name="password" class="form-input" 
                           required placeholder="Create a password" minlength="6">
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">
                        <span>✅</span>
                        Confirm Password
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" 
                           class="form-input" required placeholder="Confirm your password">
                </div>

                <button type="submit" class="btn-register">
                    CREATE ACCOUNT
                </button>
            </form>

            <div class="register-links">
                <p class="register-text">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="register-link">Login here</a>
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