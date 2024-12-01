@extends('layouts.app')

@section('content')
    <main class="flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
                <div class="text-center mb-8">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 h-auto mx-auto">
                </div>
                <form method="POST" action="{{ route('login') }}" id="login-form" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nis" class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                        <input type="number" id="nis" name="nis" required
                            class="input w-full focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                            placeholder="NIS" value="{{ old('nis') }}">

                        @error('nis')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                        <input type="password" id="password" name="password" required
                            class="input w-full focus:border-green-500 focus:ring-2 focus:ring-green-500 border-gray-300"
                            placeholder="Kata Sandi">

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember"
                                class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="ml-2 block text-sm text-gray-700">
                                Ingat Aku
                            </label>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
