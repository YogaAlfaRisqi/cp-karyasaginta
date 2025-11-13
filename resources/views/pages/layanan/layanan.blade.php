<<<<<<< HEAD
@extends('layouts.public')

@section('content')
<!-- Header -->
<div class="bg-gradient-to-r from-green-50 via-white to-green-50">
  <section class="bg-gradient-to-r from-green-50 via-white to-green-50 py-16 font-poppins text-gray-800">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-green-700 mb-2">Layanan Pengadaan Barang & Jasa</h1>
        <p class="text-base text-gray-600 max-w-xl mx-auto">
          Kami menyediakan solusi lengkap untuk kebutuhan bibit, pengolahan lahan, hingga pengantaran. Berikut layanan terbaik dari CV Karya Saginta.
        </p>
      </div>
    </div>
  </section>

  <!-- Layanan Cards -->
  <section class="bg-gradient-to-r from-green-50 via-white to-green-50 pb-20 font-poppins">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">


        @foreach ($layanan as $item)
        <div class="bg-gradient-to-b from-green-50 to-white rounded-2xl shadow-md hover:shadow-xl transition p-6 border border-gray-200 group">
          <div class="overflow-hidden rounded-lg mb-4">
            <img src="{{ Storage::url($item->image) }}" alt="{{ $item['title'] }}"
              class="w-full h-44 object-cover rounded-lg group-hover:scale-105 transition duration-300 ease-in-out">
          </div>
          <h3 class="text-lg font-semibold text-green-700 mb-1">{{ $item['title'] }}</h3>
          <p class="text-sm text-gray-600">{{ $item['desc'] }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="bg-gradient-to-r from-white via-green-50 to-white py-12 font-poppins text-gray-800">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-8">
        <h2 class="text-2xl font-semibold text-green-700">Kontak Email</h2>
        <p class="text-sm text-gray-600 mt-1">Silakan tinggalkan pesan Anda melalui formulir ini</p>
      </div>

      <form action="mailto:emailanda@domain.com" method="POST" enctype="text/plain"
        class="bg-white p-6 rounded-xl shadow border border-green-100">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Kolom Kiri -->
          <div class="space-y-4">
            <input type="text" name="nama" placeholder="Nama Anda"
              class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-green-500 focus:outline-none" required>

            <input type="email" name="email" placeholder="Email Anda"
              class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-green-500 focus:outline-none" required>
          </div>

          <!-- Kolom Kanan -->
          <div>
            <textarea name="pesan" rows="6" placeholder="Pesan Anda..."
              class="w-full h-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-green-500 focus:outline-none" required></textarea>
          </div>
        </div>

        <!-- Tombol -->
        <div class="text-right mt-4">
          <button type="submit"
            class="inline-flex items-center gap-2 text-sm bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 4l16 8-16 8V4z" />
            </svg>
            Kirim
          </button>
        </div>
      </form>
    </div>
  </section>

</div>




@endsection
=======


<section class=" text-green-800 py-16 px-4 font-poppins">
            <div class="max-w-6xl mx-auto">

                @php
                // Data dummy layanan (bisa diganti ke database nanti)
                $layanan = collect([
                [
                'image' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=800&q=60',
                'title' => 'Penangkaran & Pembibitan Unggul',
                'category' => 'Pertanian • Kehutanan',
                'rating' => '4.8',
                'joined' => '2021',
                'lokasi' => 'Bogor, Jawa Barat',
                'waktu' => 'Sen–Sab • 08:00–17:00',
                'desc' => 'Kami melayani penangkaran bibit tanaman unggul seperti sengon, mahoni, dan hortikultura dengan standar sertifikasi nasional.',
                'cta' => 'Hubungi Kami'
                ],
                [
                'image' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=800&q=60',
                'title' => 'Pengelolaan & Konsultasi Perkebunan',
                'category' => 'Perkebunan • Agribisnis',
                'rating' => '4.7',
                'joined' => '2020',
                'lokasi' => 'Sumedang, Jawa Barat',
                'waktu' => 'Sen–Jum • 09:00–16:00',
                'desc' => 'Mendampingi petani dan korporasi dalam manajemen kebun produktif: dari analisis lahan, pemupukan, hingga distribusi hasil panen.',
                'cta' => 'Pelajari Lebih Lanjut'
                ],
                [
                'image' => 'images/bibit/Aren.jpeg',
                'title' => 'Program Penghijauan & Reboisasi',
                'category' => 'Lingkungan • CSR',
                'rating' => '4.9',
                'joined' => '2019',
                'lokasi' => 'Cianjur, Jawa Barat',
                'waktu' => 'Sen–Sab • 07:30–16:30',
                'desc' => 'Kami bekerja sama dengan instansi dan masyarakat dalam program reboisasi dan penghijauan kawasan kritis.',
                'cta' => 'Gabung Program'
                ],
                [
                'image' => 'images/bibit/Kelengkeng.jpg',
                'title' => 'Pelatihan & Edukasi Pertanian',
                'category' => 'Pelatihan • Edukasi',
                'rating' => '4.6',
                'joined' => '2022',
                'lokasi' => 'Online & Offline',
                'waktu' => 'Jadwal Fleksibel',
                'desc' => 'Menyelenggarakan pelatihan praktis dan seminar tentang agribisnis, budidaya tanaman, dan inovasi teknologi hijau.',
                'cta' => 'Daftar Sekarang'
                ],
                ]);
                @endphp

                <!-- Grid Layanan -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @forelse ($layanan as $item)
                    <div class="flex flex-col sm:flex-row bg-white rounded-3xl shadow-md border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">

                        <!-- Gambar -->
                        <div class="sm:w-1/3 w-full h-48 sm:h-auto">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                        </div>

                        <!-- Konten -->
                        <div class="flex-1 p-5 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $item['title'] }}</h3>
                                    <div class="flex items-center text-sm text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.287 3.956a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.449a1 1 0 00-.364 1.118l1.288 3.957c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.952 2.68c-.785.57-1.84-.197-1.54-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.06 9.383c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.288-3.956z" />
                                        </svg>
                                        {{ $item['rating'] }}/5
                                    </div>
                                </div>

                                <p class="text-gray-500 text-sm mb-3">{{ $item['category'] }}</p>

                                <!-- <div class="flex items-center text-gray-600 text-sm mb-2">
                                    <x-heroicon-o-calendar class="w-4 h-4 mr-2" />
                                    Bergabung sejak {{ $item['joined'] }}
                                </div>
                                <div class="flex items-center text-gray-600 text-sm mb-2">
                                    <x-heroicon-o-map-pin class="w-4 h-4 mr-2" />
                                    {{ $item['lokasi'] }}
                                </div>
                                <div class="flex items-center text-gray-600 text-sm mb-3">
                                    <x-heroicon-o-clock class="w-4 h-4 mr-2" />
                                    {{ $item['waktu'] }}
                                </div> -->

                                <p class="text-gray-700 text-sm leading-relaxed mb-4">{{ $item['desc'] }}</p>
                            </div>

                            <div class="flex justify-end items-center">
                                <!-- <p class="text-sm text-gray-500">Mulai dari <span class="text-lg font-semibold text-green-700">Hubungi</span></p> -->
                                <a href="#"
                                    class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-5 py-2 rounded-xl shadow transition">
                                    {{ $item['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-gray-500">Belum ada layanan tersedia.</p>
                    @endforelse
                </div>
            </div>
        </section>



>>>>>>> 93877ef09fd6813c2ef78e57fac8426f496737ff
