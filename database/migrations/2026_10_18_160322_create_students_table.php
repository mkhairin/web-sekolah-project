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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nisn', 20);
            $table->string('nis', 20);
            $table->enum('gender', ['L', 'P']);
            $table->string('place_of_birth', 100);
            $table->date('date_of_birth');
            $table->enum('religion', [
                'islam', 'kristen', 'katholik', 'hindu', 'buddha'
            ]);
            $table->text('address');
            $table->string('phone_number', 20);
            $table->string('parent_name', 50);
            $table->string('parent_phone_number', 20);
            $table->integer('entry_year');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
