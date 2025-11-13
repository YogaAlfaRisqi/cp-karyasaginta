

<section class=" text-green-800 py-16 px-4 font-poppins">
            <div class="max-w-6xl mx-auto">

                <!-- Grid Layanan -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @forelse ($layanan as $item)
                    <div class="flex flex-col sm:flex-row bg-white rounded-3xl shadow-md border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">

                        <!-- Gambar -->
                        <div class="sm:w-1/3 w-full h-48 sm:h-auto">
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                        </div>

                        <!-- Konten -->
                        <div class="flex-1 p-5 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $item['title'] }}</h3>
                                    <!-- <div class="flex items-center text-sm text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.287 3.956a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.449a1 1 0 00-.364 1.118l1.288 3.957c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.952 2.68c-.785.57-1.84-.197-1.54-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.06 9.383c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.288-3.956z" />
                                        </svg>
                                        {{ $item['rating'] }}/5
                                    </div> -->
                                </div>

                                <p class="text-gray-500 text-sm mb-3">{{ $item['category'] }}</p>

                                <!-- <div class="flex items-center text-gray-600 text-sm mb-2">
                                    <x-heroicon-o-calendar class="w-4 h-4 mr-2" />
                                    Bergabung sejak {{ $item['joined'] }}
                                </div>
                                <div class="flex items-center text-gray-600 text-sm mb-2">
                                    <x-heroicon-o-map-pin class="w-4 h-4 mr-2" />
                                    {{ $item['lokasi'] }}
                                </div>
                                <div class="flex items-center text-gray-600 text-sm mb-3">
                                    <x-heroicon-o-clock class="w-4 h-4 mr-2" />
                                    {{ $item['waktu'] }}
                                </div> -->

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



