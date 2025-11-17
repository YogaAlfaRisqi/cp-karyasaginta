<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    {{-- SEO Meta Tags --}}
    <meta name="description" content="{{ $description ?? 'CV Karya Saginta - Solusi Terpercaya untuk Kebutuhan Anda' }}">
    <meta name="keywords" content="CV Karya Saginta, kontraktor, jasa konstruksi">
    <meta name="author" content="CV Karya Saginta">
    
    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $title ?? 'CV Karya Saginta' }}">
    <meta property="og:description" content="{{ $description ?? 'CV Karya Saginta - Solusi Terpercaya' }}">
    <meta property="og:image" content="{{ asset('images/Logo.webp') }}">
    <meta property="og:type" content="website">
    
    <title>{{ $title ?? 'CV Karya Saginta' }}</title>
    
    {{-- Preconnect untuk resource eksternal --}}
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://unpkg.com">
    
    {{-- Preload Critical Resources --}}
    <link rel="preload" href="{{ asset('images/Logo.webp') }}" as="image" type="image/webp">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style">
    
    {{-- Favicon --}}
    <link rel="icon" type="image/webp" href="{{ asset('images/Logo.webp') }}">
    
    {{-- Stylesheets - Load critical first --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Font Awesome - Async Load --}}
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" 
          media="print" 
          onload="this.media='all'; this.onload=null;">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </noscript>
    
    {{-- AOS - Async Load --}}
    <link rel="stylesheet" 
          href="https://unpkg.com/aos@2.3.4/dist/aos.css" 
          media="print" 
          onload="this.media='all'; this.onload=null;">
    <noscript>
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    </noscript>
    
    {{-- Inline Critical CSS untuk Splash Screen --}}
    <style>
        /* Critical CSS - Splash Screen */
        .splash-screen {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }
        
        .splash-screen.fade-out {
            opacity: 0;
            pointer-events: none;
        }
        
        .splash-logo {
            text-align: center;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .5; }
        }
        
        /* Prevent layout shift */
        body { 
            margin: 0; 
            padding: 0;
            min-height: 100vh;
        }
        
        /* Hide content until Alpine loads */
        [x-cloak] { 
            display: none !important; 
        }
    </style>
    
    @livewireStyles
    @stack('styles')
</head>

<body class="bg-white text-gray-800 antialiased">
    
    {{-- Splash Screen - Pure JS untuk performa maksimal --}}
    <div id="splashScreen" class="splash-screen">
        <div class="splash-logo">
            <img src="{{ asset('images/Logo.webp') }}"
                alt="Logo CV Karya Saginta"
                width="112"
                height="112"
                class="w-28 h-28 mx-auto"
                decoding="async"
                fetchpriority="high">
            <h1 class="mt-4 text-xl font-bold text-gray-800">CV Karya Saginta</h1>
        </div>
    </div>

    {{-- Main Content --}}
    <div x-data="{ 
            scrolled: false, 
            open: false,
            showBackToTop: false 
         }"
         x-init="
            // Scroll handler dengan throttle
            let scrollTimer;
            window.addEventListener('scroll', () => {
                if (scrollTimer) clearTimeout(scrollTimer);
                scrollTimer = setTimeout(() => {
                    scrolled = window.scrollY > 50;
                    showBackToTop = window.scrollY > 300;
                }, 50);
            });
         "
         x-cloak>
        
        {{-- Header --}}
        <header class="fixed top-0 left-0 w-full z-40 transition-all duration-300 ease-in-out"
                :class="scrolled ? 'shadow-lg' : ''">
            <div class="bg-white transition-all duration-300"
                 :class="scrolled ? 'max-h-40' : 'max-h-50'">
                @include('components.topbar')
                @include('components.navbar')
            </div>
        </header>

        {{-- Main Content --}}
        <main class="min-h-screen pt-28">
            @yield('content')
        </main>

        {{-- Call Button --}}
        @include('components.call-button')

        {{-- Footer --}}
        <footer>
            @include('components.footer')
        </footer>

        {{-- Floating Back to Top --}}
        @include('components.floating-back-top')
    </div>

    {{-- Scripts - Load in optimal order --}}
    
    {{-- 1. Critical: Hide splash screen --}}
    <script>
        // Hide splash screen setelah page load
        window.addEventListener('load', function() {
            const splash = document.getElementById('splashScreen');
            splash.classList.add('fade-out');
            setTimeout(() => {
                splash.style.display = 'none';
            }, 700);
        });
        
        // Fallback: hide after 3 seconds
        setTimeout(() => {
            const splash = document.getElementById('splashScreen');
            if (splash) {
                splash.classList.add('fade-out');
                setTimeout(() => splash.style.display = 'none', 700);
            }
        }, 3000);
    </script>

    {{-- 2. Alpine.js - Load early tapi defer --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- 3. AOS - Load after Alpine --}}
    <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script defer>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 50,
                    delay: 100,
                    easing: 'ease-in-out',
                    disable: window.innerWidth < 768 // Disable di mobile untuk performa
                });
            }
        });
    </script>

    {{-- 4. Livewire - Load last --}}
    @livewireScripts
    
    {{-- 5. Custom scripts --}}
    @stack('scripts')
    
    {{-- Performance monitoring (optional - hanya development) --}}
    @if(config('app.debug'))
    <script>
        // Log performance metrics
        window.addEventListener('load', () => {
            setTimeout(() => {
                const perfData = performance.getEntriesByType('navigation')[0];
                console.log('Page Load Time:', perfData.loadEventEnd - perfData.fetchStart, 'ms');
                console.log('DOM Content Loaded:', perfData.domContentLoadedEventEnd - perfData.fetchStart, 'ms');
            }, 0);
        });
    </script>
    @endif
</body>

</html>