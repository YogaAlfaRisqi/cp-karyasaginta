@extends('layouts.public')

@section('content')
    {{-- Banner Section --}}
    <x-banner-section
        title="Gallery"
        subtitle="Melihat Aktivitas dan Kegiatan Kami"
        image="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1600&q=80"
        height="h-80 lg:h-[50vh]" />

    {{-- Gallery Section --}}
    <section class="py-12 bg-white mb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Judul Section -->
            <div class="text-center mb-12">
                <h4 class="text-sm text-green-600 uppercase mb-2">Dokumentasi</h4>
                <h2 class="text-3xl sm:text-4xl font-bold text-green-800">Galeri Kegiatan & Produk</h2>
                <p class="mt-2 text-gray-600 text-base">Beberapa dokumentasi proyek, bibit, dan kegiatan lapangan kami.</p>
            </div>

            <!-- Grid Galeri -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="group relative bg-white rounded-lg shadow hover:shadow-lg overflow-hidden transition">
                    <img src="/images/galeri/bg.jpeg" alt="Penanaman Bibit"
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-green-700">Penanaman Bibit</h3>
                        <p class="text-sm text-gray-600 mt-1">Dokumentasi proses penanaman bibit unggul di lahan mitra kami.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative bg-white rounded-lg shadow hover:shadow-lg overflow-hidden transition">
                    <img src="/images/galeri/bg.jpeg" alt="Pelatihan Petani"
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-green-700">Pelatihan Petani</h3>
                        <p class="text-sm text-gray-600 mt-1">Sesi pelatihan mengenai teknik bercocok tanam yang berkelanjutan.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-white rounded-lg shadow hover:shadow-lg overflow-hidden transition">
                    <img src="/images/galeri/bg.jpeg" alt="Panen Raya"
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-green-700">Panen Raya</h3>
                        <p class="text-sm text-gray-600 mt-1">Suasana panen raya bersama mitra dan komunitas petani lokal.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="group relative bg-white rounded-lg shadow hover:shadow-lg overflow-hidden transition">
                    <img src="/images/galeri/bg.jpeg" alt="Produk Bibit Unggul"
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-green-700">Produk Bibit Unggul</h3>
                        <p class="text-sm text-gray-600 mt-1">Bibit unggul berkualitas tinggi yang siap dipasarkan.</p>
                    </div>
                </div>

                <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>
        </div>
        @include('pages.tentang-kami._pagination')
    </section>
    



@endsection
