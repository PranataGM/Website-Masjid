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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul program (contoh: Renovasi Atap)
            $table->text('description'); // Penjelasan program
            $table->string('image')->nullable(); // Foto progres
            $table->enum('status', ['Berjalan', 'Selesai'])->default('Berjalan'); // Status
            $table->timestamps();
        });
    }
};
