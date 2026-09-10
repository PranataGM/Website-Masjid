@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
    <header class="relative bg-[url('https://images.unsplash.com/photo-1564121211835-e88c852648ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center h-[80vh] flex items-center justify-center text-center">
        <div class="absolute inset-0 bg-black/60"></div>
        
        <div class="relative z-10 px-6 max-w-4xl">
            <i class="fa-solid fa-star-and-crescent text-islamic-gold text-5xl mb-6"></i>
            <p class="text-islamic-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Selamat Datang di Rumah Allah</p>
            <h1 class="font-serif text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">{{ config('masjid.name') }}</h1>
            <p class="text-gray-200 text-lg md:text-xl mb-10 font-light">Menjadi pusat ibadah yang makmur, membina peradaban Islam yang rahmatan lil 'alamin, dan memberdayakan umat secara mandiri.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 pb-28 md:pb-0">
                <a href="#jadwal" class="bg-islamic-gold text-islamic-green px-8 py-3 rounded-full font-bold uppercase tracking-wider shadow-lg hover:bg-yellow-400 transition">
                    Jadwal Sholat
                </a>
                <a href="#tentang" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-bold uppercase tracking-wider shadow-lg hover:bg-white hover:text-islamic-green transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </header>

    <section id="jadwal" class="relative z-20 -mt-16 max-w-6xl mx-auto px-6">
        <div class="bg-islamic-green text-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
            <div class="bg-islamic-gold text-islamic-green p-6 md:w-1/4 flex flex-col justify-center items-center text-center">
                <i class="fa-regular fa-calendar-days text-3xl mb-2"></i>
                <h2 class="font-serif font-bold text-xl uppercase">Jadwal Sholat</h2>
                <p class="text-sm font-medium">Sumbawa & Sekitarnya</p>
            </div>
            <div class="p-6 md:w-3/4 grid grid-cols-2 md:grid-cols-5 gap-4 text-center items-center">
                <div><p class="text-islamic-gold text-sm uppercase font-bold mb-1">Subuh</p><div class="font-serif text-2xl font-bold">04:53</div></div>
                <div><p class="text-islamic-gold text-sm uppercase font-bold mb-1">Dzuhur</p><div class="font-serif text-2xl font-bold">12:23</div></div>
                <div><p class="text-islamic-gold text-sm uppercase font-bold mb-1">Ashar</p><div class="font-serif text-2xl font-bold">15:28</div></div>
                <div><p class="text-islamic-gold text-sm uppercase font-bold mb-1">Maghrib</p><div class="font-serif text-2xl font-bold">18:32</div></div>
                <div><p class="text-islamic-gold text-sm uppercase font-bold mb-1">Isya</p><div class="font-serif text-2xl font-bold">19:43</div></div>
            </div>
        </div>
    </section>

    <section id="tentang" class="container mx-auto py-24 px-6">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-3/5">
                <p class="text-islamic-green uppercase tracking-widest text-sm font-bold mb-2">Tentang Kami</p>
                <h2 class="font-serif text-4xl font-bold text-gray-900 mb-6">Sekilas {{ config('masjid.name') }}</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    {{ config('masjid.name') }} bukan sekadar tempat untuk melaksanakan sholat lima waktu. Kami hadir sebagai pusat kegiatan masyarakat yang merangkul berbagai kalangan. Melalui berbagai program pendidikan, sosial, dan kajian keislaman, kami berupaya membangun komunitas yang tangguh berlandaskan nilai-nilai Al-Quran dan As-Sunnah.
                </p>
                <ul class="space-y-3 mb-8 text-sm text-gray-700 font-medium">
                    <li><i class="fa-solid fa-check text-islamic-gold mr-2"></i> Kajian & Majelis Ilmu</li>
                    <li><i class="fa-solid fa-check text-islamic-gold mr-2"></i> Taman Pendidikan Al-Quran</li>
                    <li><i class="fa-solid fa-check text-islamic-gold mr-2"></i> Penyaluran Zakat, Infaq, & Sedekah</li>
                </ul>
            </div>

            <div class="lg:w-2/5 w-full">
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-8 border-islamic-gold relative overflow-hidden">
                    <i class="fa-solid fa-wallet text-9xl text-gray-50 absolute -right-4 -bottom-4 opacity-50"></i>
                    <div class="relative z-10">
                        <h3 class="font-serif text-2xl font-bold text-gray-900 mb-2">Transparansi Dana Umat</h3>
                        <p class="text-gray-500 text-sm mb-6">Laporan kas masjid diperbarui secara otomatis dan berkala.</p>
                        
                        <div class="bg-islamic-bg p-6 rounded-xl border border-gray-100 text-center mb-6">
                            <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-1">Total Saldo Kas Saat Ini</p>
                            <div class="text-4xl font-extrabold text-islamic-green font-serif">
                                Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}
                            </div>
                        </div>
                        
                        <a href="/laporan-keuangan" class="block w-full text-center bg-islamic-green text-white py-3 rounded-lg font-bold hover:bg-[#0a382c] transition">
                            Lihat Rincian Laporan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION LAYANAN -->
    <section id="layanan" class="container mx-auto py-20 px-6 border-t border-gray-200">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="lg:w-1/2">
                <p class="text-gray-500 uppercase tracking-widest text-sm font-semibold mb-2">Memakmurkan Rumah Allah</p>
                <h2 class="font-serif text-4xl font-bold text-gray-900 mb-10">Layanan Kami</h2>
                
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
                    <div class="bg-white p-4 rounded-lg shadow border-b-4 border-islamic-gold col-span-1 md:col-span-2 text-center">
                        <i class="fa-solid fa-hand-holding-dollar text-4xl text-islamic-gold mb-4"></i>
                        <h3 class="font-serif text-xl font-bold mb-2">Penyaluran Donasi & ZISWAF</h3>
                        <p class="text-gray-500 text-sm mb-4">Menyalurkan Zakat, Infaq, Sedekah, dan Wakaf tepat sasaran kepada asnaf dan program kemaslahatan umat.</p>
                        <a href="/donasi" class="inline-block bg-islamic-green text-white px-6 py-2 rounded-lg text-sm font-bold uppercase hover:bg-[#0a382c] transition">Salurkan Donasi</a>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 flex justify-center">
                <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Fasilitas Masjid Nurul Iman" class="rounded-2xl shadow-2xl border-4 border-white max-w-md w-full object-cover">
            </div>
        </div>
    </section>

    <!-- SECTION PROGRAM PEMBANGUNAN -->
    <section id="program" class="bg-gray-50 py-24 border-t border-gray-200">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-islamic-gold uppercase tracking-widest text-sm font-bold mb-2">Fokus Kami</p>
                <h2 class="font-serif text-4xl font-bold text-gray-900 uppercase">Program Pembangunan</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($programs as $prog)
                <div class="bg-white rounded-2xl shadow-lg border-b-4 border-islamic-gold hover:-translate-y-2 transition duration-300 overflow-hidden group flex flex-col">
                    <div class="h-56 bg-gray-200 overflow-hidden relative flex items-center justify-center">
                        <div class="absolute top-4 right-4 z-20">
                            @if($prog->status == 'Berjalan')
                                <span class="bg-yellow-500 text-white text-xs font-bold uppercase px-3 py-2 rounded-lg shadow"><i class="fa-solid fa-person-digging mr-1"></i> Berjalan</span>
                            @else
                                <span class="bg-green-600 text-white text-xs font-bold uppercase px-3 py-2 rounded-lg shadow"><i class="fa-solid fa-check-circle mr-1"></i> Selesai</span>
                            @endif
                        </div>
                        
                        @if($prog->image)
                            <img src="{{ asset('storage/' . $prog->image) }}" alt="{{ $prog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 relative z-10">
                        @else
                            <img src="https://unsplash.com/photos/PlBsJ5MybGc/download?force=true&w=800" alt="Pembangunan Masjid" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 relative z-10">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent z-10 pointer-events-none"></div>
                    </div>
                    
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-xs text-islamic-gold font-bold uppercase tracking-wider mb-3">
                            <i class="fa-solid fa-hammer mr-2"></i> Pembangunan
                        </div>
                        <h3 class="font-serif text-xl font-bold text-gray-900 mb-3 group-hover:text-islamic-green transition">{{ $prog->title }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-1">{{ Str::limit($prog->description, 100) }}</p>
                        <a href="/program/{{ $prog->id }}" class="text-islamic-gold font-bold text-sm uppercase hover:text-yellow-600 mt-auto">
                            Lihat Selengkapnya <i class="fa-solid fa-angle-right ml-1"></i>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-10 bg-white rounded-xl border border-gray-200 shadow-sm">
                    <p class="text-gray-500">Belum ada data program pembangunan saat ini.</p>
                </div>
                @endforelse
            </div>
            <div class="mt-12 text-center">
                <a href="/kegiatan" class="inline-block border-2 border-islamic-green text-islamic-green font-bold uppercase px-8 py-3 rounded-full hover:bg-islamic-green hover:text-white transition">Lihat Semua Program</a>
            </div>
        </div>
    </section>

    <!-- SECTION KAJIAN TERBARU -->
    <section id="kajian" class="bg-white py-24 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-islamic-green uppercase tracking-widest text-sm font-bold mb-2">Informasi Terbaru</p>
                <h2 class="font-serif text-4xl font-bold text-gray-900 uppercase">Pengumuman & Kajian</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($articles as $article)
                <div class="bg-islamic-bg rounded-2xl shadow-lg border-b-4 border-islamic-gold hover:-translate-y-2 transition duration-300 overflow-hidden group flex flex-col">
                    <div class="h-56 bg-gray-200 overflow-hidden relative">
                        <div class="absolute top-4 right-4 bg-islamic-gold text-white text-center rounded-lg shadow-lg z-20 w-16 py-2">
                            <span class="block text-2xl font-bold leading-none">{{ $article->created_at->format('d') }}</span>
                            <span class="block text-xs uppercase">{{ $article->created_at->format('M') }}</span>
                        </div>

                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 relative z-10">
                        @else
                            <img src="https://unsplash.com/photos/oD4BvNSaU0k/download?force=true&w=800" alt="Thumbnail Kajian" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 relative z-10">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent z-10 pointer-events-none"></div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-xs text-islamic-green font-bold uppercase tracking-wider mb-3">
                            <i class="fa-solid fa-tag mr-2"></i> Majelis Ilmu
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-3 text-gray-900 group-hover:text-islamic-green transition">{{ $article->title }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4 flex-1">{{ Str::limit($article->content, 100) }}</p>
                        <a href="/artikel/{{ $article->slug }}" class="text-islamic-gold font-bold text-sm uppercase hover:text-yellow-600">Selengkapnya <i class="fa-solid fa-angle-right ml-1"></i></a>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center text-gray-500 p-10 bg-gray-50 rounded-xl">Belum ada pengumuman terbaru.</div>
                @endforelse
            </div>
            
            <div class="mt-12 text-center">
                <a href="/kegiatan" class="inline-block border-2 border-islamic-green text-islamic-green font-bold uppercase px-8 py-3 rounded-full hover:bg-islamic-green hover:text-white transition">Lihat Semua Kajian</a>
            </div>
        </div>
    </section>

    <!-- SECTION KONTAK -->
    <section id="kontak" class="bg-gray-50 py-24 border-t border-gray-200">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="text-center mb-16">
                <p class="text-islamic-green uppercase tracking-widest text-sm font-bold mb-2">Lokasi & Informasi</p>
                <h2 class="font-serif text-4xl font-bold text-gray-900 mb-6 uppercase">Hubungi & Kunjungi Kami</h2>
                <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto">
                    Silakan kunjungi kami untuk mengikuti kegiatan majelis ilmu, layanan fasilitas ibadah, maupun penyaluran ZISWAF. Kami menanti kehadiran seluruh jamaah.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="space-y-6">
                    <div class="flex items-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="w-16 h-16 bg-islamic-bg text-islamic-green rounded-full flex items-center justify-center text-2xl shadow-inner mr-6 shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-1">Alamat Masjid</h3>
                            <p class="text-gray-600">{!! nl2br(e(config('masjid.contact.address'))) !!}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="w-16 h-16 bg-islamic-bg text-islamic-green rounded-full flex items-center justify-center text-2xl shadow-inner mr-6 shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-1">Telepon & WhatsApp</h3>
                            <p class="text-gray-600">{{ config('masjid.contact.phone') }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="w-16 h-16 bg-islamic-bg text-islamic-green rounded-full flex items-center justify-center text-2xl shadow-inner mr-6 shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-1">Email</h3>
                            <p class="text-gray-600">{{ config('masjid.contact.email') }}</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden shadow-xl border-4 border-white">
                    <iframe 
                        title="Peta Lokasi {{ config('masjid.name') }}"
                        src="{{ config('masjid.contact.google_maps_embed') }}" 
                        width="100%" 
                        height="380" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                    <div class="bg-islamic-green text-center py-3">
                        <a href="{{ config('masjid.contact.google_maps_link') }}" target="_blank" class="text-islamic-gold font-bold uppercase text-sm hover:text-white transition flex items-center justify-center">
                            Buka di Aplikasi Google Maps <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection