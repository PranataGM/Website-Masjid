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
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Tanggal transaksi
            $table->enum('type', ['pemasukan', 'pengeluaran']); // Jenis kas
            $table->integer('amount'); // Nominal uang (gunakan integer untuk Rupiah tanpa desimal)
            $table->string('description'); // Keterangan (misal: "Kotak Amal Jumat", "Bayar Listrik")
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_flows');
    }
};
