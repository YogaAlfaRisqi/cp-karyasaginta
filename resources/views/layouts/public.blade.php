<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    {{-- SEO Meta Tags --}}
    <meta name="description" content="{{ $description ?? 'CV Karya Saginta - Solusi Terpercaya untuk Kebutuhan Anda' }}">
    <meta name="keywords" content="CV Karya Saginta, kontraktor, jasa bibit">
    <meta name="author" content="CV Karya Saginta">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $title ?? 'CV Karya Saginta' }}">
    <meta property="og:description" content="{{ $description ?? 'CV Karya Saginta - Solusi Terpercaya' }}">
    <meta property="og:image" content="{{ asset('images/Logo.webp') }}">
    <meta property="og:type" content="website">

    <title>{{ $title ?? 'CV Karya Saginta' }}</title>

    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://unpkg.com">

    <link rel="preload" href="{{ asset('images/Logo.webp') }}" as="image" type="image/webp">

    {{-- Favicon --}}
    <link rel="icon" type="image/webp" href="{{ asset('images/Logo.webp') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Font Awesome - Lazy Load --}}
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </noscript>

    <style>
        [x-cloak] { display: none !important; }
    </style>

    @livewireStyles
    @stack('styles')
</head>

<body class="bg-white text-gray-800 antialiased">

    {{-- Splash Screen - Pure JS (No Alpine) --}}
    <div 
        id="splashScreen"
        class="fixed inset-0 flex items-center justify-center bg-white z-[9999] transition-none"
        style="opacity: 1;"
    >
        <div class="text-center animate-pulse">
            <img 
                src="{{ asset('images/Logo.webp') }}"
                width="112"
                height="112"
                alt="CV Karya Saginta Logo"
                decoding="async"
                fetchpriority="high"
                class="w-28 h-28 mx-auto"
            >
            <h1 class="mt-4 text-xl font-bold text-gray-800">
                CV Karya Saginta
            </h1>
        </div>
    </div>

    {{-- Main App Container - Alpine --}}
    <div 
        x-data="{ 
            menuOpen: false, 
            scrolled: false,
            init() {
                window.addEventListener('scroll', () => {
                    this.scrolled = window.scrollY > 50;
                }, { passive: true });
            }
        }"
    >
        <header class="fixed top-0 left-0 w-full z-40 bg-white">
            @include('components.topbar')
            @include('components.navbar')
        </header>

        <main class="min-h-screen pt-28">
            @yield('content')
        </main>

        @include('components.call-button')
        @include('components.footer')
        @include('components.floating-back-top')
    </div>

    {{-- Livewire --}}
    @livewireScripts

    {{-- Splash Screen Handler - Pure JS --}}
    <script>
        (function() {
            const splash = document.getElementById('splashScreen');
            if (!splash) return;
            
            const hideSplash = () => {
                splash.style.opacity = '0';
                setTimeout(() => {
                    if (splash.parentNode) {
                        splash.parentNode.removeChild(splash);
                    }
                }, 400);
            };
            
            // Hide after load or 2s timeout
            if (document.readyState === 'complete') {
                setTimeout(hideSplash, 500);
            } else {
                window.addEventListener('load', () => setTimeout(hideSplash, 500), { once: true });
                setTimeout(hideSplash, 2000); // Fallback
            }
        })();
    </script>

    {{-- AOS - Lazy Load After Page Load --}}
    <script>
        window.addEventListener('load', function() {
            // Load AOS CSS
            const aosCSS = document.createElement('link');
            aosCSS.rel = 'stylesheet';
            aosCSS.href = 'https://unpkg.com/aos@2.3.4/dist/aos.css';
            document.head.appendChild(aosCSS);

            // Load AOS JS
            const aosJS = document.createElement('script');
            aosJS.src = 'https://unpkg.com/aos@2.3.4/dist/aos.js';
            aosJS.onload = function() {
                if (typeof AOS !== 'undefined') {
                    AOS.init({
                        duration: 800,
                        once: true,
                        offset: 50,
                        disable: 'mobile' // Optional: disable on mobile for better performance
                    });
                }
            };
            document.body.appendChild(aosJS);
        }, { once: true });
    </script>

    @stack('scripts')
</body>

</html>