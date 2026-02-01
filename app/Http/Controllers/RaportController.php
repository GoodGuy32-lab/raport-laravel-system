<?php

namespace App\Http\Controllers;

use App\Models\Raport;
use App\Models\Siswa;
use App\Models\Matapelajaran;
use Illuminate\Http\Request;

class RaportController extends Controller
{
    public function index()
    {
        $raports = Raport::with(['siswa', 'mapel'])->get();
        return view('admin.raport.index', compact('raports'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $mapels = Matapelajaran::all();
        return view('admin.raport.create', compact('siswas', 'mapels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'mapel_id' => 'required|exists:matapelajarans,id',
            'nilai' => 'required|integer|min:0|max:100',
            'semester' => 'required|string',
            'tahun_ajaran' => 'required|string',
        ]);

        Raport::create($request->all());

        return redirect()->route('raport.index')->with('success', 'Nilai raport berhasil ditambahkan.');
    }

    public function destroy(Raport $raport)
    {
        $raport->delete();
        return redirect()->route('raport.index')->with('success', 'Nilai berhasil dihapus.');
    }
}
