<section
    id="splashScreen"
    class="splash-screen"
    x-data="splashScreen()"
    x-init="start()"
    x-show="visible"
    x-transition.opacity.duration.400ms
    x-cloak
>
    <div class="splash-logo">
        <img 
            src="{{ asset('images/Logo.webp') }}"
            width="112"
            height="112"
            alt="{{ $alt ?? 'App Logo' }}"
            decoding="async"
            fetchpriority="high"
            class="w-28 h-28 mx-auto"
        >

        @if(isset($title))
            <h1 class="mt-4 text-xl font-bold text-gray-800 text-center">
                {{ $title }}
            </h1>
        @endif
    </div>

    {{-- Inject styles into stack --}}
    @pushOnce('styles')
        <style>
            .splash-screen {
                position: fixed;
                inset: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #ffffff;
                z-index: 9999;
            }

            .splash-logo {
                animation: splashPulse 2s ease-in-out infinite;
                text-align: center;
            }

            @keyframes splashPulse {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.5; }
            }
        </style>
    @endPushOnce

    {{-- Inject Alpine --}}
    @pushOnce('scripts')
        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("splashScreen", () => ({
                    visible: true,

                    start() {
                        requestAnimationFrame(() => {
                            this.fadeOut();
                        });

                        setTimeout(() => {
                            if (this.visible) this.fadeOut();
                        }, 2000);
                    },

                    fadeOut() {
                        this.visible = false;
                    }
                }));
            });
        </script>
    @endPushOnce
</section>
