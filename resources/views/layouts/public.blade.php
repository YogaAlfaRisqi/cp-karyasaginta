<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'CV Karya Saginta' }}</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-x..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tambahkan ini di <head> -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Scripts -->
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<!-- sebelum </body> -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init({
            duration: 800,
            once: true,
        });
    });
</script>

<body class="bg-white text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    @include('components.call-button')

    {{-- Footer --}}    
    @include('components.footer')

    @include('components.floating-back-top')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>