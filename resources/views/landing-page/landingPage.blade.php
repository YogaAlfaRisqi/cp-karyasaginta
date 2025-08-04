@extends('layouts.public')

@section('content')
{{-- Hero Section --}}
<section class="w-full bg-gray/50   flex flex-col items-center text-center pt-6 md:pt-8 lg:pt-10 font-poppins md:min-h-screen">

    <div class="max-w-6xl mx-auto px-4">
        {{-- Judul --}}
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-green-900 leading-tight mb-4"
            data-aos="fade-up" data-aos-duration="1000">
            Tumbuh Bersama <br /> Solusi dan Layanan <br />
            <span class="text-green-600">CV Karya Saginta</span>
        </h1>

        {{-- Deskripsi --}}
        <p class="text-sm md:text-lg text-gray-700 font-normal mb-6"
            data-aos="fade-right" data-aos-duration="1000">
            Penyedia bibit unggul untuk pertanian, perkebunan, dan kehutanan.
        </p>

        {{-- Tombol --}}
        <div class="flex justify-center gap-3 flex-wrap mb-4" data-aos="fade-up" data-aos-delay="800">
            <a href="https://wa.me/628126527016" target="_blank"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 text-sm sm:px-6 sm:py-3 sm:text-base rounded-md font-medium transition">
                Hubungi Sekarang →
            </a>
            <a href="#produk"
                class="text-green-600 hover:bg-green-100 rounded-md px-4 py-2 text-sm sm:px-6 sm:py-3 sm:text-base font-medium">
                Lihat Layanan
            </a>
        </div>
    </div>

    {{-- Gambar Full Width --}}
    <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/cv-karya saginta3.png') }}" alt="CV Karya Saginta"
            class="w-full h-48 sm:h-64 md:h-80 lg:h-[450px] xl:h-[500px] 
                   object-cover md:object-contain rounded-none" />
    </div>

</section>


