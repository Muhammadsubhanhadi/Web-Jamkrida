<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('digitalisasis', function (Blueprint $table) {
            $table->id();

            // Jenis konten
            // jumbotron = pengaturan banner utama
            // program = kartu program digitalisasi
            $table->string('jenis', 30)->default('program');

            // Informasi utama
            $table->string('judul');
            $table->text('deskripsi')->nullable();

            // Jumbotron
            $table->string('gambar')->nullable();
            $table->string('teks_tombol')->nullable();
            $table->string('link_tombol')->nullable();

            // Kategori program digitalisasi
            $table->string('tahapan', 50)->nullable();

            // Informasi tambahan program
            $table->string('tahun', 20)->nullable();
            $table->string('ikon', 100)->nullable();

            // Pengaturan tampilan
            $table->unsignedInteger('urutan')->default(0);
            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('digitalisasis');
    }
};