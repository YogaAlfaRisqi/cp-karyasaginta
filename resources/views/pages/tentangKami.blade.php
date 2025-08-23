@extends('layouts.public')

@section('content')

<!-- SECTION: Tentang CV -->
<section class="bg-gradient-to-b from-white via-green-50 to-white text-gray-800 py-16 font-poppins">
  <div class="max-w-6xl mx-auto px-4">

    <div class="px-4 ">
      <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        <!-- Kolom Kiri: Teks -->
        <div>
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
        </div>

        <!-- Kolom Kanan: Gambar -->
        <div class="w-full">
          <img src="/images/bg.jpeg" alt="Tentang Kami CV Karya Saginta"
            class="w-full h-100 rounded-xl shadow-lg object-cover">
        </div>

      </div>
    </div>

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
      </div>
    </section>


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


<section class="py-4 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Judul Section -->
    <div class="text-center mb-12">
      <h4 class="text-sm text-green-600 uppercase mb-2">Dokumentasi</h4>
      <h2 class="text-3xl sm:text-4xl font-bold text-green-800">Galeri Kegiatan & Produk</h2>
      <p class="mt-2 text-gray-600 text-base">Beberapa dokumentasi proyek, bibit, dan kegiatan lapangan kami.</p>
    </div>

    <!-- Grid Galeri -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
      <!-- Gambar 1 -->
      <div class="overflow-hidden rounded-lg shadow-sm group">
        <img src="/images/galeri/bg.jpeg" alt="Galeri 1" class="w-full h-48 object-cover transform group-hover:scale-105 transition duration-300">
      </div>

      <!-- Gambar 2 -->
      <div class="overflow-hidden rounded-lg shadow-sm group">
        <img src="/images/galeri/bg.jpeg" alt="Galeri 2" class="w-full h-48 object-cover transform group-hover:scale-105 transition duration-300">
      </div>

      <!-- Gambar 3 -->
      <div class="overflow-hidden rounded-lg shadow-sm group">
        <img src="/images/galeri/bg.jpeg" alt="Galeri 3" class="w-full h-48 object-cover transform group-hover:scale-105 transition duration-300">
      </div>

      <!-- Gambar 4 -->
      <div class="overflow-hidden rounded-lg shadow-sm group">
        <img src="/images/galeri/bg.jpeg" alt="Galeri 4" class="w-full h-48 object-cover transform group-hover:scale-105 transition duration-300">
      </div>

      <!-- Tambah lebih banyak gambar sesuai kebutuhan -->
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

<section class="py-8 mb-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Judul -->
    <div class="text-center mb-12">
      <h4 class="text-sm text-green-600 uppercase mb-2">Klien Kami</h4>
      <h2 class="text-3xl sm:text-4xl font-bold text-green-800">Dipercaya Oleh</h2>
      <p class="mt-2 text-gray-600 text-base">Kami telah bekerja sama dengan berbagai pihak dari instansi pemerintah, swasta, hingga komunitas pertanian.</p>
    </div>

    <!-- Logo Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 items-center justify-items-center">
      <!-- Logo 1 -->
      <div class="grayscale hover:grayscale-0 transition duration-300">
        <img src="/images/client/bg.jpeg" alt="Client 1" class="h-12 object-contain">
      </div>
      <!-- Logo 2 -->
      <div class="grayscale hover:grayscale-0 transition duration-300">
        <img src="/images/client/bg.jpeg" alt="Client 2" class="h-12 object-contain">
      </div>
      <!-- Logo 3 -->
      <div class="grayscale hover:grayscale-0 transition duration-300">
        <img src="/images/client/bg.jpeg" alt="Client 3" class="h-12 object-contain">
      </div>
      <!-- Logo 4 -->
      <div class="grayscale hover:grayscale-0 transition duration-300">
        <img src="/images/client/bg.jpeg" alt="Client 4" class="h-12 object-contain">
      </div>
      <!-- Logo 5 -->
      <div class="grayscale hover:grayscale-0 transition duration-300">
        <img src="/images/client/bg.jpeg" alt="Client 5" class="h-12 object-contain">
      </div>
    </div>
  </div>
</section>

<section class="bg-green-50 py-16">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Judul -->
    <div class="text-center mb-12">
      <h4 class="text-sm text-green-600 uppercase mb-2">Hubungi Kami</h4>
      <h2 class="text-3xl sm:text-4xl font-bold text-green-800">Kontak & Alamat</h2>
      <p class="mt-2 text-gray-600 text-base">Kami siap melayani kebutuhan Anda dalam pengadaan bibit unggul.</p>
    </div>

    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-10">
      <!-- Info Kontak -->
      <div class="space-y-6">
        <!-- Alamat -->
        <div class="flex items-start space-x-4">
          <div class="text-green-700 text-2xl">
            📍
          </div>
          <div>
            <h4 class="text-lg font-semibold text-green-800">Alamat</h4>
            <p class="text-gray-700">Jl. Jamin Ginting No. 70, Sumber Mufakat,
              Kabanjahe – Karo, Sumatera Utara</p>
          </div>
        </div>

        <!-- WhatsApp -->
        <div class="flex items-start space-x-4">
          <div class="text-green-700 text-2xl">
            📱
          </div>
          <div>
            <h4 class="text-lg font-semibold text-green-800">WhatsApp</h4>
            <a href="https://wa.me/628126527016" target="_blank" class="text-green-700 hover:underline">+6281388181416
</a>
          </div>
        </div>

        <!-- Email -->
        <div class="flex items-start space-x-4">
          <div class="text-green-700 text-2xl">
            ✉️
          </div>
          <div>
            <h4 class="text-lg font-semibold text-green-800">Email</h4>
            <a href="mailto:cvkaryasaginta@gmail.com" class="text-green-700 hover:underline">karyasaginta@gmail.com</a>
          </div>
        </div>

        <!-- Jam Operasional -->
        <div class="flex items-start space-x-4">
          <div class="text-green-700 text-2xl">
            🕒
          </div>
          <div>
            <h4 class="text-lg font-semibold text-green-800">Jam Operasional</h4>
            <p class="text-gray-700">Senin - Jumat: 09.00 – 16.00 WIB</p>
          </div>
        </div>
      </div>

      <!-- Embed Google Maps -->
      <div class="w-full h-64 md:h-full rounded-lg overflow-hidden shadow-md border border-green-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.831979409461!2d98.5060463734893!3d3.1390346532178284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303101afb541ebf9%3A0xda8b0e21268f9029!2sCV.%20KARYA%20SAGINTA!5e0!3m2!1sid!2sid!4v1754573737892!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>


@endsection