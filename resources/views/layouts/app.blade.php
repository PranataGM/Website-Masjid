<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel - Masjid Nurul Iman</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'islamic-green': '#0f4d3c',
                        'islamic-gold': '#e0a945',
                        'islamic-bg': '#fcfbf8',
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['"Poppins"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800">
    <div class="flex h-screen overflow-hidden">
        <aside id="sidebar" class="bg-islamic-green text-white w-64 flex-shrink-0 hidden md:flex flex-col shadow-2xl relative z-50">
            <div class="h-20 flex items-center justify-center border-b border-green-800 bg-[#0a382c]">
                <a href="/dashboard" class="font-serif font-bold text-2xl text-islamic-gold tracking-widest uppercase">
                    <i class="fa-solid fa-mosque mr-2"></i> DKM Panel
                </a>
            </div>

            <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-2">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 ml-2">Menu Utama</p>
                
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'bg-islamic-gold text-islamic-green font-bold' : 'text-gray-300 hover:bg-[#0a382c] hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition duration-200">
                    <i class="fa-solid fa-chart-pie w-6"></i> Dashboard
                </a>
                
                <a href="{{ route('admin.artikel.index') }}" class="{{ request()->routeIs('admin.artikel.*') ? 'bg-islamic-gold text-islamic-green font-bold' : 'text-gray-300 hover:bg-[#0a382c] hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition duration-200">
                    <i class="fa-solid fa-newspaper w-6"></i>
                    <span>Kelola Artikel</span>
                </a>
                
                <a href="{{ route('admin.program.index') }}" class="{{ request()->routeIs('admin.program.*') ? 'bg-islamic-gold text-islamic-green font-bold' : 'text-gray-300 hover:bg-[#0a382c] hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition duration-200">
                    <i class="fa-solid fa-building-user w-6"></i>
                    <span>Program Pembangunan</span>
                </a>

                <a href="{{ route('admin.keuangan.index') }}" class="{{ request()->routeIs('admin.keuangan.*') ? 'bg-islamic-gold text-islamic-green font-bold' : 'text-gray-300 hover:bg-[#0a382c] hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition duration-200">
                    <i class="fa-solid fa-wallet w-6"></i>
                    <span>Kas & Keuangan</span>
                </a>

                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-6 mb-4 ml-2">Sistem</p>

                <a href="{{ route('admin.aktivitas.index') }}" class="{{ request()->routeIs('admin.aktivitas.*') ? 'bg-islamic-gold text-islamic-green font-bold' : 'text-gray-300 hover:bg-[#0a382c] hover:text-white' }} flex items-center px-4 py-3 rounded-xl transition duration-200">
                    <i class="fa-solid fa-clipboard-list w-6"></i>
                    <span>Log Aktivitas</span>
                </a>

            </nav>

            <div class="p-4 border-t border-green-800">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-4 py-3 text-red-400 hover:bg-red-500 hover:text-white rounded-xl transition duration-200">
                        <i class="fa-solid fa-right-from-bracket w-6"></i> Keluar
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            
            <header class="bg-white h-16 shadow-sm border-b border-gray-200 flex items-center justify-between px-6 lg:px-10 z-40">
                <div class="flex items-center">
                    <button id="mobile-menu-btn" class="md:hidden text-gray-500 hover:text-islamic-green focus:outline-none mr-4 text-xl">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    @isset($header)
                        <h2 class="font-serif font-bold text-lg text-islamic-green hidden sm:block">
                            {{ $header }}
                        </h2>
                    @endisset
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/" target="_blank" class="text-sm font-medium text-gray-500 hover:text-islamic-green transition bg-gray-100 px-4 py-2 rounded-full hidden sm:flex items-center">
                        <i class="fa-solid fa-globe mr-2"></i> Lihat Website
                    </a>
                    <div class="h-10 w-10 bg-islamic-gold text-islamic-green rounded-full flex items-center justify-center font-bold text-lg shadow-md">
                        {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[#f8f9fa] p-6 lg:p-10 relative">
                <div class="absolute top-0 right-0 w-64 h-64 bg-islamic-green opacity-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
                
                <div class="relative z-10">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Toast Notification for Session Success/Error
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        @if(Session::has('success'))
            Toast.fire({
                icon: 'success',
                title: "{{ Session::get('success') }}"
            });
        @endif

        @if(Session::has('error'))
            Toast.fire({
                icon: 'error',
                title: "{{ Session::get('error') }}"
            });
        @endif

        // Global Delete Confirmation
        function confirmDelete(event, form) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'rounded-2xl',
                    confirmButton: 'rounded-lg',
                    cancelButton: 'rounded-lg'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }

        // Toggle Sidebar
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('absolute');
            sidebar.classList.toggle('h-full');
        });
    </script>
</body>
</html>