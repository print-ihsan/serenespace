<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serene Space - Welcome</title>
    <!-- Load CSS yang sudah kita buat -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Tambahkan Tailwind untuk design yang lebih modern -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f0f9f0 0%, #e6f7e6 100%);
            min-height: 100vh;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(34, 197, 94, 0.2);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); }
            100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .stat-card {
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #10b981, #059669);
        }
        
        .activity-item {
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }
        
        .activity-item:hover {
            border-left-color: #10b981;
            background-color: #f0fdf4;
        }
    </style>
</head>
<body class="text-gray-800">
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="nav-logo">Serene Space</a>
            <div class="nav-menu">
                @auth
                    <span class="nav-welcome">Welcome, {{ Auth::user()->name }}!</span>
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                    <form method="POST" action="/logout" class="nav-form">
                        @csrf
                        <button type="submit" class="nav-link logout-btn">Logout</button>
                    </form>
                @else
                    <button class="nav-link login-btn" onclick="openLoginModal()">Login</button>
                    <button class="nav-link register-btn" onclick="openRegisterModal()">Register</button>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8" style="margin-top: 70px;">
        <!-- Welcome Section -->
        <div class="gradient-bg rounded-2xl shadow-lg p-6 mb-8 text-white fade-in">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-2xl font-bold mb-2">Welcome to Your Serene Space</h2>
                    <p class="text-green-100">Take a moment to breathe and be present.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-white/20 p-3 rounded-full pulse-animation">
                        <i class="fas fa-leaf text-white text-xl"></i>
                    </div>
                    <div id="logo-animation" class="w-16 h-16"></div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="stat-card bg-white rounded-xl shadow-sm p-6 border border-green-100 card-hover fade-in">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">Today's Thoughts</h3>
                        <p class="text-3xl font-bold text-green-600">1</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-brain text-green-600 text-xl"></i>
                    </div>
                </div>
                <p class="text-sm text-green-500 mt-2">+0 from yesterday</p>
            </div>
            
            <div class="stat-card bg-white rounded-xl shadow-sm p-6 border border-green-100 card-hover fade-in" style="animation-delay: 0.1s">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">Mindfulness Minutes</h3>
                        <p class="text-3xl font-bold text-green-600">11</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-clock text-green-600 text-xl"></i>
                    </div>
                </div>
                <p class="text-sm text-green-500 mt-2">Keep up the good work!</p>
            </div>
            
            <div class="stat-card bg-white rounded-xl shadow-sm p-6 border border-green-100 card-hover fade-in" style="animation-delay: 0.2s">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">Art Created</h3>
                        <p class="text-3xl font-bold text-green-600">2</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-palette text-green-600 text-xl"></i>
                    </div>
                </div>
                <p class="text-sm text-green-500 mt-2">Express your creativity</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent Thoughts -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100 fade-in" style="animation-delay: 0.3s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-semibold text-green-800">Recent Thoughts</h3>
                    <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-pen mr-1"></i> Journal
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="activity-item p-4 bg-green-50 rounded-lg">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <p class="text-green-700 font-medium">IDN MANTAB excited</p>
                                <div class="flex items-center mt-2">
                                    <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">Positive</span>
                                    <span class="text-xs text-green-500 ml-3"><i class="far fa-clock mr-1"></i>3 days ago</span>
                                </div>
                            </div>
                            <div class="bg-white p-2 rounded-full shadow-sm">
                                <i class="fas fa-feather text-green-500"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center py-4">
                        <button class="text-green-600 hover:text-green-800 font-medium flex items-center justify-center mx-auto">
                            <i class="fas fa-plus mr-2"></i> Add New Thought
                        </button>
                    </div>
                </div>
            </div>

            <!-- Recent Sessions -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100 fade-in" style="animation-delay: 0.4s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-semibold text-green-800">Recent Mindfulness</h3>
                    <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-spa mr-1"></i> Practice
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="activity-item p-4 bg-green-50 rounded-lg">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="bg-green-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-wind text-green-600"></i>
                                </div>
                                <div>
                                    <span class="text-green-700 font-medium">Breathing Focus</span>
                                    <div class="text-sm text-green-600 mt-1">
                                        Focus: <span class="font-semibold">5/10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-green-600 font-medium">1min</span>
                                <div class="text-xs text-green-500 mt-1">3 days ago</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="activity-item p-4 bg-green-50 rounded-lg">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="bg-green-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-mountain text-green-600"></i>
                                </div>
                                <div>
                                    <span class="text-green-700 font-medium">Meditation Focus</span>
                                    <div class="text-sm text-green-600 mt-1">
                                        Focus: <span class="font-semibold">5/10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-green-600 font-medium">5min</span>
                                <div class="text-xs text-green-500 mt-1">3 days ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Daily Inspiration -->
        <div class="mt-8 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl shadow-lg p-6 text-white text-center">
            <h3 class="text-xl font-bold mb-2">Daily Inspiration</h3>
            <p class="text-green-100 max-w-2xl mx-auto">"Peace comes from within. Do not seek it without." - Buddha</p>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <h2 class="text-2xl font-bold text-green-800 mb-6 text-center">Login to Your Account</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/login" class="auth-form">
                @csrf
                
                <div class="form-group">
                    <label for="login_email" class="form-label">Email</label>
                    <input type="email" id="login_email" name="email" class="form-input" 
                           value="{{ old('email') }}" required placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="login_password" class="form-label">Password</label>
                    <input type="password" id="login_password" name="password" class="form-input" 
                           required placeholder="Enter your password">
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="login_remember" name="remember" class="form-checkbox">
                    <label for="login_remember" class="form-checkbox-label">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary btn-full mt-4">
                    <i class="fas fa-sign-in-alt mr-2"></i> LOG IN
                </button>
            </form>

            <div class="auth-links mt-4">
                <p class="auth-text">
                    Don't have an account? 
                    <a href="#" onclick="closeLoginModal(); openRegisterModal();" class="auth-link">
                        Register here
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeRegisterModal()">&times;</span>
            <h2 class="text-2xl font-bold text-green-800 mb-6 text-center">Create Your Account</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/register" class="auth-form">
                @csrf
                
                <div class="form-group">
                    <label for="register_name" class="form-label">Full Name</label>
                    <input type="text" id="register_name" name="name" class="form-input" 
                           value="{{ old('name') }}" required placeholder="Enter your full name">
                </div>

                <div class="form-group">
                    <label for="register_email" class="form-label">Email</label>
                    <input type="email" id="register_email" name="email" class="form-input" 
                           value="{{ old('email') }}" required placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="register_password" class="form-label">Password</label>
                    <input type="password" id="register_password" name="password" class="form-input" 
                           required placeholder="Create a password (min. 8 characters)">
                </div>

                <div class="form-group">
                    <label for="register_password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" id="register_password_confirmation" name="password_confirmation" 
                           class="form-input" required placeholder="Confirm your password">
                </div>

                <button type="submit" class="btn btn-primary btn-full mt-4">
                    <i class="fas fa-user-plus mr-2"></i> REGISTER
                </button>
            </form>

            <div class="auth-links mt-4">
                <p class="auth-text">
                    Already have an account? 
                    <a href="#" onclick="closeRegisterModal(); openLoginModal();" class="auth-link">
                        Login here
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Lottie animation for logo
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('logo-animation');
            const animation = document.createElement('lottie-player');
            animation.src = 'https://assets1.lottiefiles.com/packages/lf20_wnynzqbb.json';
            animation.background = 'transparent';
            animation.speed = '1';
            animation.style.width = '100%';
            animation.style.height = '100%';
            animation.loop = true;
            animation.autoplay = true;
            container.appendChild(animation);
            
            // Add subtle animations to cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.card-hover').forEach(card => {
                observer.observe(card);
            });
        });

        // Modal functions
        function openLoginModal() {
            const modal = document.getElementById('loginModal');
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
            
            setTimeout(() => {
                const emailField = document.getElementById('login_email');
                if (emailField) emailField.focus();
            }, 100);
        }

        function closeLoginModal() {
            const modal = document.getElementById('loginModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function openRegisterModal() {
            const modal = document.getElementById('registerModal');
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
            
            setTimeout(() => {
                const nameField = document.getElementById('register_name');
                if (nameField) nameField.focus();
            }, 100);
        }

        function closeRegisterModal() {
            const modal = document.getElementById('registerModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            
            if (event.target === loginModal) {
                closeLoginModal();
            }
            if (event.target === registerModal) {
                closeRegisterModal();
            }
        }
    </script>
</body>
</html>