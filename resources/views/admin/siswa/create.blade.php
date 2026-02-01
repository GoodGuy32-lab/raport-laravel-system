<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Tambah Siswa') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">NIS</label>
                    <input type="text" name="nis" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Kelas</label>
                    <input type="text" name="kelas" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                        <option value="">Pilih</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('siswa.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 text-sm mr-2">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
