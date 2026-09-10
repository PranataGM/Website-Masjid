<!DOCTYPE html>
<html lang="id" class="scroll-smooth" style="scroll-padding-top: 92px;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Masjid Nurul Iman</title>
    
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

    <style>
        .bg-pattern {
            background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');
        }
    </style>
    @yield('extra-css')
</head>
<body class="bg-islamic-bg text-gray-800 font-sans antialiased overflow-x-hidden">

    @include('partials.navbar')

    <main class="pt-[80px] md:pt-[92px]">
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('extra-js')
</body>
</html>