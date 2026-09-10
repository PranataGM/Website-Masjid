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
    Schema::create('donations', function (Blueprint $table) {
        $table->id();
        $table->string('order_id')->unique(); // Kode unik transaksi
        $table->string('name'); // Nama donatur (bisa Hamba Allah)
        $table->string('program')->default('Infaq Umum'); // Tujuan donasi
        $table->decimal('amount', 15, 2); // Nominal
        $table->string('status')->default('pending'); // pending, success, failed
        $table->string('snap_token')->nullable(); // Token dari Midtrans
        $table->timestamps();
    });
}
};
