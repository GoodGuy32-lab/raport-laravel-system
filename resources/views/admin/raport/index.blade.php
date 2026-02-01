<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Daftar Nilai Raport') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('raport.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + Tambah Nilai
            </a>

            <div class="bg-white shadow-sm sm:rounded-lg overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Siswa</th>
                            <th class="px-4 py-2">Kelas</th>
                            <th class="px-4 py-2">Mapel</th>
                            <th class="px-4 py-2">Nilai</th>
                            <th class="px-4 py-2">Semester</th>
                            <th class="px-4 py-2">Tahun Ajaran</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($raports as $raport)
                            <tr>
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $raport->siswa->nama }}</td>
                                <td class="px-4 py-2">{{ $raport->siswa->kelas }}</td>
                                <td class="px-4 py-2">{{ $raport->mapel->nama_mapel }}</td>
                                <td class="px-4 py-2">{{ $raport->nilai }}</td>
                                <td class="px-4 py-2">{{ $raport->semester }}</td>
                                <td class="px-4 py-2">{{ $raport->tahun_ajaran }}</td>
                                <td class="px-4 py-2">
                                    <form action="{{ route('raport.destroy', $raport->id) }}" method="POST" onsubmit="return confirm('Hapus nilai ini?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4 text-gray-500">Belum ada nilai raport.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
