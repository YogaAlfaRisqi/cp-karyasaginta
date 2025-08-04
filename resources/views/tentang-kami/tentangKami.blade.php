@extends('layouts.public')

@section('content')

<!-- SECTION: Tentang CV -->
<section class="bg-gradient-to-b from-white via-green-50 to-white text-gray-800 py-16 font-poppins">
  <div class="max-w-6xl mx-auto px-4">

    <!-- Subjudul dan Heading -->
    <h4 class="text-sm text-green-600 uppercase mb-2">Tentang Kami</h4>
    <div class="flex items-center space-x-3 mb-4">
      <div class="text-3xl">🌱</div>
      <h2 class="text-3xl sm:text-4xl font-bold text-green-800">CV Karya Saginta</h2>
    </div>

    <!-- Deskripsi Utama -->
    <p class="text-gray-700 text-base leading-relaxed mb-6">
      CV Karya Saginta adalah perusahaan yang bergerak dalam pengadaan bibit unggul untuk kebutuhan pertanian, kehutanan, hortikultura, dan proyek reboisasi. Berbekal pengalaman lapangan dan sertifikasi resmi dari instansi terkait, kami hadir memberikan solusi terbaik bagi sektor hijau Indonesia.
    </p>

    <!-- Visi & Misi -->
    <div class="grid md:grid-cols-2 gap-8 mb-10">
      <div>
        <h3 class="text-xl font-semibold text-green-700 mb-2">Visi Kami</h3>
        <p class="text-gray-700 leading-relaxed">
          Menjadi perusahaan terpercaya dan terdepan dalam penyediaan bibit unggul serta pengembangan pertanian berkelanjutan di Indonesia.
        </p>
      </div>
      <div>
        <h3 class="text-xl font-semibold text-green-700 mb-2">Misi Kami</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
          <li>Menyediakan bibit berkualitas tinggi dan tersertifikasi.</li>
          <li>Mendukung proyek penghijauan dan konservasi.</li>
          <li>Membangun kemitraan dengan petani, pemerintah, dan swasta.</li>
          <li>Mengedepankan pelayanan prima dan berkelanjutan.</li>
        </ul>
      </div>
    </div>

    <!-- Nilai-nilai Perusahaan -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
      <h3 class="text-xl font-semibold text-green-700 mb-4 text-center">Nilai-Nilai Perusahaan</h3>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div>
          <h4 class="text-green-800 font-medium mb-1">Integritas</h4>
          <p class="text-sm text-gray-600">Menjaga kepercayaan dan kualitas dalam setiap layanan dan produk.</p>
        </div>
        <div>
          <h4 class="text-green-800 font-medium mb-1">Kualitas</h4>
          <p class="text-sm text-gray-600">Produk bibit unggul kami telah melalui seleksi dan sertifikasi ketat.</p>
        </div>
        <div>
          <h4 class="text-green-800 font-medium mb-1">Keberlanjutan</h4>
          <p class="text-sm text-gray-600">Mendukung pertanian ramah lingkungan dan reboisasi jangka panjang.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- SECTION: Rating & Testimoni -->
<section class="bg-gradient-to-r from-green-50 to-white py-16 text-gray-800 font-poppins">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-10">
      <h3 class="text-2xl font-bold text-green-800 mb-2">Apa Kata Mereka?</h3>
      <p class="text-gray-600 text-sm">Ulasan pelanggan dan mitra kami yang puas.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-white border rounded-xl p-6 shadow hover:shadow-md transition">
        <p class="text-gray-600 italic mb-3">"Bibitnya sangat sehat dan pengirimannya cepat. Terpercaya!"</p>
        <div class="text-sm font-semibold text-green-700">Ibu Sari - Petani Hortikultura</div>
      </div>
      <div class="bg-white border rounded-xl p-6 shadow hover:shadow-md transition">
        <p class="text-gray-600 italic mb-3">"Kami bermitra dalam program CSR. Layanan profesional dan cepat."</p>
        <div class="text-sm font-semibold text-green-700">PT Hijau Lestari - CSR Manager</div>
      </div>
      <div class="bg-white border rounded-xl p-6 shadow hover:shadow-md transition">
        <p class="text-gray-600 italic mb-3">"Kualitas bibit dan layanan konsultasinya sangat membantu proyek reboisasi kami."</p>
        <div class="text-sm font-semibold text-green-700">Bpk. Andi - Dinas Kehutanan</div>
      </div>
    </div>
  </div>
</section>

@endsection
