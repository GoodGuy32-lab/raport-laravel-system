<?php

namespace App\Http\Controllers;

use App\Models\Matapelajaran;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the subjects.
     */
    public function index()
    {
        $mapel = Matapelajaran::all(); 
        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new subject.
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created subject in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'kategori'   => 'required|in:Wajib,Umum,Produktif,B',
            'kkm'        => 'required|integer',
        ]);

        Matapelajaran::create($request->all());

        return redirect()->route('mapel.index')->with('success', 'Data Mapel berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified subject.
     */
    public function edit($id)
    {
        $mapel = Matapelajaran::findOrFail($id);
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified subject in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'kategori'   => 'required|in:Wajib,Umum,Produktif,B',
            'kkm'        => 'required|integer',
        ]);

        $mapel = Matapelajaran::findOrFail($id);
        $mapel->update($request->all());

        return redirect()->route('mapel.index')->with('success', 'Data Mapel berhasil diupdate!');
    }

    /**
     * Remove the specified subject from storage.
     */
    public function destroy($id)
    {
        $mapel = Matapelajaran::findOrFail($id);
        $mapel->delete();

        return redirect()->route('mapel.index')->with('success', 'Data Mapel berhasil dihapus!');
    }
}