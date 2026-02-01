{{-- resources/views/mapel/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Edit Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                {{-- Point to the UPDATE route and include the ID --}}
                <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                    @csrf
                    @method('PUT') {{-- Critical: Browsers don't support PUT, so Laravel 'spoofs' it here --}}

                    {{-- Nama Mapel --}}
                    <div class="mb-4">
                        <label for="nama_mapel" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Mata Pelajaran</label>
                        <input type="text" name="nama_mapel" id="nama_mapel" 
                               value="{{ $mapel->nama_mapel }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" 
                               required>
                    </div>

                    {{-- Kategori --}}
                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                        <select name="kategori" id="kategori" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                            <option value="Wajib" {{ $mapel->kategori == 'Wajib' ? 'selected' : '' }}>Kelompok A (Wajib)</option>
                            <option value="Umum" {{ $mapel->kategori == 'Umum' ? 'selected' : '' }}>Kelompok B (Umum)</option>
                            <option value="Peminatan" {{ $mapel->kategori == 'Peminatan' ? 'selected' : '' }}>Kelompok C (Peminatan)</option>
                        </select>
                    </div>

                    {{-- KKM --}}
                    <div class="mb-4">
                        <label for="kkm" class="block text-sm font-medium text-gray-700 dark:text-gray-300">KKM</label>
                        <input type="number" name="kkm" id="kkm" 
                               value="{{ $mapel->kkm }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" 
                               required>
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit" 
                                class="px-4 py-2 bg-green-600 text-white rounded shadow hover:bg-green-700">
                            Update Mapel
                        </button>
                        <a href="{{ route('mapel.index') }}" class="text-gray-600 dark:text-gray-400 hover:underline">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
