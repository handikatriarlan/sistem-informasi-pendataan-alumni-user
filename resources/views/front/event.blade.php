@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <section>
            <h2 class="text-2xl font-bold mb-6">Acara Yang Akan Datang</h2>
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-6">
                    <div class="grid lg:grid-cols-2 gap-8">
                        @foreach ($events as $event)
                            <div
                                class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                                <div class="aspect-video bg-gray-200">
                                    <img src="{{ asset('storage_admin/' . $event->gambar) }}" alt="{{ $event->nama_event }}"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $event->nama_event }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($event->keterangan, 100) }}</p>
                                    <div class="text-gray-600 text-sm mb-2">
                                        <span class="font-medium">Tempat:</span> {{ $event->tempat_event }}
                                    </div>
                                    <div class="text-gray-600 text-sm mb-2">
                                        <span class="font-medium">Waktu:</span> {{ \Carbon\Carbon::parse($event->waktu_event)->format('H:i') }} WIB
                                    </div>
                                    <div class="text-gray-600 text-sm mb-4">
                                        <span class="font-medium">Tanggal:</span>
                                        {{ \Carbon\Carbon::parse($event->tgl_event)->format('d F Y') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="space-y-6">
                    <h3 class="text-xl font-semibold">Acara Terakhir</h3>

                    @foreach ($eventLimits as $eventLimit)
                        <div class="flex gap-4">
                            <div class="w-24 h-24 bg-gray-200 flex-shrink-0">
                                <img src="{{ asset('storage_admin/' . $eventLimit->gambar) }}"
                                    alt="{{ $eventLimit->nama_event }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium">{{ $eventLimit->nama_event }}</h4>
                                <p class="text-gray-600 text-sm mt-1">{{ Str::limit($eventLimit->keterangan, 50) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
