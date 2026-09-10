<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\CashFlow;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Mengambil 3 artikel/pengumuman terbaru yang berstatus 'published'
        $articles = Article::where('is_published', true)->latest()->get();

        // 2. Menghitung Saldo Kas Masjid
        $pemasukan = CashFlow::where('type', 'pemasukan')->sum('amount');
        $pengeluaran = CashFlow::where('type', 'pengeluaran')->sum('amount');
        $saldo = $pemasukan - $pengeluaran;

        // 3. Mengirim data ke tampilan (view) bernama 'welcome'
        return view('welcome', compact('articles', 'saldo'));
    }
}