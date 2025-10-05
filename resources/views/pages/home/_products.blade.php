<section id="produk" class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins" data-aos="fade-up" data-aos-duration="1000">
  <div class="max-w-6xl md:max-w-4xl lg:max-w-6xl xl:max-w-7xl mx-auto px-8">
    <!-- Header -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-2">Produk Bibit Unggul</h2>
      <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
        Temukan beragam bibit unggulan untuk pertanian, perkebunan, dan kehutanan. Klik checkout untuk memesan langsung melalui WhatsApp.
      </p>
    </div>

    <!-- Grid Produk -->
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      @foreach ($produk as $item)
      <div class="flex flex-col bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden relative" data-aos="zoom-in">

        <!-- Badge -->
        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-md">
          Best Seller
        </span>

        <!-- Gambar -->
        <div class="w-full h-56 bg-gray-50">
          <img src="{{ asset('images/bibit/' . $item['img']) }}"
            alt="{{ $item['nama'] }}"
            class="object-cover w-full h-full transition-transform duration-500 hover:scale-105"
            loading="lazy"
            decoding="async" />
        </div>


        <!-- Info Produk -->
        <div class="flex-1 flex flex-col p-4 text-center">
          <h3 class="text-lg font-semibold text-gray-800">{{ $item['nama'] }}</h3>
          <p class="text-sm text-green-600 mt-1">{{ $item['kategori'] }}</p>
          <!-- Rating -->
          <div class="flex justify-center items-center mt-1 text-yellow-400">
            ★★★★☆ <span class="text-xs text-gray-500 ml-1">(120)</span>
          </div>

          <!-- Button Checkout -->
          <a href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20checkout%20produk%20{{ urlencode($item['nama']) }}%20kategori%20{{ urlencode($item['kategori']) }}"
            target="_blank"
            class="mt-4 inline-block bg-green-500 hover:bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow transition">
            Checkout via WA
          </a>
        </div>
      </div>
      @endforeach
    </div>


    <!-- CTA -->
    <div class="text-center mt-12">
      <a href="/produk" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition">
        Lihat Semua Produk →
      </a>
    </div>
  </div>
</section>