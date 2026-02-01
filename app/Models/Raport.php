<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'nilai',
        'semester',
        'tahun_ajaran',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Matapelajaran::class, 'mapel_id');
    }
}
