<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CashFlow; // Memanggil database Kas Masjid

class KeuanganController extends Controller
{
    public function index()
    {
        // Ambil semua data transaksi dari yang terbaru
        $transactions = CashFlow::orderBy('created_at', 'desc')->get();
        
        // Bawa datanya ke halaman admin
        return view('admin.keuangan.index', compact('transactions'));
    }
}