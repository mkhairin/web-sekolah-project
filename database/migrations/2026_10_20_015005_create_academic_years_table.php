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
        Schema::create('academic_years', function (Blueprint $table) {
            $table->id();
            // Nama tahun ajaran dan semesternya. (Contoh: "2024/2025 Ganjil" atau "2024/2025 Genap")
            $table->string('name', 100);
            // Default false. Hanya boleh ada satu baris yang bernilai true pada satu waktu. Kolom ini yang akan selalu dicek oleh sistem untuk mengetahui tahun ajaran yang sedang berjalan
            $table->boolean('is_active')->default(0);
            // Tanggal mulai tahun ajaran/semester
            $table->date('start_date');
            // Tanggal berakhir tahun ajaran/semester
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_years');
    }
};
