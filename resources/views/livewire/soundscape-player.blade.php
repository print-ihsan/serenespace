<div class="soundscape-app">
    <!-- Hidden Audio Elements -->
    <audio id="mountainStreamAudio" preload="metadata">
        <source src="{{ asset('audio/mountain-stream.mp3') }}" type="audio/mp3">
    </audio>
    <audio id="oceanWavesAudio" preload="metadata">
        <source src="{{ asset('audio/ocean-wave.mp3') }}" type="audio/mp3">
    </audio>
    <audio id="deepForestAudio" preload="metadata">
        <source src="{{ asset('audio/deep-forest.mp3') }}" type="audio/mp3">
    </audio>
    <audio id="gentleRainAudio" preload="metadata">
        <source src="{{ asset('audio/gentle-rain.wav') }}" type="audio/wav">
    </audio>
    <audio id="desertWindAudio" preload="metadata">
        <source src="{{ asset('audio/desert-wind.mp3') }}" type="audio/mp3">
    </audio>
    <audio id="morningBirdsAudio" preload="metadata">
        <source src="{{ asset('audio/morning-birds.wav') }}" type="audio/wav">
    </audio>
    <audio id="thunderstormAudio" preload="metadata">
        <source src="{{ asset('audio/thunder-storm.wav') }}" type="audio/wav">
    </audio>
    <audio id="cozyFireplaceAudio" preload="metadata">
        <source src="{{ asset('audio/fireplace.mp3') }}" type="audio/mp3">
    </audio>

    <!-- Main Content -->
    <div class="main-content">
        <div class="page-header">
            <h1 class="page-title">Soundscapes</h1>
            <p class="page-subtitle">Immerse yourself in nature's masterpiece - each soundscape tells a story</p>
        </div>
        
        <!-- Timer Section Only -->
        <div class="features-container">
            <div class="feature-section">
                <h2 class="feature-title">Sleep Timer</h2>
                <p class="feature-description">Set a timer to automatically stop playback</p>
                <div class="timer-controls">
                    <button class="timer-btn active" data-minutes="0">
                        <span>Off</span>
                    </button>
                    <button class="timer-btn" data-minutes="15">
                        <span>15 min</span>
                    </button>
                    <button class="timer-btn" data-minutes="30">
                        <span>30 min</span>
                    </button>
                    <button class="timer-btn" data-minutes="60">
                        <span>60 min</span>
                    </button>
                    <button class="timer-btn" data-minutes="90">
                        <span>90 min</span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Soundscapes Grid -->
        <div class="soundscapes-grid">
            <!-- Soundscape 1 - Mountain Stream -->
            <div class="soundscape-card" data-sound="mountainStream">
                <div class="soundscape-image" style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Mountain Stream</h3>
                    <p class="soundscape-desc">Gentle flowing water with birds in the distance</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 45 min</span>
                        <span><i class="far fa-heart"></i> 1.3k</span>
                    </div>
                </div>
            </div>
            
            <!-- Soundscape 2 - Ocean Waves -->
            <div class="soundscape-card" data-sound="oceanWaves">
                <div class="soundscape-image" style="background-image: url('https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Ocean Waves</h3>
                    <p class="soundscape-desc">Calming waves crashing on the shore</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 60 min</span>
                        <span><i class="far fa-heart"></i> 2.4k</span>
                    </div>
                </div>
            </div>
            
            <!-- Soundscape 3 - Deep Forest -->
            <div class="soundscape-card" data-sound="deepForest">
                <div class="soundscape-image" style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Deep Forest</h3>
                    <p class="soundscape-desc">Birds chirping and leaves rustling</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 30 min</span>
                        <span><i class="far fa-heart"></i> 1.8k</span>
                    </div>
                </div>
            </div>
            
            <!-- Soundscape 4 - Gentle Rain -->
            <div class="soundscape-card" data-sound="gentleRain">
                <div class="soundscape-image" style="background-image: url('https://images.unsplash.com/photo-1515694346937-94d85e41e6f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Gentle Rain</h3>
                    <p class="soundscape-desc">Soft rainfall on a rooftop</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 45 min</span>
                        <span><i class="far fa-heart"></i> 3.1k</span>
                    </div>
                </div>
            </div>
            
            <!-- Soundscape 5 - Desert Wind -->
            <div class="soundscape-card" data-sound="desertWind">
                <div class="soundscape-image" style="background-image: url('https://i.pinimg.com/736x/8a/c5/e2/8ac5e2f600e6dda3fa7697e420f88a60.jpg');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Desert Wind</h3>
                    <p class="soundscape-desc">Gentle winds across sand dunes</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 50 min</span>
                        <span><i class="far fa-heart"></i> 992</span>
                    </div>
                </div>
            </div>
            
            <!-- Soundscape 6 - Morning Birds -->
            <div class="soundscape-card" data-sound="morningBirds">
                <div class="soundscape-image" style="background-image: url('https://i.pinimg.com/736x/b6/e8/5b/b6e85bffe456d29d95a8817bc94a8241.jpg');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Morning Birds</h3>
                    <p class="soundscape-desc">Dawn chorus in a peaceful garden</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 30 min</span>
                        <span><i class="far fa-heart"></i> 1.5k</span>
                    </div>
                </div>
            </div>

            <!-- Soundscape 7 - Thunderstorm -->
            <div class="soundscape-card" data-sound="thunderstorm">
                <div class="soundscape-image" style="background-image: url('https://i.pinimg.com/736x/9e/61/d4/9e61d48c11c51ffc765fede526dbb62e.jpg');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Thunderstorm</h3>
                    <p class="soundscape-desc">Powerful storm with rain and thunder</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 45 min</span>
                        <span><i class="far fa-heart"></i> 2.1k</span>
                    </div>
                </div>
            </div>

            <!-- Soundscape 8 - Cozy Fireplace -->
            <div class="soundscape-card" data-sound="cozyFireplace">
                <div class="soundscape-image" style="background-image: url('https://i.pinimg.com/736x/f7/7a/7f/f77a7fd092284a2d49c0e4c4f6fd2bfb.jpg');">
                    <div class="soundscape-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="soundscape-info">
                    <h3 class="soundscape-title">Cozy Fireplace</h3>
                    <p class="soundscape-desc">Crackling fireplace on a winter night</p>
                    <div class="soundscape-meta">
                        <span><i class="far fa-clock"></i> 60 min</span>
                        <span><i class="far fa-heart"></i> 2.3k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Player Controls -->
    <div class="player-container" id="player">
        <div class="player-info">
            <div class="player-image" id="playerImage" style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');"></div>
            <div class="player-details">
                <div class="player-title" id="playerTitle">Select a soundscape</div>
                <div class="player-category">Nature Soundscape</div>
            </div>
        </div>
        <div class="player-controls">
            <button class="control-button" id="prevButton">
                <i class="fas fa-step-backward"></i>
            </button>
            <button class="control-button play-pause" id="playPause">
                <i class="fas fa-play" id="playIcon"></i>
            </button>
            <button class="control-button" id="nextButton">
                <i class="fas fa-step-forward"></i>
            </button>
            <div class="progress-container">
                <div class="progress-bar" id="progressBar">
                    <div class="progress" id="progress"></div>
                </div>
                <div class="time-display">
                    <span id="currentTime">0:00</span>
                    <span id="duration">0:00</span>
                </div>
            </div>
            <div class="volume-control">
                <i class="fas fa-volume-up"></i>
                <input type="range" class="volume-slider" id="volumeSlider" min="0" max="100" value="80">
            </div>
        </div>
    </div>

    <style>
        :root {
            --primary: #5D8A6F;
            --primary-light: #7BA98B;
            --primary-dark: #456A54;
            --secondary: #E8E6E1;
            --accent: #A5B8A6;
            --text: #2C3E2F;
            --text-light: #5A6B5C;
            --white: #FFFFFF;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            --radius: 12px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #F9F9F7;
            color: var(--text);
            line-height: 1.6;
        }
        
        .soundscape-app {
            min-height: 100vh;
            position: relative;
            padding-bottom: 120px;
        }
        
        /* Main Content Styles */
        .main-content {
            padding: 24px;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .page-header {
            margin-bottom: 24px;
            text-align: center;
        }
        
        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }
        
        .page-subtitle {
            color: var(--text-light);
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.5;
        }
        
        /* Features Container */
        .features-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 32px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .feature-section {
            background-color: var(--white);
            border-radius: var(--radius);
            padding: 20px;
            box-shadow: var(--shadow);
        }
        
        .feature-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--primary-dark);
        }
        
        .feature-description {
            color: var(--text-light);
            margin-bottom: 12px;
            font-size: 13px;
            line-height: 1.4;
        }
        
        /* Timer Controls */
        .timer-controls {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }
        
        .timer-btn {
            padding: 8px 14px;
            background-color: var(--secondary);
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 13px;
            color: var(--text);
            flex: 1;
            min-width: 0;
            text-align: center;
        }
        
        .timer-btn.active {
            background-color: var(--primary);
            color: var(--white);
        }
        
        .timer-btn:hover {
            background-color: var(--primary-light);
            color: var(--white);
        }
        
        /* Soundscape Grid */
        .soundscapes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 20px;
        }
        
        .soundscape-card {
            background-color: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .soundscape-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
        }
        
        .soundscape-card.playing {
            box-shadow: 0 0 0 2px var(--primary);
        }
        
        .soundscape-image {
            height: 140px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .soundscape-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.4));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .soundscape-card:hover .soundscape-overlay {
            opacity: 1;
        }
        
        .play-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        
        .soundscape-info {
            padding: 16px;
        }
        
        .soundscape-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 6px;
        }
        
        .soundscape-desc {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 12px;
            line-height: 1.4;
        }
        
        .soundscape-meta {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: var(--text-light);
        }
        
        /* Player Controls */
        .player-container {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: var(--white);
            box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.08);
            padding: 12px 24px;
            display: none;
            z-index: 1000;
        }
        
        .player-container.active {
            display: block;
            animation: slideUp 0.3s ease;
        }
        
        @keyframes slideUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .player-info {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        
        .player-image {
            width: 50px;
            height: 50px;
            border-radius: 6px;
            background-size: cover;
            background-position: center;
            margin-right: 12px;
        }
        
        .player-details {
            flex: 1;
        }
        
        .player-title {
            font-weight: 600;
            margin-bottom: 2px;
            font-size: 14px;
        }
        
        .player-category {
            font-size: 12px;
            color: var(--text-light);
        }
        
        .player-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        
        .control-button {
            background: none;
            border: none;
            font-size: 16px;
            color: var(--primary);
            cursor: pointer;
            padding: 6px;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }
        
        .control-button:hover {
            background-color: var(--secondary);
        }
        
        .play-pause {
            width: 40px;
            height: 40px;
            background-color: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .progress-container {
            flex: 1;
            margin: 0 16px;
        }
        
        .progress-bar {
            height: 4px;
            background-color: var(--secondary);
            border-radius: 2px;
            position: relative;
            cursor: pointer;
        }
        
        .progress {
            height: 100%;
            background-color: var(--primary);
            border-radius: 2px;
            width: 0%;
            transition: width 0.1s linear;
        }
        
        .time-display {
            display: flex;
            justify-content: space-between;
            margin-top: 6px;
            font-size: 11px;
            color: var(--text-light);
        }
        
        .volume-control {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .volume-slider {
            width: 80px;
            height: 4px;
        }
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .soundscapes-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .main-content {
                padding: 16px;
            }
            
            .page-header {
                margin-bottom: 20px;
            }
            
            .feature-section {
                padding: 16px;
            }
            
            .timer-controls {
                gap: 4px;
            }
            
            .timer-btn {
                padding: 6px 10px;
                font-size: 12px;
            }
            
            .soundscapes-grid {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 16px;
            }
            
            .player-container {
                padding: 10px 16px;
            }
            
            .player-controls {
                gap: 12px;
            }
        }
        
        @media (max-width: 480px) {
            .soundscapes-grid {
                grid-template-columns: 1fr;
            }
            
            .player-container {
                padding: 10px 12px;
            }
            
            .player-controls {
                gap: 8px;
            }
            
            .progress-container {
                margin: 0 8px;
            }
        }
    </style>

    <script>
        // Audio Manager Class
        class AudioManager {
            constructor() {
                this.audioElements = {
                    mountainStream: document.getElementById('mountainStreamAudio'),
                    oceanWaves: document.getElementById('oceanWavesAudio'),
                    deepForest: document.getElementById('deepForestAudio'),
                    gentleRain: document.getElementById('gentleRainAudio'),
                    desertWind: document.getElementById('desertWindAudio'),
                    morningBirds: document.getElementById('morningBirdsAudio'),
                    thunderstorm: document.getElementById('thunderstormAudio'),
                    cozyFireplace: document.getElementById('cozyFireplaceAudio')
                };
                
                this.currentSound = null;
                this.isPlaying = false;
                this.volume = 0.8;
                this.sleepTimer = null;
                this.currentTimeUpdateInterval = null;
                
                this.initializeEventListeners();
                this.setVolume(this.volume);
            }
            
            initializeEventListeners() {
                // Set all audio to loop
                Object.values(this.audioElements).forEach(audio => {
                    audio.loop = true;
                });
            }
            
            playSound(soundId) {
                // Stop currently playing sound
                this.stopCurrentSound();
                
                // Set new current sound
                this.currentSound = soundId;
                
                // Play the new sound
                const audio = this.audioElements[soundId];
                if (audio) {
                    audio.volume = this.volume;
                    audio.play().then(() => {
                        this.isPlaying = true;
                        this.updatePlayerUI();
                        this.startProgressTracking();
                    }).catch(error => {
                        console.error('Error playing audio:', error);
                    });
                }
            }
            
            stopCurrentSound() {
                if (this.currentSound && this.audioElements[this.currentSound]) {
                    this.audioElements[this.currentSound].pause();
                    this.audioElements[this.currentSound].currentTime = 0;
                }
                this.isPlaying = false;
                this.stopProgressTracking();
            }
            
            togglePlayPause() {
                if (!this.currentSound) return;
                
                const audio = this.audioElements[this.currentSound];
                if (this.isPlaying) {
                    audio.pause();
                    this.isPlaying = false;
                } else {
                    audio.play().then(() => {
                        this.isPlaying = true;
                        this.startProgressTracking();
                    });
                }
                this.updatePlayerUI();
            }
            
            playNext() {
                const soundIds = Object.keys(this.audioElements);
                const currentIndex = soundIds.indexOf(this.currentSound);
                const nextIndex = (currentIndex + 1) % soundIds.length;
                this.playSound(soundIds[nextIndex]);
            }
            
            playPrevious() {
                const soundIds = Object.keys(this.audioElements);
                const currentIndex = soundIds.indexOf(this.currentSound);
                const prevIndex = (currentIndex - 1 + soundIds.length) % soundIds.length;
                this.playSound(soundIds[prevIndex]);
            }
            
            setVolume(volume) {
                this.volume = volume / 100;
                Object.values(this.audioElements).forEach(audio => {
                    audio.volume = this.volume;
                });
            }
            
            setSleepTimer(minutes) {
                // Clear existing timer
                if (this.sleepTimer) {
                    clearTimeout(this.sleepTimer);
                    this.sleepTimer = null;
                }
                
                if (minutes > 0) {
                    this.sleepTimer = setTimeout(() => {
                        this.stopCurrentSound();
                        this.updatePlayerUI();
                    }, minutes * 60 * 1000);
                }
            }
            
            startProgressTracking() {
                this.stopProgressTracking();
                this.currentTimeUpdateInterval = setInterval(() => {
                    this.updateProgress();
                }, 1000);
            }
            
            stopProgressTracking() {
                if (this.currentTimeUpdateInterval) {
                    clearInterval(this.currentTimeUpdateInterval);
                    this.currentTimeUpdateInterval = null;
                }
            }
            
            updateProgress() {
                if (!this.currentSound || !this.isPlaying) return;
                
                const audio = this.audioElements[this.currentSound];
                const currentTime = audio.currentTime;
                const duration = audio.duration || 0;
                
                // Update progress bar
                const progressPercent = duration > 0 ? (currentTime / duration) * 100 : 0;
                document.getElementById('progress').style.width = `${progressPercent}%`;
                
                // Update time display
                document.getElementById('currentTime').textContent = this.formatTime(currentTime);
                document.getElementById('duration').textContent = this.formatTime(duration);
            }
            
            formatTime(seconds) {
                if (!seconds || isNaN(seconds)) return '0:00';
                
                const mins = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${mins}:${secs.toString().padStart(2, '0')}`;
            }
            
            updatePlayerUI() {
                const player = document.getElementById('player');
                const playIcon = document.getElementById('playIcon');
                const playButtons = document.querySelectorAll('.play-button i');
                
                // Update play/pause button
                if (this.isPlaying) {
                    playIcon.classList.remove('fa-play');
                    playIcon.classList.add('fa-pause');
                    player.classList.add('active');
                } else {
                    playIcon.classList.remove('fa-pause');
                    playIcon.classList.add('fa-play');
                    if (!this.currentSound) {
                        player.classList.remove('active');
                    }
                }
                
                // Update card play buttons
                playButtons.forEach(button => {
                    const card = button.closest('.soundscape-card');
                    if (card && card.dataset.sound === this.currentSound && this.isPlaying) {
                        button.classList.remove('fa-play');
                        button.classList.add('fa-pause');
                        card.classList.add('playing');
                    } else {
                        button.classList.remove('fa-pause');
                        button.classList.add('fa-play');
                        card.classList.remove('playing');
                    }
                });
                
                // Update player title if current sound exists
                if (this.currentSound) {
                    const card = document.querySelector(`[data-sound="${this.currentSound}"]`);
                    if (card) {
                        const title = card.querySelector('.soundscape-title').textContent;
                        const image = card.querySelector('.soundscape-image').style.backgroundImage;
                        
                        document.getElementById('playerTitle').textContent = title;
                        document.getElementById('playerImage').style.backgroundImage = image;
                    }
                }
            }
        }
        
        // Initialize Audio Manager
        const audioManager = new AudioManager();
        
        // Event Listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Soundscape card clicks
            const soundscapeCards = document.querySelectorAll('.soundscape-card');
            soundscapeCards.forEach(card => {
                card.addEventListener('click', function() {
                    const soundId = this.dataset.sound;
                    audioManager.playSound(soundId);
                });
            });
            
            // Play button clicks (to prevent event bubbling)
            const playButtons = document.querySelectorAll('.play-button');
            playButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const card = this.closest('.soundscape-card');
                    const soundId = card.dataset.sound;
                    audioManager.playSound(soundId);
                });
            });
            
            // Player controls
            document.getElementById('playPause').addEventListener('click', function() {
                audioManager.togglePlayPause();
            });
            
            document.getElementById('nextButton').addEventListener('click', function() {
                audioManager.playNext();
            });
            
            document.getElementById('prevButton').addEventListener('click', function() {
                audioManager.playPrevious();
            });
            
            // Volume control
            const volumeSlider = document.getElementById('volumeSlider');
            volumeSlider.addEventListener('input', function() {
                audioManager.setVolume(this.value);
            });
            
            // Progress bar seeking
            const progressBar = document.getElementById('progressBar');
            progressBar.addEventListener('click', function(e) {
                if (!audioManager.currentSound) return;
                
                const audio = audioManager.audioElements[audioManager.currentSound];
                const rect = this.getBoundingClientRect();
                const percent = (e.clientX - rect.left) / rect.width;
                audio.currentTime = percent * audio.duration;
                audioManager.updateProgress();
            });
            
            // Timer functionality
            const timerBtns = document.querySelectorAll('.timer-btn');
            
            timerBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    timerBtns.forEach(b => b.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Set timer
                    const minutes = parseInt(this.dataset.minutes);
                    audioManager.setSleepTimer(minutes);
                });
            });
        });
    </script>
</div>