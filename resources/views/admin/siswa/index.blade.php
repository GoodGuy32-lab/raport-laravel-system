<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
    {{ __('Data Siswa') }}
</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('siswa.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + Tambah Siswa
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
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">NIS</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Jenis Kelamin</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Lahir</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($siswas as $siswa)
                            <tr>
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $siswa->nama }}</td>
                                <td class="px-4 py-2">{{ $siswa->nis }}</td>
                                <td class="px-4 py-2">{{ $siswa->kelas }}</td>
                                <td class="px-4 py-2">{{ $siswa->jenis_kelamin }}</td>
                                <td class="px-4 py-2">{{ $siswa->tanggal_lahir }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('siswa.edit', $siswa->id) }}" class="text-blue-500 hover:underline">Edit</a> |
                                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-gray-500">Belum ada data siswa.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
