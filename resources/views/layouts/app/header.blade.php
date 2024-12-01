<header class="bg-green-800 text-white sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <a href="/" class="flex items-center space-x-2">
                <span class="font-bold text-xl hidden sm:block">SMP Yayasan Perguruan Rahmat Islamiyah</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="/" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Home</a>
                <a href="/alumni" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Alumni</a>
                <a href="/events" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Events</a>
                <a href="/about" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">About</a>

                @if (Auth::check())
                    <a href="/profile" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
                            Log out
                        </button>
                    </form>
                @else
                    <a href="/login" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition">
                        Log in
                    </a>
                @endif
            </nav>

            <!-- Mobile Menu Button -->
            <button id="menu-button" class="md:hidden p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden pb-4">
            <nav class="flex flex-col space-y-3">
                <a href="/" class="hover:text-green-400 transition py-2">Home</a>
                <a href="/alumni" class="hover:text-green-400 transition py-2">Alumni</a>
                <a href="/events" class="hover:text-green-400 transition py-2">Events</a>
                <a href="/about" class="hover:text-green-400 transition py-2">About</a>

                @if (Auth::check())
                    <a href="/profile" class="hover:text-green-400 transition py-2">Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">
                            Log out
                        </button>
                    </form>
                @else
                    <a href="/login" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition text-center">
                        Log in
                    </a>
                @endif
            </nav>
        </div>
    </div>
</header>
