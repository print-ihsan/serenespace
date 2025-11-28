<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SereneSpace | World's Meditation Platform</title>
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <style>
        /* Wide Layout - No Scroll */
        :root {
            --primary-green: #10b981;
            --dark-green: #059669;
            --light-green: #34d399;
            --soft-green: #d1fae5;
            --white: #ffffff;
            --text-dark: #1f2937;
            --text-light: #6b7280;
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
            padding: 2rem;
            overflow: hidden;
        }

        .wide-container {
            width: 100%;
            max-width: 1200px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        /* Left Side - Brand & CTA */
        .left-side {
            text-align: left;
            padding: 2rem;
        }

        .brand-section {
            margin-bottom: 3rem;
        }

        .brand-badge {
            display: inline-block;
            background: var(--soft-green);
            color: var(--primary-green);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
            border: 1px solid var(--light-green);
        }

        .brand-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .brand-title span {
            color: var(--primary-green);
            display: block;
        }

        .brand-subtitle {
            font-size: 1.3rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.5;
        }

        .welcome-section {
            margin-bottom: 2.5rem;
        }

        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .welcome-description {
            font-size: 1.1rem;
            color: var(--text-light);
            line-height: 1.6;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .btn {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
            color: var(--white);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-dark);
            border-color: var(--primary-green);
        }

        .btn-secondary:hover {
            background: var(--primary-green);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Right Side - Features */
        .right-side {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.5);
            height: fit-content;
        }

        .features-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 2rem;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.2rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            background: var(--white);
            border: 1px solid #f1f5f9;
        }

        .feature-item:hover {
            background: var(--soft-green);
            transform: translateX(5px);
            border-color: var(--light-green);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: var(--soft-green);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-green);
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .feature-content {
            flex: 1;
        }

        .feature-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .feature-desc {
            font-size: 0.9rem;
            color: var(--text-light);
            line-height: 1.4;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .wide-container {
                grid-template-columns: 1fr;
                gap: 2rem;
                max-width: 600px;
            }
            
            .left-side {
                text-align: center;
                padding: 1rem;
            }
            
            .brand-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }
            
            .brand-title {
                font-size: 2.5rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .right-side {
                padding: 2rem;
            }
        }

        @media (max-height: 700px) {
            body {
                align-items: flex-start;
                padding-top: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="wide-container">
        <!-- Left Side - Brand & CTA -->
        <div class="left-side">
            <div class="brand-section">
                <div class="brand-badge">
                    🌿 World's Meditation Platform
                </div>
                <h1 class="brand-title">
                    Serene<span>Space</span>
                </h1>
                <p class="brand-subtitle">
                    Your gateway to mindfulness and inner peace
                </p>
            </div>

            <div class="welcome-section">
                <h2 class="welcome-title">Welcome to Your Peaceful Sanctuary</h2>
                <p class="welcome-description">
                    Find calm, reduce stress, and improve your mental well-being through 
                    guided meditation and mindfulness practices. Start your journey today.
                </p>
            </div>

            <div class="action-buttons">
                <a href="{{ route('register') }}" class="btn btn-primary">
                    <span>🚀</span>
                    Start Your Journey
                </a>
                <a href="{{ route('login') }}" class="btn btn-secondary">
                    <span>🔑</span>
                    Sign In to Account
                </a>
            </div>
        </div>

        <!-- Right Side - Features -->
        <div class="right-side">
            <h3 class="features-title">
                <span>✨</span>
                What You'll Experience
            </h3>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">🧘‍♂️</div>
                    <div class="feature-content">
                        <div class="feature-name">Guided Meditation Sessions</div>
                        <div class="feature-desc">500+ sessions by certified instructors</div>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">😌</div>
                    <div class="feature-content">
                        <div class="feature-name">Stress & Anxiety Relief</div>
                        <div class="feature-desc">Proven techniques for mental wellness</div>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">💡</div>
                    <div class="feature-content">
                        <div class="feature-name">Improved Focus & Clarity</div>
                        <div class="feature-desc">Enhance cognitive performance</div>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">😴</div>
                    <div class="feature-content">
                        <div class="feature-name">Better Sleep Quality</div>
                        <div class="feature-desc">Sleep meditation and relaxation</div>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📊</div>
                    <div class="feature-content">
                        <div class="feature-name">Progress Tracking</div>
                        <div class="feature-desc">Monitor your mindfulness journey</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>