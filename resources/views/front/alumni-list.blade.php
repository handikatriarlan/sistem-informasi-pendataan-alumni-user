@php $index = 1; @endphp
@forelse ($alumnis as $alumni)
    <tr class="hover:bg-gray-50 transition duration-300">
        <td class="px-6 py-4 border-b border-gray-300">{{ $index++ }}</td>
        <td class="px-6 py-4 border-b border-gray-300">
            <div class="w-16 h-16 overflow-hidden mx-auto rounded-full">
                <img src="{{ asset('storage_admin/' . $alumni->foto) }}" alt="Foto Alumni"
                    class="w-full h-full object-cover">
            </div>
        </td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->name ?? '–' }}</td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->jenis_kelamin ?? '–' }}</td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->alamat ?? '–' }}</td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->no_phone ?? '–' }}</td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->email ?? '–' }}</td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->pendidikan_lanjut ?? '–' }}</td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->pekerjaan ?? '–' }}</td>
        <td class="px-6 py-4 border-b border-gray-300">{{ $alumni->tahun_lulus ?? '–' }}</td>
    </tr>
@empty
    <tr>
        <td colspan="9" class="text-center py-4 text-gray-500">Alumni Not Found.</td>
    </tr>
@endforelse
