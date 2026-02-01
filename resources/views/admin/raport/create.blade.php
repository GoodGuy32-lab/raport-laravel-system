<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Tambah Nilai Raport') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
            <form action="{{ route('raport.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Siswa</label>
                    <select name="siswa_id" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                        <option value="">Pilih Siswa</option>
                        @foreach ($siswas as $siswa)
                            <option value="{{ $siswa->id }}">{{ $siswa->nama }} ({{ $siswa->kelas }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
                    <select name="mapel_id" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                        <option value="">Pilih Mapel</option>
                        @foreach ($mapels as $mapel)
                            <option value="{{ $mapel->id }}">{{ $mapel->nama_mapel }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nilai</label>
                    <input type="number" name="nilai" min="0" max="100" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Semester</label>
                    <input type="text" name="semester" placeholder="Contoh: Ganjil" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" placeholder="Contoh: 2024/2025" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('raport.index') }}" class="px-4 py-2 bg-gray-300 rounded mr-2">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
