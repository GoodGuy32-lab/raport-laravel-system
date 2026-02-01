<?php

namespace App\Http\Controllers;

use App\Models\Matapelajaran;
use Illuminate\Http\Request;

class MatapelajaranController extends Controller
{
    public function index()
    {
        $mapel = Matapelajaran::all();
        return view('admin.mapel.index', compact('mapel'));
    }

    public function create()
    {
        return view('admin.mapel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:100',
            'kategori' => 'required|string',
            'kkm' => 'required|integer|min:0|max:100',
        ]);

        Matapelajaran::create($request->all());

        return redirect()->route('mapel.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function edit(Matapelajaran $mapel)
    {
        return view('admin.mapel.edit', compact('mapel'));
    }

    public function update(Request $request, Matapelajaran $mapel)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:100',
            'kategori' => 'required|string',
            'kkm' => 'required|integer|min:0|max:100',
        ]);

        $mapel->update($request->all());

        return redirect()->route('mapel.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    public function destroy(Matapelajaran $mapel)
    {
        $mapel->delete();
        return redirect()->route('mapel.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}
