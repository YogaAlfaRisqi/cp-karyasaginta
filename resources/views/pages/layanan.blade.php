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


        @forelse ($layanan as $item)
        <div
          class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group focus-within:ring-2 focus-within:ring-green-500 focus:outline-none"
          role="button"
          tabindex="0"
          aria-label="Lihat detail layanan {{ $item->title }}">
          <!-- Gambar -->
          <div class="overflow-hidden rounded-t-2xl relative">
            <img
              src="{{ Storage::url($item->image) }}"
              alt="Gambar layanan {{ $item->title }}"
              class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
              loading="lazy">
           
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
          </div>

          <!-- Konten -->
          <div class="p-5">
            <h3
              class="text-xl font-semibold text-green-700 mb-2 leading-snug group-hover:text-green-800">
              {{ $item['title'] }}
            </h3>
            <p
              class="text-base text-gray-700 leading-relaxed">
              {{ $item['description'] }}
            </p>
          </div>
        </div>

        @empty
        <div class="flex flex-col items-center justify-center col-span-full  text-center">
          <div class="flex items-center justify-center w-20 h-20 mb-6 rounded-full bg-green-50">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="w-10 h-10 text-green-500"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 16.5v-9l9-4.5 9 4.5v9l-9 4.5-9-4.5z" />
            </svg>
          </div>
          <h2 class="text-lg font-semibold text-gray-700 mb-1">Belum Ada Layanan</h2>
          <p class="text-sm text-gray-500 max-w-sm">
            Data layanan belum tersedia untuk saat ini. Silakan tambahkan layanan baru atau cek kembali nanti.
          </p>
        </div>
        @endforelse
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