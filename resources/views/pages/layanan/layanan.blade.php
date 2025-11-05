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