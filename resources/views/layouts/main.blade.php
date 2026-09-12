<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden" style="scroll-padding-top: 92px;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Masjid Nurul Iman</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap"></noscript>
    
    <!-- Defer FontAwesome non-critical CSS -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-pattern {
            background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');
        }
    </style>
    @yield('extra-css')
</head>
<body class="bg-islamic-bg text-gray-800 font-sans antialiased overflow-x-hidden">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('extra-js')
</body>
</html>