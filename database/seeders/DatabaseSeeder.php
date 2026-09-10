<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\CashFlow;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat Dummy Data Artikel/Pengumuman
        Article::create([
            'title' => 'Kajian Rutin Ahad Pagi',
            'slug' => 'kajian-rutin-ahad-pagi',
            'content' => 'Mari hadiri kajian rutin setiap Ahad pagi ba\'da Subuh bersama Ustadz Fulan. Tema minggu ini: Membangun Keluarga Sakinah.',
            'is_published' => true,
        ]);

        Article::create([
            'title' => 'Laporan Pembangunan Area Wudhu',
            'slug' => 'laporan-pembangunan-area-wudhu',
            'content' => 'Alhamdulillah, progres renovasi tempat wudhu pria sudah mencapai 80%. Terima kasih atas infaq dari para jamaah sekalian.',
            'is_published' => true,
        ]);

        // 2. Membuat Dummy Data Kas Masjid
        CashFlow::create([
            'date' => '2026-02-20',
            'type' => 'pemasukan',
            'amount' => 1500000, // Rp 1.500.000
            'description' => 'Kotak Amal Shalat Jumat',
        ]);

        CashFlow::create([
            'date' => '2026-02-21',
            'type' => 'pengeluaran',
            'amount' => 250000, // Rp 250.000
            'description' => 'Biaya kebersihan dan token listrik',
        ]);
    }
}