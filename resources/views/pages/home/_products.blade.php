<section id="produk" class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins" data-aos="fade-up" data-aos-duration="1000">
  <div class="max-w-6xl md:max-w-5xl lg:max-w-6xl mx-auto px-6">
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
      <div class="relative flex flex-col bg-white rounded-3xl shadow-md hover:shadow-xl transition overflow-hidden group" data-aos="zoom-in">
        
        <!-- Gambar -->
        <div class="relative w-full h-56 bg-gray-50">
          <img src="{{ asset('images/bibit/' . $item['img']) }}" 
               alt="{{ $item['nama'] }}"
               class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" />
          
          <!-- Button WA Floating -->
          <a href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20checkout%20produk%20{{ urlencode($item['nama']) }}%20kategori%20{{ urlencode($item['kategori']) }}"
             target="_blank"
             class="absolute bottom-3 right-3 bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20.52 3.48A11.8 11.8 0 0 0 12.01 0C5.39 0 .06 5.34.06 11.94c0 2.1.55 4.13 1.6 5.94L0 24l6.31-1.64c1.7.92 3.63 1.4 5.7 1.4h.01c6.61 0 11.94-5.34 11.94-11.94 0-3.19-1.25-6.19-3.44-8.34ZM12.01 21.6c-1.77 0-3.5-.47-5-1.35l-.36-.21-3.74.97 1-3.64-.24-.37A9.56 9.56 0 0 1 2.4 11.94c0-5.29 4.31-9.6 9.6-9.6 2.56 0 4.96 1 6.76 2.79a9.52 9.52 0 0 1 2.8 6.8c0 5.29-4.31 9.6-9.55 9.67Zm5.34-7.2c-.29-.15-1.7-.84-1.96-.94-.26-.1-.45-.15-.65.15-.2.29-.75.94-.91 1.14-.17.2-.34.22-.63.07-.29-.15-1.22-.45-2.33-1.44-.86-.77-1.44-1.7-1.61-1.99-.17-.29-.02-.45.13-.6.13-.13.29-.34.43-.51.15-.17.2-.29.29-.48.1-.2.05-.37-.02-.52-.07-.15-.65-1.57-.89-2.16-.24-.58-.47-.5-.65-.51h-.55c-.2 0-.52.07-.8.37-.29.29-1.05 1.03-1.05 2.5 0 1.47 1.08 2.89 1.23 3.09.15.2 2.13 3.25 5.16 4.56.72.31 1.28.5 1.72.64.72.23 1.38.2 1.9.12.58-.09 1.7-.7 1.95-1.37.24-.68.24-1.27.17-1.37-.07-.1-.26-.16-.55-.31Z"/>
            </svg>
          </a>
        </div>

        <!-- Info Produk -->
        <div class="flex-1 flex flex-col p-4 text-center">
          <h3 class="text-lg font-semibold text-gray-800">{{ $item['nama'] }}</h3>
          <p class="text-sm text-green-600 mt-1">{{ $item['kategori'] }}</p>
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
