<section id="produk" class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-2">Produk Bibit Unggul</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
                Temukan beragam bibit dan layanan unggulan berkualitas tinggi untuk pertanian, perkebunan, dan kehutanan.
            </p>
        </div>

        <!-- Grid Produk -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @foreach ($produk as $item)
            <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 overflow-hidden group" data-aos="zoom-in">
                <!-- Gambar -->
                <div class="w-full h-40 bg-gray-50 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/bibit/' . $item['img']) }}" alt="{{ $item['nama'] }}"
                        class=" object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <!-- Info Produk -->
                <div class="p-4 text-center">
                    <h3 class="text-base font-semibold text-gray-800">{{ $item['nama'] }}</h3>
                    <p class="text-xs text-green-600 mt-1">{{ $item['kategori'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-8">
            <a href="/produk" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition">
                Lihat Semua Produk →
            </a>
        </div>
    </div>
</section>
