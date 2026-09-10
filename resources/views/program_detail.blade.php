@extends('layouts.main')

@section('title', $program->title)

@section('content')
    <header class="bg-islamic-green bg-pattern text-white text-center py-20 relative shadow-inner">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 px-6 max-w-4xl mx-auto">
            <i class="fa-solid fa-ruble-sign text-islamic-gold text-3xl mb-4"></i> 
            <h1 class="font-serif text-3xl md:text-5xl font-bold uppercase tracking-widest mb-6 leading-tight">{{ $program->title }}</h1>
            <p class="text-islamic-gold font-medium uppercase text-sm tracking-widest">
                <a href="/" class="hover:text-white transition">Beranda</a> / <a href="/kegiatan" class="hover:text-white transition">Program</a> / <span class="text-gray-300">Detail</span>
            </p>
        </div>
    </header>

    <section class="container mx-auto py-16 px-6 max-w-6xl">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <div class="lg:w-2/3">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8 border border-gray-100">
                    <div class="relative h-80 md:h-[400px] bg-gray-200">
                        @if($program->image)
                            <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}" class="w-full h-full object-cover">
                        @else
                            <img src="https://images.unsplash.com/photo-1598889980613-2898c61ceeb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Pembangunan Default" class="w-full h-full object-cover">
                        @endif
                        
                        <div class="absolute top-6 right-6">
                            @if($program->status == 'Berjalan')
                                <span class="bg-yellow-500 text-white text-sm font-bold uppercase px-4 py-2 rounded-lg shadow-lg"><i class="fa-solid fa-person-digging mr-2"></i> Sedang Berjalan</span>
                            @else
                                <span class="bg-green-600 text-white text-sm font-bold uppercase px-4 py-2 rounded-lg shadow-lg"><i class="fa-solid fa-check-circle mr-2"></i> Sudah Selesai</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="p-8 md:p-10">
                        <div class="flex items-center text-sm text-islamic-gold font-bold uppercase tracking-wider mb-6 border-b pb-4">
                            <i class="fa-solid fa-hammer mr-2"></i> Detail Pembangunan & Program
                            <span class="ml-auto text-gray-500 text-xs"><i class="fa-regular fa-calendar-plus mr-1"></i> Diperbarui: {{ $program->updated_at->format('d M Y') }}</span>
                        </div>
                        
                        <div class="prose max-w-none text-gray-600 leading-loose">
                            {!! nl2br(e($program->description)) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="bg-[#0a382c] rounded-2xl shadow-xl p-8 text-center sticky top-8 border-t-4 border-islamic-gold">
                    <i class="fa-solid fa-hand-holding-heart text-5xl text-islamic-gold mb-6"></i>
                    <h2 class="font-serif text-2xl font-bold text-white mb-4">Mari Dukung Program Ini</h2>
                    <p class="text-gray-300 text-sm leading-relaxed mb-8">
                        Salurkan amal jariyah Anda untuk mendukung kelancaran "{{ $program->title }}". Insya Allah pahalanya akan terus mengalir.
                    </p>
                    <a href="/donasi" class="block w-full bg-islamic-gold text-islamic-green py-4 rounded-xl font-bold uppercase tracking-wider hover:bg-yellow-400 transition shadow-lg">
                        Donasi Sekarang
                    </a>
                    
                    <hr class="border-green-800 my-8">
                    
                    <p class="text-white font-bold mb-4 text-sm uppercase tracking-widest">Bagikan Program:</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" aria-label="Bagikan ke WhatsApp" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-islamic-gold hover:text-islamic-green transition"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" aria-label="Bagikan ke Facebook" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-islamic-gold hover:text-islamic-green transition"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Salin Tautan Program" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-islamic-gold hover:text-islamic-green transition"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection