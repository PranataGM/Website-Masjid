<header class="sticky w-full top-0 z-50">
<div class="hidden lg:flex bg-black/90 text-gray-300 text-xs py-2 px-6 justify-between items-center z-50 relative">
    <div class="flex space-x-6">
        <span><i class="fa-solid fa-phone text-islamic-gold mr-2"></i> Hubungi Kami: {{ config('masjid.contact.phone') }}</span>
        <span><i class="fa-solid fa-location-dot text-islamic-gold mr-2"></i>{{ config('masjid.contact.location_short') }}</span>
    </div>
    <div class="space-x-4">
        @if(config('masjid.social.twitter')) <a href="{{ config('masjid.social.twitter') }}" class="hover:text-islamic-gold"><i class="fa-brands fa-twitter"></i></a> @endif
        @if(config('masjid.social.facebook')) <a href="{{ config('masjid.social.facebook') }}" class="hover:text-islamic-gold"><i class="fa-brands fa-facebook-f"></i></a> @endif
        @if(config('masjid.social.instagram')) <a href="{{ config('masjid.social.instagram') }}" class="hover:text-islamic-gold"><i class="fa-brands fa-instagram"></i></a> @endif
        @if(config('masjid.social.youtube')) <a href="{{ config('masjid.social.youtube') }}" class="hover:text-islamic-gold"><i class="fa-brands fa-youtube"></i></a> @endif
    </div>
</div>
<nav class="bg-islamic-green text-white py-4 px-8 shadow-md relative z-40">
    <div class="container mx-auto flex justify-between items-center">
        
        <div class="flex items-center">
            <a href="/" class="bg-islamic-gold text-islamic-green p-4 rounded-b-xl absolute top-0 font-serif font-bold text-2xl shadow-lg hover:bg-yellow-400 transition z-50">
                {{ config('masjid.arabic_name') }}
                <div class="text-xs font-sans text-center mt-1">{{ str_replace('Masjid ', '', config('masjid.name')) }}</div>
            </a>
        </div>

        <ul class="hidden lg:flex space-x-8 items-center ml-40 font-medium text-sm uppercase tracking-wider">
            <li><a href="/" class="{{ request()->is('/') ? 'text-islamic-gold border-b-2 border-islamic-gold pb-1' : 'hover:text-islamic-gold transition' }}">Beranda</a></li>
            <li><a href="/pengurus" class="{{ request()->is('pengurus') ? 'text-islamic-gold border-b-2 border-islamic-gold pb-1' : 'hover:text-islamic-gold transition' }}">Pengurus</a></li>
            <li><a href="/#layanan" class="hover:text-islamic-gold transition">Layanan</a></li>
            <li><a href="/kegiatan" class="{{ request()->is('kegiatan') ? 'text-islamic-gold border-b-2 border-islamic-gold pb-1' : 'hover:text-islamic-gold transition' }}">Kegiatan</a></li>
            <li><a href="/laporan-keuangan" class="{{ request()->is('laporan-keuangan') ? 'text-islamic-gold border-b-2 border-islamic-gold pb-1' : 'hover:text-islamic-gold transition' }}">Keuangan</a></li>
            {{-- <li><a href="/donasi" class="{{ request()->is('donasi') ? 'text-islamic-gold border-b-2 border-islamic-gold pb-1' : 'hover:text-islamic-gold transition' }}">Donasi</a></li> --}}
            <li><a href="/#kontak" class="hover:text-islamic-gold transition">Kontak</a></li>
        </ul>

        <a href="/donasi" class="hidden lg:flex bg-islamic-gold text-islamic-green px-6 py-2 rounded-full font-bold text-sm items-center shadow hover:bg-yellow-400 transition">
            <i class="fa-solid fa-hand-holding-dollar mr-2"></i> Salurkan ZISWAF
        </a>

        <button id="mobile-menu-button" class="lg:hidden text-islamic-gold hover:text-white focus:outline-none ml-auto text-2xl pt-2 pb-1">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <div id="mobile-menu" class="lg:hidden bg-[#0a382c] absolute w-full left-0 top-full shadow-xl border-t border-green-800 transition-all duration-300 ease-in-out opacity-0 invisible -translate-y-4 pointer-events-none">
        <ul class="flex flex-col font-medium text-sm uppercase tracking-wider p-6 space-y-4 text-center">
            <li><a href="/" class="block transition {{ request()->is('/') ? 'text-islamic-gold font-bold' : 'hover:text-islamic-gold' }}">Beranda</a></li>
            <li><a href="/pengurus" class="block transition {{ request()->is('pengurus') ? 'text-islamic-gold font-bold' : 'hover:text-islamic-gold' }}">Pengurus</a></li>
            <li><a href="/#layanan" class="block transition hover:text-islamic-gold">Layanan</a></li>
            <li><a href="/kegiatan" class="block transition {{ request()->is('kegiatan') ? 'text-islamic-gold font-bold' : 'hover:text-islamic-gold' }}">Kegiatan</a></li>
            <li><a href="/laporan-keuangan" class="block transition {{ request()->is('laporan-keuangan') ? 'text-islamic-gold font-bold' : 'hover:text-islamic-gold' }}">Keuangan</a></li>
            <li><a href="/donasi" class="block transition {{ request()->is('donasi') ? 'text-islamic-gold font-bold' : 'hover:text-islamic-gold' }}">Donasi</a></li>
            <li><a href="/#kontak" class="block transition hover:text-islamic-gold">Kontak</a></li>
            <li class="pt-4 border-t border-green-800">
                <a href="/donasi" class="inline-block bg-islamic-gold text-islamic-green px-6 py-3 rounded-full font-bold text-sm shadow hover:bg-yellow-400 transition mt-2">
                    <i class="fa-solid fa-hand-holding-dollar mr-2"></i> Salurkan ZISWAF
                </a>
            </li>
        </ul>
    </div>
</nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('opacity-0');
                menu.classList.toggle('invisible');
                menu.classList.toggle('-translate-y-4');
                menu.classList.toggle('pointer-events-none');
            });
        }
    });
</script>