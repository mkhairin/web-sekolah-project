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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nip', 50);
            $table->enum('gender', ['L', 'P']);
            $table->string('place_of_birth', 100);
            $table->date('date_of_birth');
            $table->string('phone_number', 20);
            $table->text('address');
            $table->string('latest_education', 50);
            $table->date('join_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
