@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <form method="POST" action="{{ route('profile.update') }}" id="profile-form" class="p-6 space-y-6">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-center p-6">
                        <div class="relative">
                            <div class="w-40 h-40 rounded-full overflow-hidden">
                                <img id="profile-image"
                                    src="{{ asset('storage_admin/' . (Auth::user()->foto ?? 'default-profile.png')) }}"
                                    alt="Foto Profil" class="w-full h-full object-cover">
                            </div>
                            <label for="image-upload"
                                class="absolute bottom-0 right-0 bg-gray-200 text-gray-700 rounded-full p-2 cursor-pointer shadow-md hover:bg-gray-300 transition">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <input type="file" id="image-upload" name="foto" class="hidden" accept="image/*">
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @php
                            $user = Auth::user();
                        @endphp

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="name" name="name"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Nama Lengkap" value="{{ old('name', $user->name) }}">
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                            <input type="email" id="email" name="email"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Alamat Email" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                            <input type="password" id="password" name="password"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="">
                            @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
                                Lahir</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}">
                            @error('tanggal_lahir')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tempat
                                Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Tempat Lahir" value="{{ old('tempat_lahir', $user->tempat_lahir) }}">
                            @error('tempat_lahir')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-1">Jenis
                                Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300">
                                <option value="L"
                                    {{ old('jenis_kelamin', $user->jenis_kelamin) === 'L' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="P"
                                    {{ old('jenis_kelamin', $user->jenis_kelamin) === 'P' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nis" class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                            <input type="text" id="nis" name="nis"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="NIS" value="{{ old('nis', $user->nis) }}">
                            @error('nis')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tahun_lulus" class="block text-sm font-medium text-gray-700 mb-1">Tahun
                                Lulus</label>
                            <input type="number" id="tahun_lulus" name="tahun_lulus"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Tahun Lulus" value="{{ old('tahun_lulus', $user->tahun_lulus) }}">
                            @error('tahun_lulus')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-3">
                            <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                            <textarea id="alamat" name="alamat" rows="4"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Alamat lengkap">{{ old('alamat', $user->alamat) }}</textarea>
                            @error('alamat')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="no_phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor
                                Telepon</label>
                            <input type="text" id="no_phone" name="no_phone"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Nomor Telepon" value="{{ old('no_phone', $user->no_phone) }}">
                            @error('no_phone')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pendidikan_lanjut" class="block text-sm font-medium text-gray-700 mb-1">Pendidikan
                                Lanjut</label>
                            <input type="text" id="pendidikan_lanjut" name="pendidikan_lanjut"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Pendidikan Lanjut"
                                value="{{ old('pendidikan_lanjut', $user->pendidikan_lanjut) }}">
                            @error('pendidikan_lanjut')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pekerjaan" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                            <input type="text" id="pekerjaan" name="pekerjaan"
                                class="input focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                                placeholder="Pekerjaan" value="{{ old('pekerjaan', $user->pekerjaan) }}">
                            @error('pekerjaan')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="btn bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg w-full">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
