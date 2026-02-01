<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Tambah Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
            <form action="{{ route('mapel.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nama Mapel</label>
                    <input type="text" name="nama_mapel" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="kategori" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                        <option value="">Pilih</option>
                        <option value="Wajib">Wajib</option>
                        <option value="Produktif">Produktif</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">KKM</label>
                    <input type="number" name="kkm" min="0" max="100" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('mapel.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 text-sm mr-2">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
