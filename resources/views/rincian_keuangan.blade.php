@extends('layouts.main')

@section('title', 'Buku Besar Keuangan')

@section('content')
    <section class="container mx-auto py-16 px-6 max-w-5xl">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-8">
            <div>
                <p class="text-islamic-green uppercase tracking-widest text-sm font-bold mb-2">Buku Besar</p>
                <h1 class="font-serif text-3xl font-bold text-gray-900">Seluruh Rincian Transaksi</h1>
            </div>
            
            <div class="mt-4 md:mt-0 bg-white px-6 py-3 rounded-xl shadow border border-gray-100 flex items-center">
                <i class="fa-solid fa-wallet text-islamic-gold text-xl mr-3"></i>
                <div>
                    <p class="text-[10px] text-gray-500 uppercase font-bold">Total Saldo Aktif</p>
                    <div class="text-xl font-bold text-islamic-green">Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden mb-8">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-gray-300 text-xs uppercase tracking-wider border-b border-gray-200">
                            <th class="py-4 px-6 font-bold">No</th>
                            <th class="py-4 px-6 font-bold">Tanggal</th>
                            <th class="py-4 px-6 font-bold">Keterangan Transaksi</th>
                            <th class="py-4 px-6 font-bold">Jenis</th>
                            <th class="py-4 px-6 font-bold text-right">Nominal (Rp)</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @forelse ($transactions as $index => $trans)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="py-4 px-6 text-gray-500">{{ $index + 1 }}</td>
                            <td class="py-4 px-6 text-gray-600 font-medium">{{ $trans->created_at->format('d M Y') }}</td>
                            <td class="py-4 px-6 text-gray-800 font-bold">{{ $trans->description }}</td>
                            <td class="py-4 px-6">
                                @if($trans->type == 'pemasukan')
                                    <span class="bg-emerald-100 text-emerald-700 py-1 px-3 rounded-full text-[10px] font-bold uppercase"><i class="fa-solid fa-arrow-down mr-1"></i> Masuk</span>
                                @else
                                    <span class="bg-red-100 text-red-700 py-1 px-3 rounded-full text-[10px] font-bold uppercase"><i class="fa-solid fa-arrow-up mr-1"></i> Keluar</span>
                                @endif
                            </td>
                            <td class="py-4 px-6 text-right font-bold {{ $trans->type == 'pemasukan' ? 'text-emerald-600' : 'text-red-600' }}">
                                {{ $trans->type == 'pemasukan' ? '+' : '-' }} {{ number_format($trans->amount, 0, ',', '.') }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-gray-500">
                                <i class="fa-solid fa-folder-open text-4xl text-gray-300 mb-3 block"></i>
                                Belum ada catatan transaksi keuangan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
<div class="mt-8">{{ $transactions->links() }}</div>
            </div>
        </div>

    </section>
@endsection