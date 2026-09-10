@extends('layouts.main')

@section('title', $article->title)

@section('content')
    <header class="bg-islamic-green bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')] text-white py-16 relative shadow-inner">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 container mx-auto px-6 max-w-4xl text-center">
            <div class="inline-block bg-islamic-gold text-islamic-green px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                <i class="fa-solid fa-mosque mr-1"></i> Pengumuman & Kajian
            </div>
            <h1 class="font-serif text-4xl md:text-5xl font-bold mb-6 leading-tight">{{ $article->title }}</h1>
            <div class="flex justify-center items-center space-x-6 text-sm text-gray-300">
                <span><i class="fa-regular fa-calendar-days text-islamic-gold mr-2"></i> {{ $article->created_at->format('d F Y') }}</span>
                <span><i class="fa-regular fa-clock text-islamic-gold mr-2"></i> {{ $article->created_at->format('H:i') }} WIB</span>
            </div>
        </div>
    </header>
    
    @if($article->image)
    <div class="container mx-auto px-6 max-w-4xl relative z-30 -mt-12 mb-8">
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-96 object-cover rounded-2xl shadow-2xl border-4 border-white">
    </div>
    @endif

    <section class="flex-grow container mx-auto py-12 px-6 max-w-4xl -mt-8 relative z-20">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl border-t-4 border-islamic-gold">
            
            <div class="text-gray-700 leading-relaxed text-lg space-y-6">
                {!! nl2br(e($article->content)) !!}
            </div>

            <div class="mt-12 pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
                <a href="javascript:history.back()" class="text-islamic-green font-bold hover:text-islamic-gold transition flex items-center">
                    <i class="fa-solid fa-arrow-left-long mr-2"></i> Kembali ke Halaman Sebelumnya
                </a>
                
                <div class="flex items-center space-x-3">
                    <span class="text-sm font-bold text-gray-500 uppercase">Bagikan:</span>
                    <a href="#" aria-label="Bagikan ke Facebook" class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition">
                        <i class="fa-brands fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" aria-label="Bagikan ke WhatsApp" class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center hover:bg-green-600 transition">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection