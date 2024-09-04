<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->char('nim', 8);
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('fakultas', ['teknik', 'sekolah vokasi', 'mipa']);
            $table->string('jurusan');
            $table->decimal('ipk', 3, 2);
            $table->unsignedBigInteger('matkul_id');
            $table->foreign('matkul_id')->references('id')->on('mata_kuliah');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
