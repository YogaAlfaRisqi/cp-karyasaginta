<!-- Navbar -->
<nav x-data="{ open: false }" class="backdrop-blur-md bg-white/50 text-black fixed top-0 left-0 w-full z-50 px-4">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="flex items-center justify-between h-20">
            <div class="flex items-center space-x-12">
                <!-- Logo -->
                <div class="flex flex-col items-center mr-4 pb-2">
                    <img src="images/Logo.png" alt="Logo CV Karya Saginta" class="w-15 h-15 mb-0 object-contain" />
                    <a href="/" class="text-sm font-poppins font-medium leading-tight text-center text-green-700">
                        CV Karya Saginta
                    </a>
                </div>

                <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-8 font-poppins font-normal">
                    <a href="/" class="relative text-green-700 font-medium after:absolute after:bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-green-700">
                        Beranda
                    </a>
                    <a href="tentang-kami\tentangKami" class="hover:text-green-700 transition">Tentang Kami</a>
                    <a href="produk" class="hover:text-green-700 transition">Lihat Produk</a>
                    <a href="layanan" class="hover:text-green-700 transition">Lihat Layanan</a>
                    <a href="sertifikasi" class="hover:text-green-700 transition">Sertifikasi</a>
                </div>


            </div>


            <div class="flex items-center space-x-4 ml-auto">
                <div class="hidden md:flex flex-col items-end">
                    <a href="https://wa.me/628126527016" target="_blank"
                        class="text-sm text-green-700 hover:underline">
                        +62 812 6527 016
                    </a>
                    <h6 class="font-poppins text-xs">Kontak Bisnis</h6>
                </div>

                <!-- Hamburger (Mobile Only) -->
                <button @click="open = !open" class="md:hidden focus:outline-none">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4"
        class="md:hidden w-full px-4 pt-4 pb-6 space-y-3 font-poppins text-sm">
        <a href="/" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Beranda</a>
        <a href="#tentang" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Tentang</a>
        <a href="#produk" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Produk</a>
        <a href="#layanan" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Layanan</a>
        <a href="#sertifikasi" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Sertifikasi</a>
        <div class="border-t">
            <div class="mt-2 flex flex-row space-x-6">
                <a href="https://wa.me/628126527016" class="block text-green-700 mt-2 hover:underline">+62 812 6527 016</a>
                <a href="karyasaginta@gmail.com" class="block text-green-700 mt-2 hover:underline">karyasaginta@gmail.com</a>
            </div>
        </div>
    </div>
</nav>