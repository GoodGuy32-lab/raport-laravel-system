<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    // Nama tabel (jika bukan bentuk jamak default)
    protected $table = 'matapelajarans';

    // Kolom yang bisa diisi massal
    protected $fillable = ['nama_mapel', 'kategori', 'kkm'];

    // Aktifkan timestamp
    public $timestamps = true;

    // Contoh relasi (jika suatu saat diperlukan)
    // public function raport()
    // {
    //     return $this->hasMany(Raport::class);
    // }
}
