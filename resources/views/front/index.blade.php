@extends('layouts.app')

@section('content')
    <main>
        <section class="relative bg-gradient-to-r from-green-600 to-green-800 text-white py-20">
            <div class="container mx-auto ">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-12 mt-[-50px]">Selamat Datang <br> Alumni SMP Rahmat
                        Islamiyah</h1>
                    <p class="text-xl mb-8 mt-[-20px]">Tetap terhubung dengan sesama lulusan. Bangun hubungan yang langgeng
                        dan kembangkan jaringan profesional Anda.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('events') }}"
                            class="bg-white text-green-600 border-2 border-green-600 hover:bg-transparent hover:border-white hover:text-white px-8 py-3 rounded-lg font-semibold transition">
                            Acara
                        </a>

                        <a href="{{ route('about') }}"
                            class="border-2 border-white text-white hover:bg-white hover:text-green-600 px-8 py-3 rounded-lg font-semibold transition">
                            Tentang Kami
                        </a>

                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50"></div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Mengapa Anda Perlu Bergabung?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <a href="{{ route('alumni') }}" class="feature-card group">
                        <div
                            class="bg-green-100 text-green-600 rounded-full w-12 h-12 flex items-center justify-center mb-4 card-icon">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-green-600">Jaringan Alumni</h3>
                        <p class="text-gray-600">Terhubung dengan para alumni dari berbagai angkatan dan industri. Bangun
                            hubungan yang langgeng dan perluas jaringan profesional Anda.</p>
                    </a>

                    <a href="{{ route('events') }}" class="feature-card group">
                        <div
                            class="bg-green-100 text-green-600 rounded-full w-12 h-12 flex items-center justify-center mb-4 card-icon">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-green-600">Acara</h3>
                        <p class="text-gray-600">Bergabunglah dengan acara, lokakarya, dan pertemuan alumni eksklusif. Tetap
                            terhubung dengan sesama Anda melalui berbagai kegiatan.</p>
                    </a>

                    <a href="{{ route('about') }}" class="feature-card group">
                        <div
                            class="bg-green-100 text-green-600 rounded-full w-12 h-12 flex items-center justify-center mb-4 card-icon">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-green-600">Tentang Kami</h3>
                        <p class="text-gray-600">Pelajari tentang misi, visi, dan dampak yang telah kami buat dalam
                            membangun komunitas alumni yang kuat.</p>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
