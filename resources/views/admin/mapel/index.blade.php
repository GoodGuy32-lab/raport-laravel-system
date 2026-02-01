<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Data Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('mapel.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + Tambah Mata Pelajaran
            </a>

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nama Mapel</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">KKM</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($mapel as $item)
                            <tr>
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $item->nama_mapel }}</td>
                                <td class="px-4 py-2">{{ $item->kategori }}</td>
                                <td class="px-4 py-2">{{ $item->kkm }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('mapel.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a> |
                                    <form action="{{ route('mapel.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Hapus mata pelajaran ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-gray-500 py-4">Belum ada data mata pelajaran.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
