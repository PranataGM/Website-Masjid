@extends('layouts.main')

@section('title', 'Kontak Kami')

@section('content')
    <header class="bg-islamic-green bg-pattern text-white text-center py-20 relative shadow-inner">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10">
            <i class="fa-solid fa-ruble-sign text-islamic-gold text-3xl mb-4"></i> 
            <h1 class="font-serif text-5xl font-bold uppercase tracking-widest mb-4">Kontak Kami</h1>
            <p class="text-islamic-gold font-medium uppercase text-sm tracking-widest">
                <a href="/" class="hover:text-white transition">Beranda</a> / <span class="text-gray-300">Kontak</span>
            </p>
        </div>
    </header>

    <section class="container mx-auto py-24 px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <div>
                <p class="text-islamic-green uppercase tracking-widest text-sm font-bold mb-2">Lokasi & Informasi</p>
                <h2 class="font-serif text-4xl font-bold text-gray-900 mb-8">Kunjungi Masjid Kami</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Silakan hubungi kami untuk informasi kegiatan kajian, layanan fasilitas, atau jika Anda memiliki pertanyaan lain. Kami siap melayani jamaah dan masyarakat dengan sepenuh hati.
                </p>

                <div class="space-y-6 mb-10">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-islamic-bg text-islamic-green rounded-full flex items-center justify-center text-xl shadow-inner mr-4 shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Alamat Masjid</h3>
                            <p class="text-gray-600 text-sm">Masjid Nurul Iman<br> Desa Muer, Kec. Plampang, Kabupaten Sumbawa, Nusa Tenggara Barat, Indonesia.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-islamic-bg text-islamic-green rounded-full flex items-center justify-center text-xl shadow-inner mr-4 shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Telepon & WhatsApp</h3>
                            <p class="text-gray-600 text-sm"> +62 000-0000-0000</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-islamic-bg text-islamic-green rounded-full flex items-center justify-center text-xl shadow-inner mr-4 shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Email Pengurus</h3>
                            <p class="text-gray-600 text-sm">admin@masjidnuruliman.com</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg border-2 border-gray-200">
                    <iframe 
                        title="Peta Lokasi Masjid Nurul Iman"
                        src="https://maps.google.com/maps?q=Masjid%20Atas%20Muer,%20Brang%20Kolong,%20Sumbawa&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
                <div class="mt-4">
                    <a href="https://maps.google.com/?cid=1926899457740035325&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNl" target="_blank" aria-label="Buka lokasi masjid di Google Maps" class="text-islamic-gold font-bold uppercase text-sm hover:text-yellow-600 flex items-center">
                        Buka Aplikasi Google Maps <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white p-10 rounded-2xl shadow-xl border-t-8 border-islamic-gold relative overflow-hidden h-fit">
                <i class="fa-solid fa-envelope-open-text text-9xl text-gray-50 absolute -right-4 -bottom-4 z-0"></i>
                
                <div class="relative z-10">
                    <h2 class="font-serif text-3xl font-bold text-gray-900 mb-2">Kirim Pesan</h2>
                    <p class="text-gray-500 text-sm mb-8">Punya pertanyaan atau masukan? Jangan ragu untuk mengirim pesan kepada DKM.</p>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('pesan.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" id="name" name="name" required placeholder="Masukkan nama Anda" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold focus:border-transparent transition">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Nomor Telepon</label>
                                <input type="text" id="phone" name="phone" placeholder="Mis. 081234..." class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold focus:border-transparent transition">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Alamat Email (Opsional)</label>
                            <input type="email" id="email" name="email" placeholder="email@contoh.com" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold focus:border-transparent transition">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-bold text-gray-700 mb-2">Subjek Pesan</label>
                            <select id="subject" name="subject" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold focus:border-transparent transition bg-white text-gray-700">
                                <option value="Pertanyaan Layanan/Fasilitas">Pertanyaan Layanan/Fasilitas</option>
                                <option value="Konfirmasi Donasi">Konfirmasi Donasi</option>
                                <option value="Kritik & Saran">Kritik & Saran</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Pesan Anda</label>
                            <textarea id="message" name="message" rows="4" required placeholder="Tuliskan pesan Anda secara detail..." class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold focus:border-transparent transition"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-islamic-green text-white font-bold uppercase tracking-widest py-4 rounded-lg hover:bg-[#0a382c] transition shadow-lg mt-4">
                            Kirim Pesan Sekarang
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection