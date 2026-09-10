@extends('layouts.main')

@section('title', 'Kepengurusan')

@section('content')
    <header class="bg-islamic-green bg-pattern text-white text-center py-20 relative shadow-inner">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10">
            <i class="fa-solid fa-ruble-sign text-islamic-gold text-3xl mb-4"></i> 
            <h1 class="font-serif text-5xl font-bold uppercase tracking-widest mb-4">Susunan Pengurus</h1>
            <p class="text-islamic-gold font-medium uppercase text-sm tracking-widest">
                <a href="/" class="hover:text-white transition">Beranda</a> / <span class="text-gray-300">Pengurus</span>
            </p>
        </div>
    </header>

    <section class="container mx-auto py-16 px-6 max-w-6xl">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden flex flex-col">
                <h2 class="bg-black text-white text-center py-3 font-bold uppercase tracking-widest text-sm m-0">Penasehat</h2>
                <div class="p-5 bg-[#d4a853]/20 flex-1">
                    <ul class="space-y-3 text-sm font-bold text-gray-800">
                        @foreach(config('masjid.pengurus.penasehat') as $penasehat)
                            <li><i class="fa-solid fa-circle text-[8px] text-black mr-2"></i> {{ $penasehat }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-2xl border-2 border-islamic-gold overflow-hidden transform md:-translate-y-4">
                <h2 class="bg-black text-islamic-gold text-center py-4 font-bold uppercase tracking-widest text-lg m-0">Ketua Umum</h2>
                <div class="p-8 bg-[#d4a853] text-center h-full flex justify-center items-center">
                    <p class="font-serif text-2xl font-bold text-black leading-snug">{{ config('masjid.pengurus.ketua_umum') }}</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden flex flex-col">
                <h2 class="bg-black text-white text-center py-3 font-bold uppercase tracking-widest text-sm m-0">Imam</h2>
                <div class="bg-[#d4a853] p-3 text-center border-b border-black/10">
                    <p class="text-xs font-bold uppercase text-black/70 mb-1">Ketua</p>
                    <p class="font-bold text-black uppercase">{{ config('masjid.pengurus.imam.ketua') }}</p>
                </div>
                <div class="p-4 bg-[#d4a853]/20 flex-1">
                    <p class="text-xs font-bold uppercase text-black/70 mb-2 border-b border-black/10 pb-1">Anggota:</p>
                    <ul class="space-y-1 text-xs font-bold text-gray-800 grid grid-cols-2 gap-x-2">
                        @foreach(config('masjid.pengurus.imam.anggota') as $anggota)
                            <li><i class="fa-solid fa-circle text-[6px] text-black mr-1"></i> {{ $anggota }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="flex flex-col gap-4">
                <div class="bg-white rounded-xl shadow border border-gray-200 overflow-hidden text-center">
                    <h2 class="bg-black text-white py-2 font-bold uppercase text-sm m-0">Sekretaris</h2>
                    <div class="bg-[#d4a853] p-3"><p class="font-bold text-black uppercase">{{ config('masjid.pengurus.sekretaris') }}</p></div>
                </div>
                <div class="bg-white rounded-xl shadow border border-gray-200 overflow-hidden text-center">
                    <h2 class="bg-black text-white py-2 font-bold uppercase text-sm m-0">Wakil Sekretaris</h2>
                    <div class="bg-[#d4a853] p-3"><p class="font-bold text-black uppercase">{{ config('masjid.pengurus.wakil_sekretaris') }}</p></div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-2xl border-2 border-islamic-gold overflow-hidden transform md:-translate-y-4">
                <h2 class="bg-black text-islamic-gold text-center py-4 font-bold uppercase tracking-widest text-lg m-0">Wakil Ketua</h2>
                <div class="p-8 bg-[#d4a853] text-center h-full flex justify-center items-center">
                    <p class="font-serif text-2xl font-bold text-black uppercase leading-snug">{{ config('masjid.pengurus.wakil_ketua') }}</p>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="bg-white rounded-xl shadow border border-gray-200 overflow-hidden text-center">
                    <h2 class="bg-black text-white py-2 font-bold uppercase text-sm m-0">Bendahara</h2>
                    <div class="bg-[#d4a853] p-3"><p class="font-bold text-black uppercase">{{ config('masjid.pengurus.bendahara') }}</p></div>
                </div>
                <div class="bg-white rounded-xl shadow border border-gray-200 overflow-hidden text-center">
                    <h2 class="bg-black text-white py-2 font-bold uppercase text-sm m-0">Wakil Bendahara</h2>
                    <div class="bg-[#d4a853] p-3"><p class="font-bold text-black uppercase">{{ config('masjid.pengurus.wakil_bendahara') }}</p></div>
                </div>
            </div>
        </div>

        <div class="w-full h-1 bg-gray-300 rounded mb-8 relative hidden md:block">
            <div class="absolute w-4 h-4 rounded-full bg-islamic-green left-1/6 -top-1.5 transform -translate-x-1/2"></div>
            <div class="absolute w-4 h-4 rounded-full bg-islamic-green left-1/2 -top-1.5 transform -translate-x-1/2"></div>
            <div class="absolute w-4 h-4 rounded-full bg-islamic-green left-5/6 -top-1.5 transform -translate-x-1/2"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col">
                <h3 class="bg-black text-white text-center py-3 font-bold uppercase tracking-widest text-sm m-0">Bidang Idarah</h3>
                <div class="bg-[#d4a853] p-3 text-center border-b border-black/10 flex items-center justify-center min-h-[5rem]">
                    <div>
                        <p class="text-[10px] font-bold uppercase text-black/70 mb-1">Ketua</p>
                        <p class="font-bold text-black uppercase text-sm leading-tight">{{ config('masjid.pengurus.bidang_idarah.ketua') }}</p>
                    </div>
                </div>
                <div class="p-4 bg-gray-50 flex-1">
                    <p class="text-[10px] font-bold uppercase text-gray-500 mb-2 border-b pb-1">Anggota:</p>
                    <ul class="space-y-1 text-xs font-bold text-gray-700 grid grid-cols-2">
                        @foreach(config('masjid.pengurus.bidang_idarah.anggota') as $anggota)
                            <li><i class="fa-solid fa-user text-islamic-green mr-2"></i> {{ $anggota }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col">
                <h3 class="bg-black text-white text-center py-3 font-bold uppercase tracking-widest text-[11px] px-1 m-0">Bidang Imarah / Kesejahteraan</h3>
                <div class="bg-[#d4a853] p-3 text-center border-b border-black/10 flex items-center justify-center min-h-[5rem]">
                    <div>
                        <p class="text-[10px] font-bold uppercase text-black/70 mb-1">Ketua</p>
                        <p class="font-bold text-black uppercase text-sm leading-tight">{{ config('masjid.pengurus.bidang_imarah.ketua') }}</p>
                    </div>
                </div>
                <div class="p-4 bg-gray-50 flex-1">
                    <p class="text-[10px] font-bold uppercase text-gray-500 mb-2 border-b pb-1">Anggota:</p>
                    <ul class="space-y-1 text-xs font-bold text-gray-700 grid grid-cols-2">
                        @foreach(config('masjid.pengurus.bidang_imarah.anggota') as $anggota)
                            <li><i class="fa-solid fa-user text-islamic-green mr-1"></i> {{ $anggota }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col">
                <h3 class="bg-black text-white text-center py-3 font-bold uppercase tracking-widest text-sm m-0">Bidang Riayah / PHBI</h3>
                <div class="bg-[#d4a853] p-3 text-center border-b border-black/10 flex items-center justify-center min-h-[5rem]">
                    <div>
                        <p class="text-[10px] font-bold uppercase text-black/70 mb-1">Ketua</p>
                        <p class="font-bold text-black uppercase text-sm leading-tight">{{ config('masjid.pengurus.bidang_riayah.ketua') }}</p>
                    </div>
                </div>
                <div class="p-4 bg-gray-50 flex-1">
                    <p class="text-[10px] font-bold uppercase text-gray-500 mb-2 border-b pb-1">Anggota:</p>
                    <ul class="space-y-1 text-xs font-bold text-gray-700 grid grid-cols-2">
                        @foreach(config('masjid.pengurus.bidang_riayah.anggota') as $anggota)
                            <li><i class="fa-solid fa-user text-islamic-green mr-1"></i> {{ $anggota }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col">
                <h3 class="bg-black text-white text-center py-2 font-bold uppercase tracking-widest text-sm m-0">Ikatan Khatib</h3>
                <div class="bg-[#d4a853] p-3 text-center border-b border-black/10">
                    <p class="text-[10px] font-bold uppercase text-black/70 mb-1">Ketua</p>
                    <p class="font-bold text-black uppercase text-sm">{{ config('masjid.pengurus.khatib.ketua') }}</p>
                </div>
                <div class="p-4 bg-gray-50 flex-1">
                    <p class="text-[10px] font-bold uppercase text-gray-500 mb-2 border-b pb-1">Anggota:</p>
                    <ul class="space-y-1 text-xs font-bold text-gray-700 grid grid-cols-2">
                        @foreach(config('masjid.pengurus.khatib.anggota') as $anggota)
                            <li><i class="fa-solid fa-user text-islamic-green mr-1"></i> {{ $anggota }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col">
                <h3 class="bg-black text-white text-center py-2 font-bold uppercase tracking-widest text-sm m-0">Bilal / Mu'azin</h3>
                <div class="bg-[#d4a853] p-3 text-center border-b border-black/10">
                    <p class="text-[10px] font-bold uppercase text-black/70 mb-1">Ketua</p>
                    <p class="font-bold text-black uppercase text-sm">{{ config('masjid.pengurus.muazin.ketua') }}</p>
                </div>
                <div class="p-4 bg-gray-50 flex-1">
                    <p class="text-[10px] font-bold uppercase text-gray-500 mb-2 border-b pb-1">Anggota:</p>
                    <ul class="space-y-2 text-xs font-bold text-gray-700">
                        @foreach(config('masjid.pengurus.muazin.anggota') as $anggota)
                            <li><i class="fa-solid fa-user text-islamic-green mr-1"></i> {{ $anggota }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col">
                <h3 class="bg-black text-white text-center py-2 font-bold uppercase tracking-widest text-sm m-0">Marbot</h3>
                <div class="bg-[#d4a853] p-3 text-center border-b border-black/10">
                    <p class="text-[10px] font-bold uppercase text-black/70 mb-1"><br></p>
                    <p class="font-bold text-black uppercase text-sm"><br></p>
                </div>
                <div class="p-4 bg-gray-50 flex-1">
                    <p class="text-[10px] font-bold uppercase text-gray-500 mb-2 border-b pb-1">Anggota:</p>
                    <ul class="space-y-2 text-xs font-bold text-gray-700">
                        @foreach(config('masjid.pengurus.marbot.anggota') as $anggota)
                            <li><i class="fa-solid fa-user text-islamic-green mr-1"></i> {{ $anggota }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection