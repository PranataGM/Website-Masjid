@extends('layouts.main')

@section('title', 'Laporan Keuangan')

@section('content')
    <header class="bg-islamic-green bg-pattern text-white text-center py-20 relative shadow-inner">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10">
            <i class="fa-solid fa-ruble-sign text-islamic-gold text-3xl mb-4"></i> 
            <h1 class="font-serif text-5xl font-bold uppercase tracking-widest mb-4">Transparansi Dana Umat</h1>
            <p class="text-islamic-gold font-medium uppercase text-sm tracking-widest">
                <a href="/" class="hover:text-white transition">Beranda</a> / <span class="text-gray-300">Laporan Keuangan</span>
            </p>
        </div>
    </header>

    <section class="container mx-auto py-16 px-6 max-w-5xl">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-emerald-500 text-center">
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Total Saldo Kas</p>
                <div class="text-3xl font-bold text-emerald-600 font-serif">Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-blue-500 text-center">
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Total Pemasukan</p>
                <div class="text-2xl font-bold text-blue-600 font-serif">Rp {{ number_format($pemasukan ?? 0, 0, ',', '.') }}</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-red-500 text-center">
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Total Pengeluaran</p>
                <div class="text-2xl font-bold text-red-600 font-serif">Rp {{ number_format($pengeluaran ?? 0, 0, ',', '.') }}</div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden mb-8">
            <div class="bg-islamic-green text-islamic-gold py-4 px-6 border-b border-green-800 flex justify-between items-center">
                <h2 class="font-serif font-bold text-xl uppercase tracking-wider"> Transaksi Terbaru</h2>
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            
            <div class="overflow-x-auto pb-4">
                <table class="w-full text-left border-collapse min-w-[500px]">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider border-b border-gray-200">
                            <th class="py-3 px-4 md:py-4 md:px-6 font-bold whitespace-nowrap">Tanggal</th>
                            <th class="py-3 px-4 md:py-4 md:px-6 font-bold min-w-[150px]">Keterangan</th>
                            <th class="py-3 px-4 md:py-4 md:px-6 font-bold text-center whitespace-nowrap">Jenis</th>
                            <th class="py-3 px-4 md:py-4 md:px-6 font-bold text-right whitespace-nowrap">Nominal (Rp)</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @forelse ($transactions as $trans)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="py-3 px-4 md:py-4 md:px-6 text-gray-600 font-medium whitespace-nowrap">{{ $trans->created_at->format('d M Y') }}</td>
                            <td class="py-3 px-4 md:py-4 md:px-6 text-gray-800 font-bold">{{ $trans->description }}</td>
                            <td class="py-3 px-4 md:py-4 md:px-6 text-center whitespace-nowrap">
                                @if($trans->type == 'pemasukan')
                                    <span class="bg-emerald-100 text-emerald-700 py-1.5 px-3 rounded-full text-xs font-bold inline-block">
                                        <i class="fa-solid fa-arrow-down mr-1 hidden md:inline-block"></i>Masuk
                                    </span>
                                @else
                                    <span class="bg-red-100 text-red-700 py-1.5 px-3 rounded-full text-xs font-bold inline-block">
                                        <i class="fa-solid fa-arrow-up mr-1 hidden md:inline-block"></i>Keluar
                                    </span>
                                @endif
                            </td>
                            <td class="py-3 px-4 md:py-4 md:px-6 text-right font-bold whitespace-nowrap {{ $trans->type == 'pemasukan' ? 'text-emerald-600' : 'text-red-600' }}">
                                {{ $trans->type == 'pemasukan' ? '+' : '-' }} {{ number_format($trans->amount, 0, ',', '.') }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-8 text-center text-gray-500">Belum ada catatan transaksi keuangan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center">
            <a href="/laporan-keuangan/rincian" class="inline-block bg-islamic-gold text-islamic-green px-8 py-4 rounded-xl font-bold uppercase tracking-wider shadow-lg hover:bg-yellow-400 hover:-translate-y-1 transition duration-300">
                <i class="fa-solid fa-file-invoice-dollar mr-2"></i> Lihat Semua Rincian Keuangan
            </a>
            <p class="text-gray-500 text-xs mt-3">Klik tombol di atas untuk melihat seluruh riwayat buku besar masjid.</p>
        </div>

    </section>
@endsection