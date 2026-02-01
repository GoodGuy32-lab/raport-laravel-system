<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'jenis_kelamin',
        'tanggal_lahir',
    ];
}
