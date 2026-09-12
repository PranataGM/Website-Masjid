@extends('layouts.main')

@section('title', 'Salurkan Donasi')

@section('content')
    <section class="container mx-auto py-20 px-6 max-w-5xl">
        <div class="text-center mb-12">
            <h1 class="font-serif text-4xl font-bold text-gray-900 mb-4">Salurkan ZISWAF Anda</h1>
            <p class="text-gray-600">Dukung operasional masjid melalui rekening resmi di bawah ini.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6">
                
                @foreach(config('masjid.donasi.bank') as $bank)
                <div class="bg-white p-6 rounded-2xl shadow-md border-l-4 border-{{ $bank['color'] }} flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-1">{{ $bank['name'] }}</p>
                        <h3 class="font-serif text-2xl font-bold text-gray-900 mb-1">{{ $bank['number'] }}</h3>
                        <p class="text-gray-600 text-sm">{{ $bank['owner'] }}</p>
                    </div>
                    <i class="fa-solid fa-building-columns text-4xl text-gray-200"></i>
                </div>
                @endforeach

                <div class="bg-blue-50 border border-blue-200 text-blue-800 p-4 rounded-xl text-sm flex">
                    <i class="fa-solid fa-circle-info text-xl mr-3 mt-0.5"></i>
                    <p>Mohon konfirmasi ke WhatsApp Bendahara setelah melakukan transfer: <strong>{{ config('masjid.donasi.konfirmasi_whatsapp') }}</strong></p>
                </div>
            </div>

            <!-- QRIS -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border-t-8 border-islamic-green text-center flex flex-col items-center">
                <h3 class="font-serif text-2xl font-bold text-gray-900 mb-2">Scan QRIS</h3>
                <p class="text-gray-500 text-sm mb-6">Menerima donasi dari semua dompet digital (OVO, GoPay, Dana, dll) dan Mobile Banking.</p>
                
                @if(config('masjid.donasi.qris_image_url'))
                    <img src="{{ config('masjid.donasi.qris_image_url') }}" alt="QRIS Masjid Nurul Iman" class="w-64 h-64 object-cover border border-gray-200 rounded-xl mb-4 shadow-sm">
                @else
                    <div class="w-64 h-64 bg-gray-100 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-xl mb-4 text-gray-400 flex-col">
                        <i class="fa-solid fa-qrcode text-5xl mb-2"></i>
                        <span>QRIS Belum Tersedia</span>
                    </div>
                @endif
                <p class="text-xs text-gray-400 mt-auto">A.N. MASJID NURUL IMAN</p>
            </div>
        </div>
    </section>
@endsection
