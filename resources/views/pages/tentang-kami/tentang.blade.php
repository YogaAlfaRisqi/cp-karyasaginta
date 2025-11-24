@extends('layouts.public')

@section('content')

{{-- HERO SECTION --}}
<section class="relative h-[75vh] w-full overflow-hidden">
    <img 
        src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=2000&q=80"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Hero Image">

    <div class="absolute inset-0 bg-green-900/60"></div>

    <div class="relative max-w-7xl mx-auto h-full flex items-center px-6">
        <div class="text-white max-w-xl">
            <p class="uppercase tracking-wide text-green-200">Welcome to Karya Saginta</p>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                Trusted by Thousands,<br>
                Backed by Quality Bibit Unggul
            </h1>
            <p class="text-lg text-green-100 mb-6">
                Penyedia bibit unggul, bersertifikat, dan berlegalitas resmi untuk pertanian, kehutanan, dan reboisasi.
            </p>
            <a href="#about"
                class="px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg shadow transition">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
</section>

{{-- ABOUT + VALUES --}}
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

        {{-- LEFT TEXT --}}
        <div>
            <h4 class="text-sm text-green-600 uppercase mb-3">Our Profile</h4>
            <h2 class="text-3xl md:text-4xl font-bold text-green-800 mb-6">
                At the Heart of Indonesia’s Best Bibit Supplier
            </h2>

            <p class="text-gray-700 text-lg leading-relaxed mb-5">
                CV Karya Saginta adalah penyedia bibit unggul untuk pertanian, kehutanan, hortikultura,
                hingga program reboisasi skala besar. Dengan legalitas lengkap dan pengalaman lapangan,
                kami menjadi mitra tepercaya bagi pemerintah maupun swasta.
            </p>

            <p class="text-gray-700 text-lg leading-relaxed">
                Kami memastikan setiap bibit siap tanam, berkualitas, dan bersertifikasi.
            </p>
        </div>

        {{-- RIGHT VALUES GRID --}}
        <div class="grid grid-cols-2 gap-6">
            <div class="bg-green-50 p-6 rounded-xl shadow">
                <h3 class="font-semibold text-green-700 mb-2">🎯 Misi Kami</h3>
                <p class="text-gray-600 text-sm">Penyedia bibit unggul dan layanan berkualitas.</p>
            </div>

            <div class="bg-green-50 p-6 rounded-xl shadow">
                <h3 class="font-semibold text-green-700 mb-2">💡 Visi</h3>
                <p class="text-gray-600 text-sm">Menjadi pelopor penyedia bibit terpercaya di Indonesia.</p>
            </div>

            <div class="bg-green-50 p-6 rounded-xl shadow">
                <h3 class="font-semibold text-green-700 mb-2">🌱 Jangkauan</h3>
                <p class="text-gray-600 text-sm">Melayani proyek nasional hingga CSR perusahaan.</p>
            </div>

            <div class="bg-green-50 p-6 rounded-xl shadow">
                <h3 class="font-semibold text-green-700 mb-2">📞 Hubungi Kami</h3>
                <p class="text-gray-600 text-sm">0895-1234-5678</p>
            </div>
        </div>
    </div>
</section>

{{-- BRANDS SECTION --}}
<section class="py-20 bg-green-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <h4 class="text-sm text-green-600 uppercase mb-2">Our Brand</h4>
            <h2 class="text-3xl font-bold text-green-800">Meet the Company Behind the Growth</h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="/images/bg.jpeg" class="rounded-lg h-28 w-full object-cover mb-3">
                <h4 class="font-semibold text-green-700">Karya Saginta</h4>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="/images/bg.jpeg" class="rounded-lg h-28 w-full object-cover mb-3">
                <h4 class="font-semibold text-green-700">Tani Unggul</h4>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="/images/bg.jpeg" class="rounded-lg h-28 w-full object-cover mb-3">
                <h4 class="font-semibold text-green-700">Forest Magic</h4>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="/images/bg.jpeg" class="rounded-lg h-28 w-full object-cover mb-3">
                <h4 class="font-semibold text-green-700">Biscola</h4>
            </div>
        </div>
    </div>
</section>

{{-- MISSION & IMPACT --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        {{-- LEFT ICON CARDS --}}
        <div class="grid grid-cols-2 gap-6">
            <div class="p-6 bg-green-50 rounded-xl shadow">
                <h4 class="font-semibold text-green-700 mb-1">🌿 Nutrisi Tanaman</h4>
                <p class="text-gray-600 text-sm">Pemilihan bibit dengan nutrisi terbaik.</p>
            </div>

            <div class="p-6 bg-green-50 rounded-xl shadow">
                <h4 class="font-semibold text-green-700 mb-1">🏢 Komunitas</h4>
                <p class="text-gray-600 text-sm">Mendukung petani & pegiat lingkungan.</p>
            </div>

            <div class="p-6 bg-green-50 rounded-xl shadow">
                <h4 class="font-semibold text-green-700 mb-1">🌏 Sustainability</h4>
                <p class="text-gray-600 text-sm">Fokus program reboisasi & penghijauan.</p>
            </div>

            <div class="p-6 bg-green-50 rounded-xl shadow">
                <h4 class="font-semibold text-green-700 mb-1">🧑‍🤝‍🧑 Aksesibilitas</h4>
                <p class="text-gray-600 text-sm">Terjangkau, aman, & mudah diakses.</p>
            </div>
        </div>

        {{-- RIGHT IMAGE --}}
        <div>
            <img src="/images/bg.jpeg" class="w-full h-96 object-cover rounded-xl shadow-lg">
        </div>

    </div>
</section>

{{-- PRODUCTS --}}
<section class="py-20 bg-green-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <h4 class="text-sm text-green-600 uppercase mb-2">Our Products</h4>
            <h2 class="text-3xl font-bold text-green-800">Products You'll Love</h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">

            @foreach ($products as $p)
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="{{ Storage::url($p->thumbnail) }}" class="rounded-lg h-32 w-full object-cover mb-3">
                <h4 class="font-semibold text-green-700 mb-1">{{ $p->name }}</h4>
                <a href="#" class="text-green-600 text-sm font-semibold hover:underline">Lihat Detail</a>
            </div>
            @endforeach

        </div>

    </div>
</section>

@endsection
