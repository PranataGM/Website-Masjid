@extends('layouts.main')

@section('title', 'Kegiatan & Program')

@section('extra-css')
<style>
    .custom-scrollbar::-webkit-scrollbar { height: 10px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #e0a945; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #0f4d3c; }
</style>
@endsection

@section('content')
    <header class="bg-islamic-green bg-pattern text-white text-center py-20 relative shadow-inner">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10">
            <i class="fa-solid fa-ruble-sign text-islamic-gold text-3xl mb-4"></i> 
            <h1 class="font-serif text-5xl font-bold uppercase tracking-widest mb-4">Kegiatan & Program</h1>
            <p class="text-islamic-gold font-medium uppercase text-sm tracking-widest">
                <a href="/" class="hover:text-white transition">Beranda</a> / <span class="text-gray-300">Kegiatan</span>
            </p>
        </div>
    </header>

    <section class="container mx-auto py-20 px-6 border-b border-gray-200">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <p class="text-islamic-gold uppercase tracking-widest text-sm font-bold mb-2">Transparansi Umat</p>
            <h2 class="font-serif text-4xl font-bold text-gray-900 mb-6">Program & Pembangunan</h2>
            <p class="text-gray-600 leading-relaxed">
                Pantau terus perkembangan program pembangunan fisik maupun non-fisik yang sedang berjalan di Masjid Nurul Iman.
            </p>
        </div>

        <div class="flex overflow-x-auto gap-8 pb-8 snap-x snap-mandatory custom-scrollbar">
            @forelse ($programs as $prog)
            <div class="shrink-0 w-[85vw] md:w-[24rem] bg-islamic-bg rounded-2xl shadow-lg border-b-4 border-islamic-gold hover:-translate-y-2 transition duration-300 overflow-hidden group flex flex-col snap-start">
                
                <div class="h-56 bg-gray-200 overflow-hidden relative flex items-center justify-center">
                    <div class="absolute top-4 right-4 z-20">
                        @if($prog->status == 'Berjalan')
                            <span class="bg-yellow-500 text-white text-xs font-bold uppercase px-3 py-2 rounded-lg shadow"><i class="fa-solid fa-person-digging mr-1"></i> Berjalan</span>
                        @else
                            <span class="bg-green-600 text-white text-xs font-bold uppercase px-3 py-2 rounded-lg shadow"><i class="fa-solid fa-check-circle mr-1"></i> Selesai</span>
                        @endif
                    </div>
                    
                    @if($prog->image)
                        <img src="{{ asset('storage/' . $prog->image) }}" alt="{{ $prog->title }}" class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-500 relative z-10">
                    @else
                        <img src="https://images.unsplash.com/photo-1598889980613-2898c61ceeb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pembangunan" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 relative z-10">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent z-10 pointer-events-none"></div>
                </div>
                
                <div class="p-8 flex-1 flex flex-col">
                    <div class="flex items-center text-xs text-islamic-gold font-bold uppercase tracking-wider mb-3">
                        <i class="fa-solid fa-hammer mr-2"></i> Pembangunan
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-gray-900 mb-4 group-hover:text-islamic-green transition">{{ $prog->title }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-1">{{ Str::limit($prog->description, 120) }}</p>
                    
                    <a href="/program/{{ $prog->id }}" class="text-islamic-gold font-bold text-sm uppercase hover:text-yellow-600 mt-auto">
                        Lihat Selengkapnya <i class="fa-solid fa-angle-right ml-1"></i>
                    </a>
                </div>
            </div>
            @empty
            <div class="w-full text-center py-10 bg-gray-50 rounded-xl border border-gray-200">
                <i class="fa-solid fa-person-digging text-4xl text-gray-500 mb-3"></i>
                <p class="text-gray-500">Belum ada data program pembangunan saat ini.</p>
            </div>
            @endforelse
        </div>
    </section>

    <section class="container mx-auto py-20 px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <p class="text-islamic-green uppercase tracking-widest text-sm font-bold mb-2">Agenda Masjid</p>
            <h2 class="font-serif text-4xl font-bold text-gray-900 mb-6">Kajian & Pengumuman Terbaru</h2>
            <p class="text-gray-600 leading-relaxed">
                Mari ramaikan rumah Allah dengan mengikuti berbagai kajian ilmu dan majelis taklim.
            </p>
        </div>

        <div class="flex overflow-x-auto gap-8 pb-8 snap-x snap-mandatory custom-scrollbar">
            @forelse ($kegiatan as $item)
            <div class="shrink-0 w-[85vw] md:w-[24rem] bg-islamic-bg rounded-2xl shadow-lg border-b-4 border-islamic-gold hover:-translate-y-2 transition duration-300 overflow-hidden group flex flex-col snap-start">
                
                <div class="h-56 bg-gray-200 overflow-hidden relative flex items-center justify-center">
                    <div class="absolute top-4 right-4 bg-islamic-gold text-white text-center rounded-lg shadow-lg z-20 w-16 py-2">
                        <span class="block text-2xl font-bold leading-none">{{ $item->created_at->format('d') }}</span>
                        <span class="block text-xs uppercase">{{ $item->created_at->format('M') }}</span>
                    </div>
                    
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-500 relative z-10">
                    @else
                        <img src="https://images.unsplash.com/photo-1579758629938-03607ccdbaba?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kajian" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 relative z-10">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent z-10 pointer-events-none"></div>
                </div>
                
                <div class="p-8 flex-1 flex flex-col">
                    <div class="flex items-center text-xs text-islamic-green font-bold uppercase tracking-wider mb-3">
                        <i class="fa-solid fa-tag mr-2"></i> Majelis Ilmu
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-gray-900 mb-4 group-hover:text-islamic-green transition">{{ $item->title }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-1">{{ Str::limit($item->content, 120) }}</p>
                    
                    <a href="/artikel/{{ $item->slug }}" class="inline-block border-2 border-islamic-green text-islamic-green text-center font-bold text-sm uppercase px-6 py-2 rounded-full hover:bg-islamic-green hover:text-white transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @empty
            <div class="w-full text-center py-12 bg-white rounded-xl shadow border-t-4 border-gray-300">
                <i class="fa-regular fa-calendar-xmark text-5xl text-gray-400 mb-4"></i>
                <p class="text-gray-500 text-lg">Belum ada jadwal kegiatan atau pengumuman saat ini.</p>
            </div>
            @endforelse
        </div>
    </section>
<div class="container mx-auto px-6 py-8">{{ $kegiatan->links() }}</div>
@endsection