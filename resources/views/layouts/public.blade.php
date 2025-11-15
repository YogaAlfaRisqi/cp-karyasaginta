<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'CV Karya Saginta' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800"
    x-data="{ loading: true }"
    x-init="window.addEventListener('load', () => loading = false)">

    <!-- Splash Screen -->
    <div x-show="loading"
        x-transition.opacity.duration.700ms
        class="fixed inset-0 flex items-center justify-center bg-white z-50">

        <div class="text-center animate-pulse">
            <img src="{{ asset('images/Logo.webp') }}"
                alt="Logo CV Karya Saginta"
                class="w-28 h-28 mx-auto"
                width="112"
                height="112"
                decoding="async"
                fetchpriority="high">

            <h1 class="mt-4 text-xl font-bold text-gray-800">CV Karya Saginta</h1>
        </div>
    </div>

    <!-- Header -->
    <header x-data="{ scrolled: false, open: false }"
        @scroll.window="scrolled = (window.scrollY > 50)"
        class="fixed top-0 left-0 w-full z-40 transition-all duration-500 ease-in-out"
        x-show="!loading"
        x-transition.opacity.duration.700ms>

        <div class="overflow-visible transition-all duration-500 ease-in-out bg-white"
            :class="scrolled ? 'max-h-40 shadow-lg' : 'max-h-50'">

            @include('components.topbar')
            @include('components.navbar')
        </div>
    </header>

    <main class="min-h-screen pt-28"
        x-show="!loading"
        x-transition.opacity.duration.700ms>
        @yield('content')
    </main>

    @include('components.call-button')

    <footer x-show="!loading" x-transition.opacity.duration.700ms>
        @include('components.footer')
    </footer>

    @include('components.floating-back-top')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 800,
                once: true
            });
        });
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireScripts
</body>

</html>
