<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Hapus tabel lama yang rusak/belum lengkap
        Schema::dropIfExists('cash_flows');

        // 2. Buat ulang tabel dengan struktur yang sempurna
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();
            $table->date('date'); 
            $table->enum('type', ['pemasukan', 'pengeluaran']); 
            $table->string('category'); 
            $table->string('item_details'); 
            $table->bigInteger('amount')->default(0); 
            $table->text('description')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_flows');
    }
};