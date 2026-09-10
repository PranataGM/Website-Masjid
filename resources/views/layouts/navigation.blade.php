<nav x-data="{ open: false }" class="bg-islamic-green border-b border-green-800 shadow-lg relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="font-serif font-bold text-3xl text-islamic-gold">
                        المؤذن <span class="text-sm font-sans text-white font-normal ml-2 tracking-widest uppercase"></span>
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-300 hover:text-white focus:text-white">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('admin.artikel.index')" :active="request()->routeIs('admin.artikel.*')" class="text-gray-300 hover:text-white focus:text-white">
                        {{ __('Artikel / Kajian') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('admin.keuangan.index')" :active="request()->routeIs('admin.keuangan.*')" class="text-gray-300 hover:text-white focus:text-white">
                        {{ __('Laporan Keuangan') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('admin.program.index')" :active="request()->routeIs('admin.program.*')" class="text-gray-300 hover:text-white focus:text-white">
                        {{ __('Program & Pembangunan') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <a href="/" target="_blank" class="mr-6 inline-flex items-center text-sm font-medium text-islamic-gold hover:text-yellow-300 transition">
                    Lihat Web Publik <i class="fa-solid fa-arrow-up-right-from-square ml-2 text-xs"></i>
                </a>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-bold rounded-full text-islamic-green bg-islamic-gold hover:bg-yellow-400 focus:outline-none transition ease-in-out duration-150 shadow">
                            <i class="fa-solid fa-user-shield mr-2"></i>
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fa-regular fa-id-badge mr-2"></i> {{ __('Profil Saya') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-red-600 hover:bg-red-50">
                                <i class="fa-solid fa-right-from-bracket mr-2"></i> {{ __('Keluar / Logout') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-islamic-gold hover:text-white hover:bg-green-800 focus:outline-none focus:bg-green-800 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-[#0a382c] border-t border-green-800">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-300 hover:text-islamic-gold">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('admin.artikel.index')" :active="request()->routeIs('admin.artikel.*')" class="text-gray-300 hover:text-islamic-gold">
                {{ __('Artikel / Kajian') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('admin.keuangan.index')" :active="request()->routeIs('admin.keuangan.*')" class="text-gray-300 hover:text-islamic-gold">
                {{ __('Laporan Keuangan') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('admin.program.index')" :active="request()->routeIs('admin.program.*')" class="text-gray-300 hover:text-islamic-gold">
                {{ __('Program & Pembangunan') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link href="/" target="_blank" class="text-islamic-gold font-bold">
                Lihat Web Publik <i class="fa-solid fa-arrow-up-right-from-square ml-2 text-xs"></i>
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t border-green-800">
            <div class="px-4 flex items-center mb-3">
                <div class="bg-islamic-gold text-islamic-green rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-400">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-gray-300 hover:text-islamic-gold">
                    <i class="fa-regular fa-id-badge mr-2"></i> {{ __('Profil Saya') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-red-400 hover:text-red-500 font-bold">
                        <i class="fa-solid fa-right-from-bracket mr-2"></i> {{ __('Keluar / Logout') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>