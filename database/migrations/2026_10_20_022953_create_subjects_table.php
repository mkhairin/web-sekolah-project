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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20);
            // Nama lengkap mata pelajaran (contoh: "Matematika Wajib", "Fisika Peminatan")
            $table->string('name', 100);
            // Kategori pelajaran. Di Indonesia (K-13 / Kurikulum Merdeka)
            $table->enum('category', [
                'Kelompok A (Nasional)',
                'Kelompok B (Kewilayahan)',
                'Kelompok C (Peminatan)',
                'Muatan Lokal'
            ]);
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
