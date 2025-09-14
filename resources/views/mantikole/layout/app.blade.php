<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Desa Mantikole</title>

    {{-- 1. Script untuk memuat Tailwind CSS dari CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- 2. Script untuk Alpine.js (jika masih digunakan) --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- 3. Link untuk memuat font Poppins dari Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    {{-- 4. Konfigurasi agar Tailwind CDN menggunakan font Poppins --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="font-sans pt-9">
    @include('mantikole.layout.navbar')

    <main>
        @yield('content')
    </main>

    @include('mantikole.layout.footer')
</body>

</html>