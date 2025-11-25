<div class="min-h-screen bg-green-50 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-green-800 mb-2">Art Generator</h1>
            <p class="text-green-600">Create beautiful generative art with your preferred style</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            <!-- Left Column - Art Controls -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100">
                <h2 class="text-xl font-semibold text-green-800 mb-4">Art Settings</h2>
                
                <div class="space-y-6">
                    <!-- Art Type -->
                    <div>
                        <label class="block text-green-700 mb-3 font-medium">Art Style</label>
                        <div class="grid grid-cols-2 gap-3">
                            <button wire:click="$set('artType', 'abstract')" 
                                    class="p-3 border rounded-lg text-center transition-all duration-200 
                                    {{ $artType === 'abstract' ? 'bg-green-100 border-green-400 text-green-800' : 
                                    'border-green-200 text-green-600 hover:bg-green-50' }}">
                                <div class="text-2xl mb-1">🎨</div>
                                <div class="text-sm font-medium">Abstract</div>
                            </button>
                            <button wire:click="$set('artType', 'geometric')" 
                                    class="p-3 border rounded-lg text-center transition-all duration-200 
                                    {{ $artType === 'geometric' ? 'bg-green-100 border-green-400 text-green-800' : 
                                    'border-green-200 text-green-600 hover:bg-green-50' }}">
                                <div class="text-2xl mb-1">🔷</div>
                                <div class="text-sm font-medium">Geometric</div>
                            </button>
                            <button wire:click="$set('artType', 'organic')" 
                                    class="p-3 border rounded-lg text-center transition-all duration-200 
                                    {{ $artType === 'organic' ? 'bg-green-100 border-green-400 text-green-800' : 
                                    'border-green-200 text-green-600 hover:bg-green-50' }}">
                                <div class="text-2xl mb-1">🌿</div>
                                <div class="text-sm font-medium">Organic</div>
                            </button>
                            <button wire:click="$set('artType', 'fluid')" 
                                    class="p-3 border rounded-lg text-center transition-all duration-200 
                                    {{ $artType === 'fluid' ? 'bg-green-100 border-green-400 text-green-800' : 
                                    'border-green-200 text-green-600 hover:bg-green-50' }}">
                                <div class="text-2xl mb-1">💧</div>
                                <div class="text-sm font-medium">Fluid</div>
                            </button>
                        </div>
                    </div>

                    <!-- Color Scheme -->
                    <div>
                        <label class="block text-green-700 mb-3 font-medium">Color Scheme</label>
                        <div class="grid grid-cols-3 gap-2">
                            @foreach(['pastel', 'vibrant', 'earth', 'ocean', 'forest'] as $scheme)
                            <button wire:click="$set('colorScheme', '{{ $scheme }}')" 
                                    class="p-2 border rounded-lg text-center transition-all duration-200 
                                    {{ $colorScheme === $scheme ? 'border-green-400 ring-2 ring-green-200' : 
                                    'border-green-200 hover:bg-green-50' }}">
                                <div class="flex justify-center space-x-1 mb-1">
                                    @foreach($colorSchemes[$scheme] as $color)
                                    <div class="w-3 h-3 rounded-full border border-gray-300" style="background-color: 
                                    {{ $color }}"></div>
                                    @endforeach
                                </div>
                                <div class="text-xs font-medium capitalize text-green-700">{{ $scheme }}</div>
                            </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Complexity -->
                    <div>
                        <label class="block text-green-700 mb-2 font-medium">
                            Complexity: <span class="text-green-600">{{ $complexity }}/10</span>
                        </label>
                        <input type="range" wire:model="complexity" min="1" max="10" 
                               class="w-full accent-green-600">
                        <div class="flex justify-between text-xs text-green-600">
                            <span>Simple</span>
                            <span>Detailed</span>
                        </div>
                    </div>

                    <!-- Mood -->
                    <div>
                        <label class="block text-green-700 mb-3 font-medium">Mood & Theme</label>
                        <select wire:model="mood" 
                                class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2
                                 focus:ring-green-500">
                            @foreach($moodThemes as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Generate Button -->
                    <button wire:click="generateArt" 
                            wire:loading.attr="disabled"
                            class="w-full bg-green-600 text-white py-4 px-6 rounded-lg hover:bg-green-700 
                            focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 
                            transition duration-200 font-medium text-lg disabled:opacity-50 disabled:cursor-not-allowed">
                        <span wire:loading.remove>🎨 Generate Art</span>
                        <span wire:loading>
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 
                                12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Generating...
                        </span>
                    </button>
                </div>
            </div>

            <!-- Center Column - Art Preview -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100 flex flex-col">
                <h2 class="text-xl font-semibold text-green-800 mb-4 text-center">Art Preview</h2>
                
                <div class="flex-1 flex items-center justify-center">
                    @if($isGenerating)
                        <!-- Loading Animation -->
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto mb-4 relative">
                                <div class="absolute inset-0 border-4 border-green-200 rounded-full animate-pulse"></div>
                                <div class="absolute inset-4 border-4 border-green-400 rounded-full animate-spin"></div>
                            </div>
                            <p class="text-green-600 font-medium">Creating your masterpiece...</p>
                        </div>
                    @elseif($generatedArt)
                        <!-- Generated Art -->
                        <div class="text-center">
                            <img src="{{ $generatedArt }}" alt="Generated Art" 
                                 class="w-full max-w-sm h-64 object-cover rounded-lg shadow-md mx-auto mb-4 border-4 border-white">
                            <div class="flex justify-center space-x-3">
                                <button onclick="window.open('{{ $generatedArt }}', '_blank')" 
                                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 text-sm">
                                    🔍 View Full Size
                                </button>
                                <button wire:click="downloadArt('{{ $generatedArt }}')" 
                                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 text-sm">
                                    💾 Download
                                </button>
                            </div>
                        </div>
                    @else
                        <!-- Placeholder -->
                        <div class="text-center text-green-400">
                            <div class="text-6xl mb-4">🎨</div>
                            <p class="text-green-500">Configure settings and generate your first artwork!</p>
                        </div>
                    @endif
                </div>

                <!-- Current Settings -->
                @if(!$isGenerating)
                <div class="mt-6 p-4 bg-green-50 rounded-lg border border-green-200">
                    <h3 class="font-medium text-green-800 mb-2">Current Settings</h3>
                    <div class="grid grid-cols-2 gap-2 text-sm text-green-600">
                        <div>Style: <span class="font-medium capitalize">{{ $artType }}</span></div>
                        <div>Colors: <span class="font-medium capitalize">{{ $colorScheme }}</span></div>
                        <div>Complexity: <span class="font-medium">{{ $complexity }}/10</span></div>
                        <div>Mood: <span class="font-medium">{{ $moodThemes[$mood] }}</span></div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Right Column - Quick Tips -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100">
                <h2 class="text-xl font-semibold text-green-800 mb-4">Art Tips</h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="text-green-500 mt-1">💡</div>
                        <div>
                            <h3 class="font-medium text-green-700">Experiment Freely</h3>
                            <p class="text-green-600 text-sm">Try different combinations to discover unique patterns</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="text-green-500 mt-1">🎯</div>
                        <div>
                            <h3 class="font-medium text-green-700">Mood Matters</h3>
                            <p class="text-green-600 text-sm">Your chosen mood influences the art's emotional tone</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="text-green-500 mt-1">🌈</div>
                        <div>
                            <h3 class="font-medium text-green-700">Color Harmony</h3>
                            <p class="text-green-600 text-sm">Each color scheme creates a different atmosphere</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="text-green-500 mt-1">⭐</div>
                        <div>
                            <h3 class="font-medium text-green-700">Save Favorites</h3>
                            <p class="text-green-600 text-sm">Click the star to save your favorite creations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Art Gallery -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-green-800">Your Art Gallery</h2>
                <span class="text-green-600">{{ $artSessions->count() }} creations</span>
            </div>
            
            @if($artSessions->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($artSessions as $art)
                    <div class="bg-green-50 rounded-lg border border-green-200 overflow-hidden group hover:shadow-md 
                    transition duration-200">
                        <div class="relative">
                            <img src="{{ $art->output_url }}" alt="Art piece" 
                                 class="w-full h-48 object-cover">
                            <button wire:click="toggleFavorite({{ $art->id }})" 
                                    class="absolute top-2 right-2 p-2 bg-white rounded-full shadow-md hover:bg-yellow-50 
                                    transition duration-200">
                                @if($art->is_favorite)
                                    ⭐
                                @else
                                    ☆
                                @endif
                            </button>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-green-700 font-medium capitalize">{{ $art->art_type }}</span>
                                <span class="text-green-600 text-sm">{{ $art->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="text-xs text-green-500">
                                Complexity: {{ $art->parameters['complexity'] ?? 'N/A' }}/10 • 
                                Mood: {{ $moodThemes[$art->parameters['mood'] ?? 'calm'] ?? 'Calm' }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="text-6xl mb-4 text-green-300">🎨</div>
                    <p class="text-green-600">No artworks yet. Create your first masterpiece!</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
            {{ session('message') }}
        </div>
    @endif
</div>