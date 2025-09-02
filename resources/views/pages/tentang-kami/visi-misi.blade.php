@extends('layouts.public')

@section('content')

<x-banner-section
    title="Visi Misi dan Nilai Perusahaan"
    subtitle="Mengenal lebih dekat visi dan misi kami"
    image="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1600&q=80"
    height="h-80 lg:h-[50vh]" />


<section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-green-800 mb-10">Visi & Misi Kami</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Card Visi -->
            <div class="bg-green-50 rounded-lg shadow hover:shadow-md transition p-5 border border-green-100">
                <div class="flex items-center mb-4 justify-center">
                    <h3 class="text-xl font-semibold text-green-700 ">Visi</h3>
                </div>
                <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                    Menjadi perusahaan terpercaya dan terdepan dalam penyediaan bibit unggul serta pengembangan pertanian berkelanjutan di Indonesia.
                </p>
            </div>

            <!-- Card Misi -->
            <div class="bg-green-50 rounded-lg shadow hover:shadow-md transition p-5 border border-green-100">
                <div class="flex items-center mb-4 justify-center">
                    <h3 class="text-xl font-semibold text-green-700">Misi</h3>
                </div>
                <ul class="list-disc list-inside text-gray-700 text-sm md:text-base space-y-2">
                    <li>Menyediakan bibit berkualitas tinggi dan tersertifikasi.</li>
                    <li>Mendukung proyek penghijauan dan konservasi.</li>
                    <li>Membangun kemitraan dengan petani, pemerintah, dan swasta.</li>
                    <li>Mengedepankan pelayanan prima dan berkelanjutan.</li>
                </ul>
            </div>

        </div>
        <!-- Nilai-nilai Perusahaan -->
        <div class="pt-5 ">
            <h3 class="text-xl font-semibold text-green-700 mb-6 text-center">Nilai-Nilai Perusahaan</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1: Integritas -->
                <div class="bg-green-50 rounded-lg shadow hover:shadow-md transition p-5 border border-green-100">
                    <h4 class="text-green-800 font-semibold text-lg mb-2">Integritas</h4>
                    <p class="text-sm text-gray-700">Menjaga kepercayaan dan kualitas dalam setiap layanan dan produk.</p>
                </div>

                <!-- Card 2: Kualitas -->
                <div class="bg-green-50 rounded-lg shadow hover:shadow-md transition p-5 border border-green-100">
                    <h4 class="text-green-800 font-semibold text-lg mb-2">Kualitas</h4>
                    <p class="text-sm text-gray-700">Produk bibit unggul kami telah melalui seleksi dan sertifikasi ketat.</p>
                </div>

                <!-- Card 3: Keberlanjutan -->
                <div class="bg-green-50 rounded-lg shadow hover:shadow-md transition p-5 border border-green-100">
                    <h4 class="text-green-800 font-semibold text-lg mb-2">Keberlanjutan</h4>
                    <p class="text-sm text-gray-700">Mendukung pertanian ramah lingkungan dan reboisasi jangka panjang.</p>
                </div>

            </div>
        </div>

    </div>



</section>




@endsection