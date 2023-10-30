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
        Schema::create('ajuan_kredit', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nomor')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('domisili')->nullable();
            $table->string('jenis_jaminan')->nullable();
            $table->string('dokumen_jaminan')->nullable();
            $table->string('lokasi_jaminan')->nullable();
            $table->string('jumlah_pinjaman')->nullable();
            $table->string('penghasilan')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajuan_kredit');
    }
};
