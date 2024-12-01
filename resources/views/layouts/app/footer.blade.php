<footer class="bg-green-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3>
                <p class="text-white-600">Menghubungkan para alumni dan membangun komunitas yang lebih kuat melalui
                    pengalaman bersama.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('alumni') }}" class="text-white-600 hover:text-gray-300 transition">Alumni</a>
                    </li>
                    <li><a href="{{ route('events') }}" class="text-white-600 hover:text-gray-300 transition">Acara</a>
                    </li>
                    <li><a href="{{ route('about') }}" class="text-white-600 hover:text-gray-300 transition">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                <ul class="space-y-2">
                    <li class="text-white-400">Email: smprahmatislamiyah@gmail.com</li>
                    <li class="text-white-400">Telepon: (061) 8468378</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Ikuti Kami</h3>
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
        <div class="border-t border-gray-700 mt-8 pt-11 text-center text-white-400">
            <p>© <span>{{ Date('Y') }}</span> SMP Swasta Rahmat Islamiyah. Hak cipta dilindungi undang-undang.</p>
        </div>
    </div>
</footer>
