<section class=" text-green-800 py-16 px-4 font-poppins">
    <div class="max-w-6xl mx-auto">

        <!-- Grid Layanan -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
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