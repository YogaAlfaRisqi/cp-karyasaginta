<nav
    class=" backdrop-blur-md bg-white/50 text-black transition-all duration-500 ease-in-out"
    :class="scrolled ? 'shadow-lg' : ''">
    <!-- isi navbar kamu -->
    <div class="max-w-6xl lg:max-w-7xl xl:max-w-7xl px-4 sm:px-6 lg:px-4 mx-auto">
        <div class="flex items-center justify-between h-25">
            <div class="flex items-center space-x-5 md:space-x-4">
                <!-- Logo -->
                <div class="flex flex-col items-center mr-4 pb-2">
                    <a href="/" class="flex flex-col items-center">
                        <img src="{{ asset('images/Logo.webp') }}"
                            alt="Logo CV Karya Saginta"
                            class="w-[60px] h-[60px] mb-0 object-contain cursor-pointer"
                            width="60" height="60"
                            loading="eager"
                            fetchpriority="high" />

                        <span class="text-sm font-poppins font-medium leading-tight text-center text-green-700">
                            CV Karya Saginta
                        </span>
                    </a>
                </div>


                <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-8 md:space-x-5 font-poppins font-normal">

                    <!-- Dropdown Tentang Kami -->
                    <div class="relative group">
                        <a href="{{ route('tentangkami.index') }}"
                            class="flex items-center gap-1 {{ request()->routeIs('tentangkami.*') ? 'text-green-700 font-semibold' : 'text-gray-700 hover:text-green-700' }} transition">
                            Tentang Kami
                            <!-- Icon panah kecil -->
                            <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transform transition duration-200 z-50">
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="{{ route('tentangkami.index') }}"
                                        class="block px-4 py-2 hover:bg-green-50 hover:text-green-700 {{ request()->routeIs('tentangkami.index') ? 'text-green-700 font-medium' : '' }}">
                                        Tentang
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tentangkami.visiMisi') }}"
                                        class="block px-4 py-2 hover:bg-green-50 hover:text-green-700 {{ request()->routeIs('tentangkami.visiMisi') ? 'text-green-700 font-medium' : '' }}">
                                        Visi, Misi & Nilai
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tentangkami.gallery') }}"
                                        class="block px-4 py-2 hover:bg-green-50 hover:text-green-700 {{ request()->routeIs('tentangkami.gallery') ? 'text-green-700 font-medium' : '' }}">
                                        Galeri Kegiatan
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <!-- Lihat Produk -->
                    <a href="{{ route('produk') }}"
                        class="relative {{ request()->routeIs('produk') ? 'text-green-700 font-semibold' : 'text-gray-700 hover:text-green-700' }} group transition">
                        Produk
                        <span class="absolute left-0 -bottom-1 w-full h-[2px] bg-green-700 
                        {{ request()->routeIs('produk') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}
                        transition-transform duration-500 ease-in-out origin-left"></span>
                    </a>

                    <!-- Lihat Layanan -->
                    <a href="{{ route('layanan') }}"
                        class="relative {{ request()->routeIs('layanan') ? 'text-green-700 font-semibold' : 'text-gray-700 hover:text-green-700' }} group transition">
                        Layanan
                        <span class="absolute left-0 -bottom-1 w-full h-[2px] bg-green-700 
                        {{ request()->routeIs('layanan') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}
                        transition-transform duration-500 ease-in-out origin-left"></span>
                    </a>


                    <!-- Pengalaman Projek -->
                    <a href="{{ route('experience.index') }}"
                        class="relative {{ request()->routeIs('experience.*') ? 'text-green-700 font-semibold' : 'text-gray-700 hover:text-green-700' }} group transition">
                        Pengalaman
                        <span class="absolute left-0 -bottom-1 w-full h-[2px] bg-green-700 
                        {{ request()->routeIs('experience.*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}
                        transition-transform duration-500 ease-in-out origin-left"></span>
                    </a>


                    <a href="{{ route('contact') }}"
                        class="relative {{ request()->routeIs('contact') ? 'text-green-700 font-semibold' : 'text-gray-700 hover:text-green-700' }} group transition">
                        Kontak
                        <span class="absolute left-0 -bottom-1 w-full h-[2px] bg-green-700 
                        {{ request()->routeIs('contact') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}
                        transition-transform duration-500 ease-in-out origin-left"></span>
                    </a>
                </div>
            </div>

            <div class="flex items-center space-x-4 ml-auto">
                <!-- Kontak + Dropdown Jam -->
                <div class="hidden md:flex items-center space-x-3 relative">
                    <!-- Nomor Kontak -->
                    <div class="text-right">
                        <a href="https://wa.me/628126527016" target="_blank"
                            class="text-sm text-green-700 font-semibold hover:underline">
                            +62 812 6527 016
                        </a>
                        <div class="text-xs text-gray-600 font-poppins">Kontak Bisnis</div>
                    </div>

                    <!-- Dropdown Icon -->
                    <div class="relative group">
                        <!-- Icon Jam (Heroicons Clock) -->
                        <button class="text-gray-600 hover:text-green-700 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <div class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-md opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 transition-all duration-200 z-50 pointer-events-none group-hover:pointer-events-auto">
                            <div class="p-3 text-sm text-gray-700">
                                <strong>Jam Operasional:</strong><br>
                                Senin – Jumat<br>
                                09.00 – 16.00 WIB
                            </div>
                        </div>
                    </div>
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
        <a href="{{route('tentangkami.index')}}" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Tentang</a>
        <a href="{{route('produk')}}" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Produk</a>
        <a href="{{route('layanan')}}" class="block text-gray-700 hover:bg-green-700 hover:text-white transition p-2 rounded-sm">Layanan</a>

        <div class="border-t">
            <div class="mt-2 flex flex-row space-x-6">
                <a href="https://wa.me/628126527016" class="block text-green-700 mt-2 hover:underline">+62 812 6527 016</a>
                <a href="karyasaginta@gmail.com" class="block text-green-700 mt-2 hover:underline">karyasaginta@gmail.com</a>
            </div>
        </div>
    </div>
</nav>