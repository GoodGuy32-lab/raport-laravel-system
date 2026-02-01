<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('matapelajarans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_mapel');          // Contoh: Matematika
        $table->string('kategori');            // Umum / Produktif / Wajib
        $table->integer('kkm');                // Kriteria Ketuntasan Minimal
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matapelajarans');
    }
};
