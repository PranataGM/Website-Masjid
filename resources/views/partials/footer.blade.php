    <footer class="bg-islamic-green text-gray-300 pt-16 pb-8 border-t border-green-800">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
            <div>
                <div class="bg-islamic-gold text-islamic-green p-4 rounded-xl inline-block font-serif font-bold text-3xl mb-6">
                    {{ config('masjid.arabic_name') }}
                </div>
                <p class="text-sm leading-relaxed mb-6">Kami berkomitmen untuk menjadikan masjid sebagai pusat peradaban, ibadah, dan pemberdayaan ekonomi umat di lingkungan sekitar.</p>
                <div class="flex space-x-4">
                    @if(config('masjid.social.facebook')) <a href="{{ config('masjid.social.facebook') }}" aria-label="Facebook Masjid" class="w-10 h-10 rounded-full bg-green-900 flex items-center justify-center hover:bg-islamic-gold hover:text-islamic-green transition"><i class="fa-brands fa-facebook-f"></i></a> @endif
                    @if(config('masjid.social.instagram')) <a href="{{ config('masjid.social.instagram') }}" aria-label="Instagram Masjid" class="w-10 h-10 rounded-full bg-green-900 flex items-center justify-center hover:bg-islamic-gold hover:text-islamic-green transition"><i class="fa-brands fa-instagram"></i></a> @endif
                    @if(config('masjid.social.youtube')) <a href="{{ config('masjid.social.youtube') }}" aria-label="Youtube Masjid" class="w-10 h-10 rounded-full bg-green-900 flex items-center justify-center hover:bg-islamic-gold hover:text-islamic-green transition"><i class="fa-brands fa-youtube"></i></a> @endif
                </div>
            </div>
            
            <div>
                <h4 class="font-serif text-xl font-bold text-white mb-6 uppercase">Info Kontak</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start"><i class="fa-solid fa-phone text-islamic-gold w-8 mt-1"></i> <span>{{ config('masjid.contact.phone') }}</span></li>
                    <li class="flex items-start"><i class="fa-solid fa-location-dot text-islamic-gold w-8 mt-1"></i> <span>{!! nl2br(e(config('masjid.contact.address'))) !!}</span></li>
                </ul>
            </div>

            <div>
                <h4 class="font-serif text-xl font-bold text-white mb-6 uppercase">Tautan Cepat</h4>
                <ul class="space-y-3 text-sm flex flex-col">
                    <li><a href="/" class="hover:text-islamic-gold transition flex items-center"><i class="fa-solid fa-angle-right text-islamic-gold mr-3"></i> Beranda</a></li>
                    <li><a href="/kegiatan" class="hover:text-islamic-gold transition flex items-center"><i class="fa-solid fa-angle-right text-islamic-gold mr-3"></i> Kegiatan & Kajian</a></li>
                    <li><a href="/laporan-keuangan" class="hover:text-islamic-gold transition flex items-center"><i class="fa-solid fa-angle-right text-islamic-gold mr-3"></i> Laporan Keuangan</a></li>
                    <li><a href="/donasi" class="hover:text-islamic-gold transition flex items-center"><i class="fa-solid fa-angle-right text-islamic-gold mr-3"></i> Donasi ZISWAF</a></li>
                    <li><a href="/kontak" class="hover:text-islamic-gold transition flex items-center"><i class="fa-solid fa-angle-right text-islamic-gold mr-3"></i> Kontak & Pengaduan</a></li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-green-800/50 pt-8 mt-8 text-center">
            <p class="text-xs text-gray-500 uppercase tracking-widest">&copy; {{ date('Y') }} {{ config('masjid.name') }}. Hak Cipta Dilindungi.</p>
        </div>
    </footer>