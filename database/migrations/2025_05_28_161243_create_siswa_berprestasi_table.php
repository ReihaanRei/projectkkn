<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaBerprestasiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa_berprestasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('nis');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jurusan');
            $table->year('tahun');
            $table->string('prestasi');
            $table->string('pencapaian');
            $table->string('tingkat'); 
            $table->text('deskripsi')->nullable();
            $table->string('sertifikat')->nullable(); 
            $table->string('foto')->nullable(); 
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_berprestasi');
    }
}