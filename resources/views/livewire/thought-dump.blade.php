<div class="min-h-screen bg-green-50 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-green-800 mb-2">Thought Dump</h1>
            <p class="text-green-600">Release your thoughts and let them go</p>
        </div>

        <!-- Thought Form -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6 border border-green-100">
            <form wire:submit="saveThought">
                <div class="mb-4">
                    <label class="block text-green-700 mb-2">How are you feeling?</label>
                    <textarea 
                        wire:model="content"
                        class="w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2
                         focus:ring-green-500 focus:border-transparent"
                        rows="4"
                        placeholder="Write your thoughts here..."
                    ></textarea>
                    @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-green-700 mb-2">Current Mood</label>
                    <select wire:model="mood" class="w-full px-3 py-2 border border-green-300 rounded-lg focus:outline-none 
                    focus:ring-2
                     focus:ring-green-500">
                        <option value="happy">😊 Happy</option>
                        <option value="sad">😢 Sad</option>
                        <option value="neutral">😐 Neutral</option>
                        <option value="anxious">😰 Anxious</option>
                        <option value="peaceful">😌 Peaceful</option>
                        <option value="excited">🤩 Excited</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" wire:model="isAutoDelete" class="rounded border-green-300 text-green-600
                         focus:ring-green-500">
                        <span class="ml-2 text-green-700">Auto-delete after 24 hours</span>
                    </label>
                </div>

                <button 
                    type="submit"
                    class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2
                     focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                >
                    Release Thought
                </button>
            </form>
        </div>

        <!-- Recent Thoughts -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-green-100">
            <h2 class="text-xl font-semibold text-green-800 mb-4">Recent Thoughts</h2>
            <div class="space-y-4">
                @foreach($thoughts as $thought)
                <div class="p-4 bg-green-50 rounded-lg border border-green-200">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-lg">{{ $thought->mood_emoji }}</span>
                        <div class="flex space-x-2">
                            <button 
                                wire:click="deleteThought({{ $thought->id }})"
                                class="text-red-500 hover:text-red-700 text-sm"
                            >
                                Delete
                            </button>
                        </div>
                    </div>
                    <p class="text-green-700 mb-2">{{ $thought->content }}</p>
                    <div class="flex justify-between items-center text-sm text-green-600">
                        <span>{{ $thought->mood }}</span>
                        <span>{{ $thought->created_at->diffForHumans() }}</span>
                    </div>
                    @if($thought->is_auto_delete)
                    <div class="text-xs text-green-500 mt-1">
                        Auto-deletes {{ $thought->auto_delete_at->diffForHumans() }}
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>