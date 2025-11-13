<section class="py-10">
  <div class="max-w-6xl mx-auto px-4 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

    @forelse ($products as $item)
    <div
      class="bg-white rounded-2xl shadow-md hover:shadow-lg border border-gray-100 overflow-hidden transition-transform duration-300 hover:-translate-y-1">

      <!-- Gambar -->
      <div class="relative w-full h-48 overflow-hidden">
        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->nama }}"
          class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
        <!-- Icon Bookmark -->

        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-md">
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
        <!-- Nama & Rating -->
        <div class="flex items-start justify-between">
          <div>
            <h3 class="text-lg font-semibold text-gray-800">{{ $item->name }} <span
                class="text-gray-500 text-sm">({{ $item->category->name ?? 'Tanaman' }})</span></h3>
            <p class="text-sm text-gray-400">Bibit unggul bersertifikat</p>
          </div>
          <div class="flex items-center gap-1 text-sm text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-500 fill-yellow-400" viewBox="0 0 20 20">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.178 3.622a1 1 0 00.95.69h3.813c.969 0 1.371 1.24.588 1.81l-3.085 2.243a1 1 0 00-.364 1.118l1.178 3.622c.3.921-.755 1.688-1.54 1.118l-3.085-2.243a1 1 0 00-1.176 0l-3.085 2.243c-.785.57-1.84-.197-1.54-1.118l1.178-3.622a1 1 0 00-.364-1.118L2.47 9.05c-.783-.57-.38-1.81.588-1.81h3.813a1 1 0 00.95-.69l1.178-3.622z" />
            </svg>
            <span>{{ $item->rating ?? '4.8/5' }}</span>
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

          <!-- <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zM12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z" />
            </svg>
            <span>Asal kebun: {{ $item->lokasi ?? 'Bogor, Jawa Barat' }}</span>
          </div> -->
        </div>

        <!-- Harga & Tombol -->
        <div class="flex items-center justify-between pt-4">
          <!-- <div class="text-sm">
            <p class="text-gray-500">Harga mulai</p>
            <p class="text-lg font-bold text-gray-800">Rp{{ number_format($item->harga ?? 15000, 0, ',', '.') }}</p>
          </div> -->

          <a href="https://wa.me/{{ $wa }}?text=Halo,%20saya%20tertarik%20dengan%20bibit%20{{ urlencode($item->nama) }}"
            target="_blank"
            class="px-5 py-2 bg-green-600 hover:bg-green-700 text-white rounded-xl text-sm font-medium transition">
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
</section>
