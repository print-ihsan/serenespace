<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindfulness Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .breathing-animation {
            transition: all 4s ease-in-out;
        }
        
        .breathing-in {
            transform: scale(1.1);
        }
        
        .breathing-out {
            transform: scale(0.9);
        }
        
        .timer-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .progress-ring {
            transition: stroke-dashoffset 0.1s linear;
        }
    </style>
</head>
<body class="min-h-screen bg-green-50 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8 fade-in">
            <h1 class="text-3xl font-bold text-green-800 mb-2">Mindfulness Tracker</h1>
            <p class="text-green-600">Lacak sesi meditasi dan mindfulness Anda</p>
        </div>

        <!-- Three Cards Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Card 1: Session Settings (Left) -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100 fade-in">
                <h2 class="text-xl font-semibold text-green-800 mb-4">Pengaturan Sesi</h2>
                
                <div class="space-y-4">
                    <!-- Session Type -->
                    <div>
                        <label class="block text-green-700 mb-2 font-medium">Jenis Sesi</label>
                        <select id="sessionType" class="w-full px-4 py-2 border border-green-300 rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                            <option value="breathing">🌬️ Latihan Pernapasan</option>
                            <option value="meditation" selected>🧘 Meditasi</option>
                            <option value="body_scan">🔍 Body Scan</option>
                            <option value="gratitude">🙏 Latihan Rasa Syukur</option>
                        </select>
                    </div>

                    <!-- Duration -->
                    <div>
                        <label class="block text-green-700 mb-2 font-medium">Durasi (menit)</label>
                        <input type="number" id="duration" min="1" max="120" value="5" 
                               class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2
                                focus:ring-green-500 text-sm">
                    </div>

                    <!-- Focus Score -->
                    <div>
                        <label class="block text-green-700 mb-2 font-medium">Tingkat Fokus (1-10)</label>
                        <input type="range" id="focusScore" min="1" max="10" value="5" 
                               class="w-full accent-green-600">
                        <div class="flex justify-between text-xs text-green-600 mt-1">
                            <span>Rendah</span>
                            <span class="font-medium"><span id="focusValue">5</span>/10</span>
                            <span>Tinggi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Timer (Center) -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100 flex flex-col justify-between fade-in">
                <div>
                    <h2 class="text-xl font-semibold text-green-800 mb-4 text-center">Timer Mindfulness</h2>
                    
                    <!-- Timer Display with Progress Ring -->
                    <div class="text-center mb-6 relative">
                        <div class="relative inline-block">
                            <svg class="w-48 h-48 transform -rotate-90" viewBox="0 0 100 100">
                                <!-- Background circle -->
                                <circle cx="50" cy="50" r="45" stroke="#e5e7eb" stroke-width="8" fill="none"/>
                                <!-- Progress circle -->
                                <circle id="progressCircle" cx="50" cy="50" r="45" stroke="#10b981" 
                                        stroke-width="8" fill="none" stroke-linecap="round"
                                        class="progress-ring"
                                        stroke-dasharray="283" stroke-dashoffset="0"/>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <div class="text-4xl font-bold text-green-700 mb-2" id="timer-display">
                                    05:00
                                </div>
                                <div class="text-green-600 text-sm" id="timer-status">
                                    Siap
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timer Controls -->
                <div class="flex justify-center space-x-3">
                    <button id="startBtn" 
                            class="bg-green-600 text-white px-4 py-3 rounded-lg hover:bg-green-700 
                            font-medium text-sm transition-colors flex items-center">
                        <i class="fas fa-play mr-2"></i> Mulai Sesi
                    </button>
                    <button id="pauseBtn" disabled
                            class="bg-yellow-500 text-white px-4 py-3 rounded-lg hover:bg-yellow-600 
                            font-medium text-sm transition-colors flex items-center">
                        <i class="fas fa-pause mr-2"></i> Jeda
                    </button>
                    <button id="resetBtn" 
                            class="bg-red-500 text-white px-4 py-3 rounded-lg hover:bg-red-600 
                            font-medium text-sm transition-colors flex items-center">
                        <i class="fas fa-redo mr-2"></i> Reset
                    </button>
                </div>
            </div>

            <!-- Card 3: Session Notes (Right) -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100 fade-in">
                <h2 class="text-xl font-semibold text-green-800 mb-4">Catatan Sesi</h2>
                <textarea id="notes" rows="8" placeholder="Bagaimana perasaan Anda selama sesi? Ada wawasan atau refleksi?"
                          class="w-full px-4 py-3 border border-green-300 rounded-lg focus:outline-none focus:ring-2
                           focus:ring-green-500 resize-none text-sm"></textarea>
            </div>
        </div>

        <!-- Breathing Guide (Visible during breathing sessions) -->
        <div id="breathingGuide" class="hidden bg-blue-50 rounded-xl shadow-sm p-6 border border-blue-200 mb-8">
            <h2 class="text-xl font-semibold text-blue-800 mb-4 text-center">Panduan Pernapasan</h2>
            <div class="text-center">
                <div class="text-5xl mb-4 breathing-animation" id="breathing-animation">🌬️</div>
                <p class="text-blue-700 font-medium text-xl" id="breathing-text">Tarik napas...</p>
                <p class="text-blue-600 text-sm mt-2">Ikuti ritme untuk pernapasan dalam</p>
            </div>
        </div>

        <!-- Session History -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100 fade-in">
            <h2 class="text-xl font-semibold text-green-800 mb-4">Riwayat Sesi</h2>
            
            <div id="sessionHistory">
                <div class="text-center py-8">
                    <div class="text-6xl mb-4">🧘</div>
                    <p class="text-green-600">Belum ada sesi yang tercatat. Mulai sesi mindfulness pertama Anda!</p>
                </div>
            </div>
        </div>

        <!-- Flash Message -->
        <div id="flashMessage" class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg hidden">
            Pesan flash akan muncul di sini
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Elements
        const timerDisplay = document.getElementById('timer-display');
        const timerStatus = document.getElementById('timer-status');
        const startBtn = document.getElementById('startBtn');
        const pauseBtn = document.getElementById('pauseBtn');
        const resetBtn = document.getElementById('resetBtn');
        const sessionType = document.getElementById('sessionType');
        const durationInput = document.getElementById('duration');
        const focusScore = document.getElementById('focusScore');
        const focusValue = document.getElementById('focusValue');
        const notes = document.getElementById('notes');
        const breathingGuide = document.getElementById('breathingGuide');
        const breathingAnimation = document.getElementById('breathing-animation');
        const breathingText = document.getElementById('breathing-text');
        const sessionHistory = document.getElementById('sessionHistory');
        const flashMessage = document.getElementById('flashMessage');
        const progressCircle = document.getElementById('progressCircle');
        
        // Timer variables
        let totalSeconds = 5 * 60; // 5 minutes in seconds
        let initialSeconds = totalSeconds;
        let timerInterval = null;
        let isRunning = false;
        let isPaused = false;
        let breathingInterval = null;
        let sessions = JSON.parse(localStorage.getItem('mindfulnessSessions')) || [];
        
        // Update focus value display
        focusScore.addEventListener('input', () => {
            focusValue.textContent = focusScore.value;
        });
        
        // Update timer display when duration changes
        durationInput.addEventListener('change', () => {
            if (!isRunning) {
                totalSeconds = parseInt(durationInput.value) * 60;
                initialSeconds = totalSeconds;
                updateTimerDisplay();
                updateProgressRing();
            }
        });
        
        // Format time as MM:SS
        function formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = seconds % 60;
            return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
        }
        
        // Update the timer display
        function updateTimerDisplay() {
            timerDisplay.textContent = formatTime(totalSeconds);
            
            // Change color when less than 1 minute remains
            if (totalSeconds <= 60) {
                timerDisplay.classList.remove('text-green-700');
                timerDisplay.classList.add('text-red-500', 'timer-pulse');
            } else {
                timerDisplay.classList.remove('text-red-500', 'timer-pulse');
                timerDisplay.classList.add('text-green-700');
            }
        }
        
        // Update progress ring
        function updateProgressRing() {
            if (initialSeconds === 0) return;
            
            const circumference = 2 * Math.PI * 45; // 2πr
            const progress = (initialSeconds - totalSeconds) / initialSeconds;
            const offset = circumference - (progress * circumference);
            
            progressCircle.style.strokeDashoffset = offset;
            
            // Change progress color based on remaining time
            if (totalSeconds <= 60) {
                progressCircle.style.stroke = '#ef4444'; // red-500
            } else if (totalSeconds <= 180) {
                progressCircle.style.stroke = '#f59e0b'; // yellow-500
            } else {
                progressCircle.style.stroke = '#10b981'; // green-500
            }
        }
        
        // Start the timer
        function startTimer() {
            if (isRunning) return;
            
            isRunning = true;
            isPaused = false;
            startBtn.disabled = true;
            pauseBtn.disabled = false;
            timerStatus.innerHTML = '<div class="flex items-center justify-center"><div class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></div>Sesi sedang berlangsung...</div>';
            
            // Disable inputs during session
            sessionType.disabled = true;
            durationInput.disabled = true;
            focusScore.disabled = true;
            
            // Show breathing guide if session type is breathing
            if (sessionType.value === 'breathing') {
                breathingGuide.classList.remove('hidden');
                startBreathingAnimation();
            }
            
            timerInterval = setInterval(() => {
                if (totalSeconds > 0) {
                    totalSeconds--;
                    updateTimerDisplay();
                    updateProgressRing();
                } else {
                    completeTimer();
                }
            }, 1000);
            
            showFlashMessage('Sesi dimulai! Fokus pada pernapasan Anda.');
        }
        
        // Pause the timer
        function pauseTimer() {
            if (!isRunning) return;
            
            clearInterval(timerInterval);
            if (breathingInterval) clearInterval(breathingInterval);
            isRunning = false;
            isPaused = true;
            startBtn.disabled = false;
            pauseBtn.disabled = true;
            startBtn.innerHTML = '<i class="fas fa-play mr-2"></i> Lanjutkan';
            timerStatus.textContent = "Timer dijeda";
            
            // Pause breathing animation
            breathingAnimation.classList.remove('breathing-in', 'breathing-out');
            
            showFlashMessage('Sesi dijeda.');
        }
        
        // Reset the timer
        function resetTimer() {
            clearInterval(timerInterval);
            if (breathingInterval) clearInterval(breathingInterval);
            isRunning = false;
            isPaused = false;
            startBtn.disabled = false;
            pauseBtn.disabled = true;
            startBtn.innerHTML = '<i class="fas fa-play mr-2"></i> Mulai Sesi';
            
            // Reset to the selected duration
            totalSeconds = parseInt(durationInput.value) * 60;
            initialSeconds = totalSeconds;
            
            updateTimerDisplay();
            updateProgressRing();
            timerStatus.textContent = "Siap";
            timerDisplay.classList.remove('text-red-500', 'timer-pulse');
            timerDisplay.classList.add('text-green-700');
            
            // Reset progress ring color
            progressCircle.style.stroke = '#10b981';
            
            // Hide breathing guide
            breathingGuide.classList.add('hidden');
            
            // Re-enable inputs
            sessionType.disabled = false;
            durationInput.disabled = false;
            focusScore.disabled = false;
            
            showFlashMessage('Timer direset.');
        }
        
        // Complete the timer
        function completeTimer() {
            clearInterval(timerInterval);
            if (breathingInterval) clearInterval(breathingInterval);
            isRunning = false;
            startBtn.disabled = false;
            pauseBtn.disabled = true;
            startBtn.innerHTML = '<i class="fas fa-play mr-2"></i> Mulai Sesi';
            timerStatus.textContent = "Sesi selesai! Luangkan waktu sejenak untuk memperhatikan perasaan Anda.";
            timerStatus.classList.add('text-green-600', 'font-medium');
            
            // Complete progress ring
            progressCircle.style.strokeDashoffset = 0;
            
            // Hide breathing guide
            breathingGuide.classList.add('hidden');
            
            // Re-enable inputs
            sessionType.disabled = false;
            durationInput.disabled = false;
            focusScore.disabled = false;
            
            // Save session to history
            saveSession();
            
            showFlashMessage('Sesi selesai! Bagus sekali!', 'green');
        }
        
        // Breathing animation
        function startBreathingAnimation() {
            let breathingCycle = 0;
            const breathingStages = ['Tarik napas...', 'Tahan...', 'Buang napas...', 'Tahan...'];
            const breathingEmojis = ['🌬️', '⏸️', '💨', '⏸️'];
            
            breathingInterval = setInterval(() => {
                breathingCycle = (breathingCycle + 1) % 4;
                breathingText.textContent = breathingStages[breathingCycle];
                breathingAnimation.textContent = breathingEmojis[breathingCycle];
                
                // Add animation classes
                if (breathingCycle === 0) {
                    breathingAnimation.classList.remove('breathing-out');
                    breathingAnimation.classList.add('breathing-in');
                } else if (breathingCycle === 2) {
                    breathingAnimation.classList.remove('breathing-in');
                    breathingAnimation.classList.add('breathing-out');
                }
            }, 4000); // 4-second breathing cycle
        }
        
        // Save session to history
        function saveSession() {
            const session = {
                id: Date.now(),
                sessionType: sessionType.value,
                duration: parseInt(durationInput.value),
                focusScore: parseInt(focusScore.value),
                notes: notes.value,
                date: new Date().toISOString()
            };
            
            sessions.unshift(session);
            localStorage.setItem('mindfulnessSessions', JSON.stringify(sessions));
            updateSessionHistory();
            
            // Clear notes for next session
            notes.value = '';
        }
        
        // Update session history display
        function updateSessionHistory() {
            if (sessions.length === 0) {
                sessionHistory.innerHTML = `
                    <div class="text-center py-8">
                        <div class="text-6xl mb-4">🧘</div>
                        <p class="text-green-600">Belum ada sesi yang tercatat. Mulai sesi mindfulness pertama Anda!</p>
                    </div>
                `;
                return;
            }
            
            let historyHTML = '<div class="grid grid-cols-1 md:grid-cols-2 gap-4">';
            
            sessions.forEach(session => {
                const sessionDate = new Date(session.date);
                const formattedDate = sessionDate.toLocaleDateString('id-ID', {
                    day: 'numeric',
                    month: 'short',
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
                
                let sessionIcon = '🧘';
                let sessionTypeText = 'Meditasi';
                
                switch(session.sessionType) {
                    case 'breathing':
                        sessionIcon = '🌬️';
                        sessionTypeText = 'Latihan Pernapasan';
                        break;
                    case 'body_scan':
                        sessionIcon = '🔍';
                        sessionTypeText = 'Body Scan';
                        break;
                    case 'gratitude':
                        sessionIcon = '🙏';
                        sessionTypeText = 'Latihan Rasa Syukur';
                        break;
                }
                
                historyHTML += `
                    <div class="p-4 bg-green-50 rounded-lg border border-green-200 fade-in">
                        <div class="flex justify-between items-start mb-2">
                            <div class="flex items-center space-x-3">
                                <span class="text-lg">${sessionIcon}</span>
                                <span class="font-medium text-green-800">${sessionTypeText}</span>
                            </div>
                            <span class="text-green-600 font-medium">${session.duration} menit</span>
                        </div>
                        
                        <div class="flex justify-between items-center text-sm text-green-600 mb-2">
                            <div class="flex items-center space-x-4">
                                <span>Fokus: ${session.focusScore}/10</span>
                                ${session.notes ? '<span class="text-green-500">📝</span>' : ''}
                            </div>
                            <span>${formattedDate}</span>
                        </div>
                        
                        ${session.notes ? `
                        <div class="mt-2 p-2 bg-white rounded border border-green-200">
                            <p class="text-green-700 text-sm">${session.notes}</p>
                        </div>
                        ` : ''}
                    </div>
                `;
            });
            
            historyHTML += '</div>';
            sessionHistory.innerHTML = historyHTML;
        }
        
        // Show flash message
        function showFlashMessage(message, type = 'green') {
            flashMessage.textContent = message;
            flashMessage.className = `fixed bottom-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white fade-in`;
            
            if (type === 'green') {
                flashMessage.classList.add('bg-green-500');
            } else {
                flashMessage.classList.add('bg-blue-500');
            }
            
            flashMessage.classList.remove('hidden');
            
            setTimeout(() => {
                flashMessage.classList.add('hidden');
            }, 3000);
        }
        
        // Event listeners
        startBtn.addEventListener('click', startTimer);
        pauseBtn.addEventListener('click', pauseTimer);
        resetBtn.addEventListener('click', resetTimer);
        
        // Initialize
        updateTimerDisplay();
        updateProgressRing();
        updateSessionHistory();

        // Debug info
        console.log('Timer initialized successfully');
        console.log('Total seconds:', totalSeconds);
        console.log('Initial seconds:', initialSeconds);
    </script>
</body>
</html>