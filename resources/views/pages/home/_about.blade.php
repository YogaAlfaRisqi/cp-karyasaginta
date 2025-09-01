<section class="bg-white text-black py-12 font-poppins relative" data-aos="zoom-out-left" data-aos-duration="1000">
    <div class="max-w-6xl md:max-w-4xl lg:max-w-6xl mx-auto px-8">
        <!-- Header -->
        <h4 class="text-sm font-medium text-green-600 uppercase mb-2">Tentang Kami</h4>
        <div class="flex items-center space-x-3 mb-4">
            <img src="images/Logo.png" alt="Logo CV Karya Saginta" class="w-12 h-12 object-contain" />
            <h2 class="text-2xl sm:text-3xl font-bold">CV Karya Saginta</h2>
        </div>

        <!-- Deskripsi -->
        <p class="text-black/70 max-w-3xl mb-6 leading-relaxed">
            Merupakan perusahaan yang bergerak dalam bidang pengadaan bibit untuk pertanian, perkebunan, maupun kehutanan,
            serta pembibitan tanaman untuk program reboisasi termasuk tanaman hortikultura.
        </p>

        <!-- Layanan List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">
        
            @foreach ($layanan as $item)
            <div class="bg-green-700 rounded-lg p-6 border border-gray-700 shadow-sm transition-transform transform hover:rotate-[1deg] hover:shadow-md">
                <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                <h3 class="text-lg text-white font-semibold mb-2">{{ $item['title'] }}</h3>
                <p class="text-sm text-white mb-4">{{ $item['desc'] }}</p>
                <a href="#" class="text-yellow-400 text-sm font-semibold hover:underline">View Layanan</a>
            </div>
            @endforeach
        </div>

       

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



