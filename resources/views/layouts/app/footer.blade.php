<footer class="bg-green-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">About Us</h3>
                <p class="text-white-600">Connecting alumni and building stronger communities through shared
                    experiences.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('alumni') }}" class="text-white-600 hover:text-gray-300 transition">Alumni</a>
                    </li>
                    <li><a href="{{ route('events') }}" class="text-white-600 hover:text-gray-300 transition">Events</a>
                    </li>
                    <li><a href="{{ route('about') }}" class="text-white-600 hover:text-gray-300 transition">About</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2">
                    <li class="text-white-400">Email: smprahmatislamiyah@gmail.com</li>
                    <li class="text-white-400">Phone: (061) 8468378</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="mailto:smprahmatislamiyah@gmail.com"
                        class="text-gray-400 hover:text-white transition text-3xl">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                    <a href="https://www.instagram.com/smprahmatislamiyah/"
                        class="text-gray-400 hover:text-white transition text-3xl">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@smprahmatislamiyah"
                        class="text-gray-400 hover:text-white transition text-2xl mt-0.5">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-white-400">
            <p>© <span>{{ Date('Y') }}</span> SMP Swasta Rahmat Islamiyah. Hak cipta dilindungi undang-undang.</p>
        </div>
    </div>
</footer>
