<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Edit Siswa') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" value="{{ $siswa->nama }}" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">NIS</label>
                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Kelas</label>
                    <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                        <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('siswa.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 text-sm mr-2">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 text-sm">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
