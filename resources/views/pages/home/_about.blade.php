<section class="bg-white text-black py-6 font-poppins relative" data-aos="zoom-out-left" data-aos-duration="1000">
    <div class="max-w-6xl md:max-w-4xl lg:max-w-6xl xl:max-w-7xl mx-auto px-8">

        <!-- Header -->
        <!-- <h4 class="text-sm font-medium text-green-600 uppercase mb-2">Tentang Kami</h4> -->
        <div class="flex items-center space-x-3 mb-4 mx-6">
            <img src="images/Logo.png" alt="Logo CV Karya Saginta" class="w-12 h-12 object-contain" />
            <h2 class="text-2xl sm:text-3xl font-bold text-green-900">CV Karya Saginta</h2>
        </div>

        <!-- Deskripsi -->
        <p class="text-black/70 max-w-3xl lg:max-w-6xl mb-6 leading-relaxed mx-6">
            Merupakan perusahaan yang bergerak dalam bidang pengadaan bibit untuk pertanian, perkebunan, maupun kehutanan,
            serta pembibitan tanaman untuk program reboisasi termasuk tanaman hortikultura.
        </p>

        <!-- Layanan List -->
        <section class=" text-green-800 py-6 px-4 font-poppins mb-6">
            <div class="max-w-6xl mx-auto">

                

                <!-- Grid Layanan -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 ls:grid-cols-2 gap-6">
    @forelse ($layanan as $item)
            <div class="flex flex-col sm:flex-row bg-white rounded-3xl shadow-md border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">

                <!-- Gambar -->
                <div class="sm:w-1/3 w-full h-48 sm:h-auto">
                    <img
                        src="{{ $item->image? Storage::url($item->image) : asset('images/no-image.webp') }}"
                        alt="{{ $item->title }}"
                        class="w-full h-full object-cover">
                </div>


                <!-- Konten -->
                <div class="flex-1 p-5 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $item['title'] }}</h3>
                        </div>

                        <p class="text-gray-500 text-sm mb-3">{{ $item->category->name ?? 'Tanpa Kategori' }}</p>

                        <p class="text-gray-700 text-sm leading-relaxed mb-4">{{ $item['description'] }}</p>
                    </div>

                    <div class="flex justify-end items-center">
                        <!-- <p class="text-sm text-gray-500">Mulai dari <span class="text-lg font-semibold text-green-700">Hubungi</span></p> -->
                        <a href="#"
                            class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-5 py-2 rounded-xl shadow transition">
                            {{ $item['cta'] }}Hubungi Kami
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

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center mb-6">
            @foreach ($stats as $i => $stat)
            <div data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                <p class="text-2xl font-bold text-green-600">{{ $stat['value'] }}</p>
                <p class="text-sm text-gray-600">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="mt-8 text-center">
            <a href="tentangkami" class="text-green-900 hover:text-green-700 py-2 font-medium transition">
                Lihat Selengkapnya →
            </a>
        </div>
    </div>
</section>