<section class="bg-white text-black py-12 px-6 font-poppins relative" data-aos="zoom-out-left" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <h4 class="text-sm font-medium text-green-600 uppercase mb-2">Tentang Kami</h4>
        <div class="flex items-center space-x-3 mb-4">
            <img src="images/Logo.png" alt="Logo CV Karya Saginta" class="w-12 h-12 object-contain" />
            <h2 class="text-2xl sm:text-3xl font-bold">CV Karya Saginta</h2>
        </div>

        <!-- Deskripsi -->
        <p class="text-black/70 max-w-3xl mb-6 leading-relaxed">
            Merupakan perusahaan yang bergerak dalam bidang pengadaan bibit untuk pertanian, perkebunan, maupun kehutanan,
            serta pembibitan tanaman untuk program reboisasi termasuk tanaman hortikultura.
        </p>

        <!-- Layanan List -->
        @php
        $layanan = [
        [
        'title' => 'Pertanian',
        'list' => [
        'Penyediaan bibit hortikultura',
        'Distribusi bibit pertanian & kehutanan',
        'Jaringan pemasaran nasional'
        ]
        ],
        [
        'title' => 'Perkebunan',
        'list' => [
        'Penyediaan bibit perkebunan',
        'Distribusi bibit unggul',
        'Pendampingan petani & mitra'
        ]
        ],  
        [
        'title' => 'Kehutanan',
        'list' => [
        'Pembuatan bibit tanaman hutan',
        'Dukungan program penghijauan',
        'Kolaborasi dengan lembaga pemerintah'
        ]
        ],
        [
        'title' => 'Program Reboisasi',
        'list' => [
        'Pembuatan bibit tanaman keras',
        'Program reboisasi berkelanjutan',
        'Penghijauan kawasan kritis'
        ]
        ]
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @foreach ($layanan as $i => $item)
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition"
                data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <h3 class="text-lg font-semibold mb-3 text-gray-900 text-center">{{ $item['title'] }}</h3>
                <ul class="space-y-2 list-disc list-inside text-sm leading-relaxed">
                    @foreach ($item['list'] as $point)
                    <li>{{ $point }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <!-- Statistik -->
        @php
        $stats = [
        ['value' => '3+', 'label' => 'Tahun Pengalaman'],
        ['value' => '100+', 'label' => 'Klien Terlayani'],
        ['value' => '1K+', 'label' => 'Bibit Tersalurkan'],
        ['value' => '✔', 'label' => 'Tersertifikasi Resmi'],
        ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center mb-6">
            @foreach ($stats as $i => $stat)
            <div data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                <p class="text-2xl font-bold text-green-600">{{ $stat['value'] }}</p>
                <p class="text-sm text-gray-600">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="mt-8 text-center">
            <a href="tentangkami" class="text-green-900 hover:text-green-700 py-2 font-medium transition">
                Lihat Selengkapnya →
            </a>
        </div>
    </div>
</section>




<section class="relative bg-white py-20 px-6 border-t border-gray-200 font-poppins" data-aos="fade-up" data-aos-duration="1000">
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-b from-white to-green-50"></div>

    <div class="relative max-w-6xl mx-auto z-10">
        <!-- Header -->
        <div class="mb-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-3" data-aos="fade-up">
                Sertifikasi
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-3xl mx-auto"
                data-aos="fade-up" data-aos-delay="100">
                Legalitas dan kepercayaan yang kami bangun melalui sertifikasi resmi dari lembaga terkait.
            </p>
        </div>

        <!-- Cards -->
        @php
        $certificates = [
        [
        'title' => 'Sertifikat Pengedar Benih Hortikultura',
        'desc' => 'CV. Karya Saginta telah memperoleh sertifikasi resmi sebagai Pengedar Benih Hortikultura yang menjamin legalitas dan mutu distribusi benih.'
        ],
        [
        'title' => 'Sertifikat Produsen Benih Hortikultura',
        'desc' => 'Kami juga memiliki sertifikat sebagai Produsen Benih Hortikultura yang menunjukkan kapabilitas produksi bibit unggul dan berkualitas.'
        ]
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            @foreach ($certificates as $i => $cert)
            <div class="bg-white border border-green-100 rounded-xl p-5 flex gap-4 items-start hover:border-green-300 transition"
                data-aos="fade-up" data-aos-delay="{{ $i * 150 }}">
                <div class="flex-shrink-0 w-10 h-10 bg-green-100 text-green-600 flex items-center justify-center rounded-full text-xl">
                    ✔
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-1">{{ $cert['title'] }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $cert['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Footer -->
        <p class="text-gray-700 text-base md:text-lg leading-relaxed max-w-4xl mx-auto text-center"
            data-aos="fade-up" data-aos-delay="300">
            Dengan sertifikasi ini, kami memastikan penyediaan bibit unggul secara legal, terpercaya, dan berkualitas tinggi.
        </p>
    </div>
</section>


<section id="produk" class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-2">Produk Bibit Unggul</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
                Temukan beragam bibit unggulan berkualitas tinggi untuk pertanian, perkebunan, dan kehutanan.
            </p>
        </div>

        <!-- Grid Produk -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @php
            $produk = [
            ['nama' => 'Bibit Alpukat', 'img' => 'alpukat.png', 'kategori' => 'Hortikultura'],
            ['nama' => 'Bibit Durian', 'img' => 'durian.png', 'kategori' => 'Perkebunan'],
            ['nama' => 'Bibit Aren', 'img' => 'aren.png', 'kategori' => 'Kehutanan'],
            ['nama' => 'Bibit Pinang', 'img' => 'pinang.png', 'kategori' => 'Perkebunan'],
            ['nama' => 'Bibit Kopi', 'img' => 'kopi.png', 'kategori' => 'Pertanian'],
            ['nama' => 'Bibit Petai', 'img' => 'petai.png', 'kategori' => 'Hortikultura'],
            ['nama' => 'Bibit Jengkol', 'img' => 'jengkol.png', 'kategori' => 'Hortikultura'],
            ['nama' => 'Bibit Bambu Kuning', 'img' => 'bambu.png', 'kategori' => 'Kehutanan'],
            ];
            @endphp

            @foreach ($produk as $item)
            <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 overflow-hidden group" data-aos="zoom-in">
                <!-- Gambar -->
                <div class="w-full h-40 bg-gray-50 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/buah/' . $item['img']) }}" alt="{{ $item['nama'] }}"
                        class="w-24 h-24 object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <!-- Info Produk -->
                <div class="p-4 text-center">
                    <h3 class="text-base font-semibold text-gray-800">{{ $item['nama'] }}</h3>
                    <p class="text-xs text-green-600 mt-1">{{ $item['kategori'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-8">
            <a href="/produk" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition">
                Lihat Semua Produk →
            </a>
        </div>
    </div>
</section>


<section class="px-2 py-20 bg-gradient-to-b from-white via-white to-green-50" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">

        <!-- Tabs -->
        <div class="flex space-x-4 mb-6">
            <button class="px-4 py-2 rounded-2xl font-semibold bg-green-600 text-white">
                Artikel
            </button>
            <button class="px-4 py-2 border border-gray-300 rounded-2xl text-gray-700 hover:bg-gray-100">
                Info Budi Daya
            </button>
        </div>

        <!-- Tambahkan Alpine.js untuk interaksi -->
        <div x-data="{ scrollPos: 0 }" class="relative">
            <!-- Slider Controls -->
            <div class="flex justify-end items-center mb-4 space-x-2">
                <button @click="$refs.slider.scrollBy({ left: -300, behavior: 'smooth' })"
                    class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-400 hover:bg-green-400 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="$refs.slider.scrollBy({ left: 300, behavior: 'smooth' })"
                    class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-400 hover:bg-gray-100 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Slider Artikel -->
            <div x-ref="slider" class="flex gap-6 snap-x snap-mandatory scroll-smooth overflow-hidden">
                @foreach ($articles as $article)
                <div class="min-w-[280px] md:min-w-[300px] max-w-sm snap-start flex-shrink-0 bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}"
                            class="w-full h-52 object-cover">
                        <div class="absolute inset-y-0 right-0 w-1/3 bg-green-800 bg-opacity-40 text-white text-right p-4 text-sm font-light flex flex-col justify-center space-y-1">
                            @foreach ($article['tags'] as $tag)
                            <span>{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            {{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d F Y') }}
                            • {{ $article['read_time'] }} menit baca
                        </div>
                        <h3 class="font-bold text-lg text-gray-900 leading-tight mb-1">
                            {{ $article['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600">Penulis: {{ $article['author'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>


<style>
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .scroll-marquee {
        animation: scroll-left 35s linear infinite;
    }

    .scroll-marquee:hover {
        animation-play-state: paused;
    }
</style>

<!-- <section id="produk" class="bg-gradient-to-b from-green-50 to-white py-16 text-gray-800 font-poppins overflow-hidden">
    <div class="max-w-full mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-green-700">Jenis Bibit Unggul</h2>
            <p class="text-gray-600 text-sm mt-2">Temukan beragam bibit unggulan berkualitas tinggi</p>
        </div>

        <div class="overflow-hidden relative w-full">
            <div class="flex whitespace-nowrap scroll-marquee">
                @php
                $bibit = [
                ['nama' => 'Alpukat', 'img' => 'alpukat.png'],
                ['nama' => 'Durian', 'img' => 'durian.png'],
                ['nama' => 'Aren', 'img' => 'aren.png'],
                ['nama' => 'Pinang', 'img' => 'pinang.png'],
                ['nama' => 'Mangga', 'img' => 'mangga.png'],
                ['nama' => 'Duku', 'img' => 'duku.png'],
                ['nama' => 'Jengkol', 'img' => 'jengkol.png'],
                ['nama' => 'Petai', 'img' => 'petai.png'],
                ['nama' => 'Kopi', 'img' => 'kopi.png'],
                ['nama' => 'Bambu Kuning', 'img' => 'bambu.png'],
                ['nama' => 'Durian Musang King', 'img' => 'musangking.png'],
                ];
                $colors = ['bg-green-100', 'bg-yellow-100', 'bg-emerald-100', 'bg-lime-100', 'bg-teal-100', 'bg-blue-100'];
                @endphp

                @foreach (array_merge($bibit, $bibit) as $i => $item)
                <div class="min-w-[180px] max-w-xs mx-2 px-4 py-3 shadow-md border rounded-xl {{ $colors[$i % count($colors)] }} flex flex-col items-center justify-center text-center hover:shadow-lg transition">
                    <div class="w-12 h-12 mb-2 rounded-full bg-white flex items-center justify-center shadow-inner overflow-hidden">
                        <img src="{{ asset('images/buah/' . $item['img']) }}" alt="{{ $item['nama'] }}" class="w-full h-full object-contain">
                    </div>
                    <span class="font-medium text-gray-800 text-sm">{{ $item['nama'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> -->

{{-- SECTION: Layanan Pengadaan --}}
<section class="bg-gradient-to-b from-white to-green-50 text-green-800 py-16 px-4 font-poppins" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto">

        <!-- Header -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold mb-2">Layanan Kami</h2>
            <p class="text-black max-w-2xl">
                Explore our portfolio of innovative projects that showcase our expertise in creating cutting-edge solutions
                for businesses worldwide.
            </p>
        </div>

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
            @php
            $layanan = [
            ['icon' => '🌱', 'title' => 'Pembibitan', 'desc' => 'Layanan pembibitan mencakup penyemaian hingga perawatan bibit berkualitas tinggi untuk mendukung program reboisasi, pertanian, dan hortikultura.'],
            ['icon' => '🌾', 'title' => 'Pertanian', 'desc' => 'Kami menyediakan solusi pertanian terpadu seperti pengolahan lahan, penyediaan benih unggul, hingga distribusi hasil pertanian yang efisien.'],
            ['icon' => '🌳', 'title' => 'Kehutanan', 'desc' => 'Mendukung pelestarian hutan dengan penyediaan bibit pohon keras, program penghijauan, dan kerja sama reboisasi bersama pemerintah dan mitra.'],
            ];
            @endphp

            @foreach ($layanan as $item)
            <div class="bg-green-700 rounded-lg p-6 border border-gray-700 shadow-sm transition-transform transform hover:rotate-[1deg] hover:shadow-md">
                <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                <h3 class="text-lg text-white font-semibold mb-2">{{ $item['title'] }}</h3>
                <p class="text-sm text-white mb-4">{{ $item['desc'] }}</p>
                <a href="#" class="text-yellow-400 text-sm font-semibold hover:underline">View Layanan</a>
            </div>
            @endforeach
        </div>

        <!-- Button -->
        <div class="text-center">
            <a href="#" class="inline-flex items-center space-x-2 text-sm text-black border border-gray-600 px-5 py-2 rounded-full hover:bg-white hover:text-black transition">
                <span>Explore Layanan</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</section>

<section id="klien" class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins" data-aos="fade-right" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-2">Client Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
                CV Karya Saginta telah dipercaya oleh berbagai instansi dan perusahaan dalam penyediaan bibit unggul dan solusi kehutanan yang berkelanjutan.
            </p>
        </div>

        <!-- Client Cards -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @php
            $clients = [
            ['logo' => 'ks.jpg', 'name' => 'Kementerian Pertanian'],
            ['logo' => 'ks.jpg', 'name' => 'Perhutani'],
            ['logo' => 'ks.jpg', 'name' => 'Dinas Kehutanan'],
            ['logo' => 'ks.jpg', 'name' => 'BUMN Perkebunan'],
            ['logo' => 'ks.jpg', 'name' => 'Pemerintah Daerah'],
            ['logo' => 'ks.jpg', 'name' => 'Perusahaan Swasta'],
            ['logo' => 'ks.jpg', 'name' => 'Universitas Mitra'],
            ['logo' => 'ks.jpg', 'name' => 'Komunitas Tani'],
            ];
            @endphp

            @foreach ($clients as $client)
            <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition text-center">
                <div class="h-20 mb-3 flex items-center justify-center">
                    <img src="{{ asset('images/' . $client['logo']) }}" alt="{{ $client['name'] }}" class="h-full object-contain" />
                </div>
                <h4 class="text-sm text-gray-700 font-medium">{{ $client['name'] }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section id="testimoni" class="bg-gradient-to-b from-green-50 to-white py-16 font-poppins text-gray-800" data-aos="fade-down" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-2">Testimoni Client</h2>
            <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                Pendapat mitra kami tentang pelayanan dan kualitas bibit dari CV Karya Saginta.
            </p>
        </div>

        <!-- Testimonials -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @php
            $testimonials = [
            [
            'name' => 'Ir. Suryanto',
            'role' => 'Dinas Kehutanan Karo',
            'photo' => 'client1.jpg',
            'message' => 'Pelayanan cepat dan bibit yang kami terima sangat berkualitas. Cocok untuk kebutuhan reboisasi kami.'
            ],
            [
            'name' => 'Budi Santoso',
            'role' => 'Petani Mitra',
            'photo' => 'client2.jpg',
            'message' => 'Sudah 3 kali order bibit durian dan alpukat. Semua tumbuh subur dan sehat!'
            ],
            [
            'name' => 'Dr. Maya Lubis',
            'role' => 'Universitas Sumatera',
            'photo' => 'client3.jpg',
            'message' => 'Mereka sangat profesional dan mendukung riset kami dengan penyediaan bibit unggul berkualitas tinggi.'
            ],
            ];
            @endphp

            @foreach ($testimonials as $t)
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                <div class="flex items-center space-x-4 mb-4">
                    <img src="{{ asset('images/testimoni/' . $t['photo']) }}" alt="{{ $t['name'] }}" class="w-14 h-14 rounded-full object-cover">
                    <div>
                        <h4 class="font-semibold text-gray-800">{{ $t['name'] }}</h4>
                        <p class="text-sm text-gray-500">{{ $t['role'] }}</p>
                    </div>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed italic">“{{ $t['message'] }}”</p>
            </div>
            @endforeach

        </div>

    </div>
</section>







@endsection