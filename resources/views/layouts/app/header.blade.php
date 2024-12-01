<header class="bg-green-800 text-white sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <span class="font-bold text-xl hidden sm:block">SMP Swasta Rahmat Islamiyah</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Beranda</a>
                <a href="{{ route('alumni') }}" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Alumni</a>
                <a href="{{ route('events') }}" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Acara</a>
                <a href="{{ route('about') }}" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Tentang Kami</a>

                @if (Auth::check())
                    <a href="{{ route('profile') }}" class="hover:bg-green-500 hover:bg-opacity-30 text-white transition py-2 px-2 rounded-md">Profil</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
                            Keluar
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition">
                        Masuk
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
                <a href="{{ route('home') }}" class="hover:text-green-400 transition py-2">Beranda</a>
                <a href="{{ route('alumni') }}" class="hover:text-green-400 transition py-2">Alumni</a>
                <a href="{{ route('events') }}" class="hover:text-green-400 transition py-2">Acara</a>
                <a href="{{ route('about') }}" class="hover:text-green-400 transition py-2">Tentang Kami</a>

                @if (Auth::check())
                    <a href="{{ route('profile') }}" class="hover:text-green-400 transition py-2">Profil</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">
                            Keluar
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition text-center">
                        Masuk
                    </a>
                @endif
            </nav>
        </div>
    </div>
</header>
