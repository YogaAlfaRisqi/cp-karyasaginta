<section id="produk" class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins" data-aos="fade-right">
  <div class="max-w-6xl md:max-w-4xl lg:max-w-6xl xl:max-w-7xl mx-auto px-6">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-6 mb-8">

      <div class="inline-flex items-center space-x-2 p-1.5 bg-green-100 rounded-lg mb-3">
        <svg class="w-5 h-5 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider">Bibit Unggulan</span>
      </div>

      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight mb-4">
        Pilih Bibit Tanaman Terbaik untuk Kebun Anda
      </h2>

      <div class="flex flex-col md:flex-row md:items-center justify-between">

        <p class="text-gray-600 max-w-xl text-base pr-4 mb-4 md:mb-0">
          Katalog bibit unggul kami telah diverifikasi dan siap tanam, langsung dari kebun mitra terpercaya.
        </p>

        <a href=""
          class="flex-shrink-0 inline-block px-6 py-2 text-md font-medium transition duration-300 ease-in-out whitespace-nowrap
                   text-center md:text-left 
                    text-green-900 hover:text-green-600">
          Lihat Semua Koleksi →
        </a>

      </div>

    </div>

    <!-- Grid Produk -->
    <div class="max-w-6xl mx-auto px-4 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

      @forelse ($produk as $item)
      <div
        class="bg-white rounded-2xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-transform duration-300 hover:-translate-y-1">
        <!-- Gambar -->
        <div class="relative w-full h-48 overflow-hidden ">
          <img src="{{ Storage::url($item->image) }}" alt="{{ $item->nama }}"
            class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
          <!-- Icon Bookmark -->
          <span class="absolute top-3 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-r-md">
            Best Seller
          </span>
          <button
            class="absolute top-3 right-3 bg-white/80 backdrop-blur-sm p-2 rounded-full shadow hover:bg-white transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-700" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M5 5v14l7-5 7 5V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
            </svg>
          </button>
        </div>

        <!-- Konten -->
        <div class="p-5 space-y-3">
          <div class="flex items-start justify-between">
            <div>
              <h3 class="text-lg font-semibold text-gray-800">{{ $item->name }} <span
                  class="text-gray-500 text-xs">({{ $item->category->name ?? 'Tanaman' }})</span></h3>
              <p class="text-sm text-gray-400">Bibit unggul bersertifikat</p>
            </div>
          </div>

          <!-- Info Bibit -->
          <div class="text-sm text-gray-500 space-y-2 mt-2">
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Umur tanam: {{ $item->umur ?? '3 bulan' }}</span>
            </div>

            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M5 13l4 4L19 7" />
              </svg>
              <span>Stok tersedia: {{ $item->stok ?? '50 bibit' }}</span>
            </div>
          </div>

          <!-- Harga & Tombol -->
          <div class="p-0">
            <!-- <a href=""
              class="px-4 py-2 border border-green-800 hover:border-gray-500 text-gray-700 rounded-xl text-sm font-medium transition">
              Detail
            </a> -->
            <!-- <a href="https://wa.me/{{ $wa }}?text=Halo,%20saya%20tertarik%20dengan%20bibit%20{{ urlencode($item->nama) }}"
              target="_blank"
              class="px-5 py-2 bg-green-900 hover:bg-green-700 text-center text-white rounded-xl text-lg font-medium transition">
              Beli Sekarang
            </a> -->

            <a href="#" class="block text-center py-2 bg-green-600 text-white font-medium rounded-xl hover:bg-green-700 transition">
              Pesan Sekarang
            </a>

          </div>
        </div>
      </div>

      @empty
      <div class="col-span-full flex flex-col items-center justify-center text-center py-10 bg-white rounded-xl border">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 mb-3" fill="none" viewBox="0 0 24 24"
          stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 7.5l-9-4.5-9 4.5m18 0v9l-9 4.5m9-13.5l-9 4.5m0 0l-9-4.5m9 4.5v9m0-9l9-4.5m-9 4.5l-9-4.5" />
        </svg>
        <h2 class="text-gray-700 font-semibold text-lg">Belum Ada Bibit</h2>
        <p class="text-gray-500 text-sm">Belum tersedia bibit tanaman untuk saat ini. Silakan cek kembali nanti.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>