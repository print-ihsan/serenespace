<nav class="bg-white border-b border-green-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
              <div class="flex items-center">
    <div class="w-10 h-10 mr-3 flex items-center justify-center bg-green-100 rounded-full">
        <span class="text-xl">🌿</span>
    </div>
    <span class="text-xl font-bold text-green-800">SereneSpace</span>
</div>
                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-green-700 hover:text-green-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-green-100' : '' }}">Dashboard</a>
                    <a href="{{ route('thoughts') }}" class="text-green-700 hover:text-green-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('thoughts') ? 'bg-green-100' : '' }}">Thoughts</a>
                    <a href="{{ route('mindfulness') }}" class="text-green-700 hover:text-green-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('mindfulness') ? 'bg-green-100' : '' }}">Mindfulness</a>
                    <a href="{{ route('art') }}" class="text-green-700 hover:text-green-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('art') ? 'bg-green-100' : '' }}">Art</a>
                    <a href="{{ route('soundscapes') }}" class="text-green-700 hover:text-green-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('soundscapes') ? 'bg-green-100' : '' }}">Soundscapes</a>
                </div>
            </div>

            <!-- User Menu -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <span class="text-green-700 mr-4">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-green-700 hover:text-green-900 px-3 py-2 rounded-md text-sm font-medium">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>