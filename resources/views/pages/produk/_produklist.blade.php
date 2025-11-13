<section class="py-10"> 

    <!-- Grid Produk -->
    <div class="max-w-6xl xl:max-w-7xl mx-auto px-4 grid gap-6 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">

      @forelse ($products as $item)
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
