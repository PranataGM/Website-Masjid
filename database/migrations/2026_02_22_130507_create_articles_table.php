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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul artikel/pengumuman
            $table->string('slug')->unique(); // URL ramah SEO (misal: /kajian-ahad-pagi)
            $table->text('content'); // Isi lengkap artikel
            $table->string('image')->nullable(); // Foto/poster (nullable = boleh kosong)
            $table->boolean('is_published')->default(true); // Status tayang
            $table->timestamps(); // Otomatis mencatat waktu dibuat & diupdate
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
