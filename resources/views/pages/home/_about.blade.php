<section class="bg-white text-black py-6 font-poppins relative" data-aos="zoom-out-left" data-aos-duration="1000">
    <div class="max-w-6xl md:max-w-4xl lg:max-w-6xl xl:max-w-7xl mx-auto px-8">

        <!-- Header -->
        <!-- <h4 class="text-sm font-medium text-green-600 uppercase mb-2">Tentang Kami</h4> -->
        <div class="flex items-center space-x-3 mb-4">
            <img src="images/Logo.png" alt="Logo CV Karya Saginta" class="w-12 h-12 object-contain" />
            <h2 class="text-2xl sm:text-3xl font-bold">CV Karya Saginta</h2>
        </div>

        <!-- Deskripsi -->
        <p class="text-black/70 max-w-3xl lg:max-w-6xl mb-6 leading-relaxed">
            Merupakan perusahaan yang bergerak dalam bidang pengadaan bibit untuk pertanian, perkebunan, maupun kehutanan,
            serta pembibitan tanaman untuk program reboisasi termasuk tanaman hortikultura.
        </p>

        <!-- Layanan List -->
        <section class=" text-green-800 py-6 px-4 font-poppins">
            <div class="max-w-6xl mx-auto">

                @php
                // Data dummy layanan (bisa diganti ke database nanti)
                $layanan = collect([
                [
                'image' => 'images/bibit/Kemiri.jpg',
                'title' => 'Penangkaran & Pembibitan Unggul',
                'category' => 'Pertanian • Kehutanan',
                'rating' => '4.8',
                'joined' => '2021',
                'lokasi' => 'Bogor, Jawa Barat',
                'waktu' => 'Sen–Sab • 08:00–17:00',
                'desc' => 'Kami melayani penangkaran bibit tanaman unggul seperti sengon, mahoni, dan hortikultura dengan standar sertifikasi nasional.',
                'cta' => 'Hubungi Kami'
                ],
                [
                'image' => 'images/bibit/Kelengkeng.jpg',
                'title' => 'Pengelolaan & Konsultasi Perkebunan',
                'category' => 'Perkebunan • Agribisnis',
                'rating' => '4.7',
                'joined' => '2020',
                'lokasi' => 'Sumedang, Jawa Barat',
                'waktu' => 'Sen–Jum • 09:00–16:00',
                'desc' => 'Mendampingi petani dan korporasi dalam manajemen kebun produktif: dari analisis lahan, pemupukan, hingga distribusi hasil panen.',
                'cta' => 'Pelajari Lebih Lanjut'
                ],
                [
                'image' => 'images/bibit/Bambu Hijau.jpeg',
                'title' => 'Program Penghijauan & Reboisasi',
                'category' => 'Lingkungan • CSR',
                'rating' => '4.9',
                'joined' => '2019',
                'lokasi' => 'Cianjur, Jawa Barat',
                'waktu' => 'Sen–Sab • 07:30–16:30',
                'desc' => 'Kami bekerja sama dengan instansi dan masyarakat dalam program reboisasi dan penghijauan kawasan kritis.',
                'cta' => 'Gabung Program'
                ],
                
                ]);
                @endphp

                <!-- Grid Layanan -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 ls:grid-cols-2 gap-6">
                    @forelse ($layanan as $item)
                    <div class="flex flex-col sm:flex-row bg-white rounded-3xl shadow-md border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">

                        <!-- Gambar -->
                        <div class="sm:w-1/3 w-full h-48 sm:h-auto">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                        </div>

                        <!-- Konten -->
                        <div class="flex-1 p-5 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $item['title'] }}</h3>
                                    <div class="flex items-center text-sm text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.287 3.956a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.449a1 1 0 00-.364 1.118l1.288 3.957c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.952 2.68c-.785.57-1.84-.197-1.54-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.06 9.383c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.288-3.956z" />
                                        </svg>
                                        {{ $item['rating'] }}/5
                                    </div>
                                </div>

                                <p class="text-gray-500 text-sm mb-3">{{ $item['category'] }}</p>

                                <!-- <div class="flex items-center text-gray-600 text-sm mb-2">
                                    <x-heroicon-o-calendar class="w-4 h-4 mr-2" />
                                    Bergabung sejak {{ $item['joined'] }}
                                </div> -->
                                <!-- <div class="flex items-center text-gray-600 text-sm mb-2">
                                    <x-heroicon-o-map-pin class="w-4 h-4 mr-2" />
                                    {{ $item['lokasi'] }}
                                </div>
                                <div class="flex items-center text-gray-600 text-sm mb-3">
                                    <x-heroicon-o-clock class="w-4 h-4 mr-2" />
                                    {{ $item['waktu'] }}
                                </div> -->
                                <!-- <div class="justify-between items-center">
                                    <div class="flex items-center text-gray-600 text-sm mb-2">
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
                                    </div>
                                </div> -->

                                <p class="text-gray-700 text-sm leading-relaxed mb-4">{{ $item['desc'] }}</p>
                            </div>

                            <div class="flex justify-end items-center">
                                <!-- <p class="text-sm text-gray-500">Mulai dari <span class="text-lg font-semibold text-green-700">Hubungi</span></p> -->
                                <a href="#"
                                    class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-5 py-2 rounded-xl shadow transition">
                                    {{ $item['cta'] }}
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