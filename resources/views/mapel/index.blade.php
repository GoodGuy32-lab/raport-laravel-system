{{-- resources/views/mapel/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Data Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Tombol tambah --}}
            <a href="{{ route('mapel.create') }}"
               class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded shadow
                      hover:bg-blue-700 focus:ring focus:ring-blue-300">
                + Tambah Mapel
            </a>

            {{-- Tabel --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-2 text-left font-medium text-gray-500 dark:text-gray-300">#</th>
                            <th class="px-4 py-2 text-left font-medium text-gray-500 dark:text-gray-300">Nama Mapel</th>
                            <th class="px-4 py-2 text-left font-medium text-gray-500 dark:text-gray-300">Kategori</th>
                            <th class="px-4 py-2 text-left font-medium text-gray-500 dark:text-gray-300">KKM</th>
                            <th class="px-4 py-2 text-left font-medium text-gray-500 dark:text-gray-300">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 text-gray-800 dark:text-gray-100">
                        @forelse ($mapel as $m)
                            <tr>
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $m->nama_mapel }}</td>
                                <td class="px-4 py-2">{{ $m->kategori }}</td>
                                <td class="px-4 py-2">{{ $m->kkm }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('mapel.edit', $m->id) }}"
                                       class="text-blue-500 hover:underline">Edit</a> |
                                    <form action="{{ route('mapel.destroy', $m->id) }}"
                                          method="POST"
                                          class="inline"
                                          onsubmit="return confirm('Yakin ingin menghapus mapel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-4 text-center">Belum ada mata pelajaran.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
