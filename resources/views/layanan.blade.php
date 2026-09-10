@extends('layouts.main')

@section('title', 'Layanan Kami')

@section('content')
    <header class="bg-islamic-green bg-pattern text-white text-center py-20 relative shadow-inner">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10">
            <i class="fa-solid fa-ruble-sign text-islamic-gold text-3xl mb-4"></i> 
            <h1 class="font-serif text-5xl font-bold uppercase tracking-widest mb-4">Layanan Kami</h1>
            <p class="text-islamic-gold font-medium uppercase text-sm tracking-widest">
                <a href="/" class="hover:text-white transition">Beranda</a> / <span class="text-gray-300">Layanan</span>
            </p>
        </div>
    </header>

    <section class="container mx-auto py-20 px-6">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            
            <div class="lg:w-1/2">
                <p class="text-gray-500 uppercase tracking-widest text-sm font-semibold mb-2">Memakmurkan Rumah Allah</p>
                <h2 class="font-serif text-4xl font-bold text-gray-900 mb-10">APA YANG KAMI SEDIAKAN</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <i class="fa-solid fa-book-quran text-4xl text-islamic-gold mb-4"></i>
                        <h3 class="font-serif text-xl font-bold mb-2">Fasilitas Ibadah</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Ruang shalat yang nyaman, bersih, dan memadai untuk menjaga kekhusyukan ibadah para jamaah.</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-kaaba text-4xl text-islamic-gold mb-4"></i>
                        <h3 class="font-serif text-xl font-bold mb-2">Bimbingan Agama</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Taman Pendidikan Al-Quran (TPA) dan konsultasi keagamaan bersama para asatidz berpengalaman.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow border-b-4 border-islamic-gold">
                        <i class="fa-solid fa-hand-holding-dollar text-4xl text-islamic-gold mb-4"></i>
                        <h3 class="font-serif text-xl font-bold mb-2">Transparansi Dana</h3>
                        <p class="text-gray-500 text-sm mb-2">Total saldo kas masjid saat ini:</p>
                        <div class="text-2xl font-bold text-islamic-green">Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 flex justify-center">
                <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Fasilitas Masjid Nurul Iman" class="rounded-2xl shadow-2xl border-4 border-white max-w-md w-full object-cover">
            </div>
        </div>
    </section>

    <section class="bg-white py-20 bg-pattern">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-500 uppercase tracking-widest text-sm font-semibold mb-2">Informasi & Berita Terbaru</p>
            <h2 class="font-serif text-4xl font-bold text-gray-900 mb-16 uppercase">Pengumuman & Kajian</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Looping Data Artikel dari Database --}}
                @forelse ($articles as $article)
                <div class="bg-islamic-bg p-8 rounded-xl shadow-md border-t-4 border-islamic-gold hover:-translate-y-2 transition duration-300">
                    <div class="w-16 h-16 bg-islamic-gold rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-6 shadow-inner">
                        <i class="fa-solid fa-mosque"></i>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">{{ $article->title }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ Str::limit($article->content, 100) }}</p>
                </div>
                @empty
                <div class="col-span-3 text-gray-500">Belum ada pengumuman terbaru.</div>
                @endforelse
            </div>
        </div>
    </section>
@endsection