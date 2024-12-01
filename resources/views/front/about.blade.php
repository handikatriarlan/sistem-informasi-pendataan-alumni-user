@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="grid md:grid-cols-2 gap-8 items-start">
                <!-- Left Column - Main Image and Description -->
                <div class="space-y-6">
                    <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden">
                        <img src="{{ asset('images/about-1.jpg') }}" alt="University Campus"
                            class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h2 class="text-xl font-bold mb-2">Sejarah</h2>
                        <p class="text-gray-600 text-justify">Dibentuk pada tahun 2024 sebagai inisiatif untuk memperkuat
                            hubungan antara alumni dan almamater. Dengan tujuan untuk menciptakan sebuah wadah yang
                            memfasilitasi para alumni dalam berbagi pengalaman, membangun jejaring profesional, serta
                            memberikan kontribusi bagi pengembangan institusi dan masyarakat.</p>
                    </div>
                    <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden">
                        <img src="{{ asset('images/about-2.jpg') }}" alt="Alumni Event" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Column - Content and Stats -->
                <div class="space-y-8">
                    <div>
                        <h1 class="text-3xl font-bold mb-4">Tentang Kami</h1>
                        <p class="text-gray-600 mb-4 text-justify">Kami berkomitmen untuk menjaga dan memperkuat hubungan antara alumni
                            dan almamater mereka. Platform kami berfungsi sebagai jembatan yang menghubungkan generasi
                            alumni yang lalu, sekarang, dan yang akan datang.</p>
                        <p class="text-gray-600 text-justify">Melalui berbagai program, acara, dan inisiatif, kami berusaha menciptakan
                            kesempatan yang bermakna untuk pengembangan profesional, jejaring, serta kontribusi kembali
                            kepada masyarakat.</p>
                    </div>

                    <!-- Key Statistics Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-100 p-4 rounded-lg flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div>
                                <div class="text-2xl font-bold">350+</div>
                                <div class="text-sm text-gray-600">Alumni Aktif</div>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <div class="text-2xl font-bold">100+</div>
                                <div class="text-sm text-gray-600">Sudah Bekerja</div>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <div class="text-2xl font-bold">50+</div>
                                <div class="text-sm text-gray-600">Acara Terselenggara</div>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg flex items-center space-x-3">
                            <svg class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            <div>
                                <div class="text-2xl font-bold">10+</div>
                                <div class="text-sm text-gray-600">Berbagai Daerah</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
