<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Edit Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
            <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nama Mapel</label>
                    <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="kategori" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                        <option value="Wajib" {{ $mapel->kategori == 'Wajib' ? 'selected' : '' }}>Wajib</option>
                        <option value="Produktif" {{ $mapel->kategori == 'Produktif' ? 'selected' : '' }}>Produktif</option>
                        <option value="Umum" {{ $mapel->kategori == 'Umum' ? 'selected' : '' }}>Umum</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">KKM</label>
                    <input type="number" name="kkm" value="{{ $mapel->kkm }}" min="0" max="100" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('mapel.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 text-sm mr-2">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 text-sm">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
