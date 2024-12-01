@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="space-y-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-2xl font-bold">Daftar Alumni</h1>
                <div class="w-full sm:w-auto flex flex-col sm:flex-row gap-4">
                    <select id="filter-batch" class="input sm:w-48">
                        <option value="">Tahun Kelulusan</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                    <div class="relative">
                        <input type="text" id="search-alumni" placeholder="Cari alumni..." class="input pl-10 sm:w-64" />
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto shadow-lg rounded-lg mt-6">
                <div id="loading" style="display: none;" class="flex justify-center items-center py-4">
                    <i class="fas fa-spinner fa-spin fa-3x text-gray-500"></i>
                </div>
                <table class="min-w-full table-auto text-sm text-center text-dark-600">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-3 border-b border-gray-300">No.</th>
                            <th class="px-6 py-3 border-b border-gray-300">Foto</th>
                            <th class="px-6 py-3 border-b border-gray-300">Nama</th>
                            <th class="px-6 py-3 border-b border-gray-300">Jenis Kelamin</th>
                            <th class="px-6 py-3 border-b border-gray-300">Alamat</th>
                            <th class="px-6 py-3 border-b border-gray-300">No. HP</th>
                            <th class="px-6 py-3 border-b border-gray-300">Email</th>
                            <th class="px-6 py-3 border-b border-gray-300">Pendidikan Lanjut</th>
                            <th class="px-6 py-3 border-b border-gray-300">Pekerjaan</th>
                            <th class="px-6 py-3 border-b border-gray-300">Tahun Lulus</th>
                        </tr>
                    </thead>
                    <tbody id="alumni-list-body" class="bg-white">
                        @include('front.alumni-list', ['alumnis' => $alumnis])
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
