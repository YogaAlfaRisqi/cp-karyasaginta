<section class="bg-gradient-to-b from-white to-green-50 text-green-800 py-16 px-4 font-poppins" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto">

        <!-- Header -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold mb-2">Layanan Kami</h2>
            <p class="text-black max-w-2xl">
                Explore our portfolio of innovative projects that showcase our expertise in creating cutting-edge solutions
                for businesses worldwide.
            </p>
        </div>

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
            @php
            $layanan = [
            ['icon' => '🌱', 'title' => 'Pembibitan', 'desc' => 'Layanan pembibitan mencakup penyemaian hingga perawatan bibit berkualitas tinggi untuk mendukung program reboisasi, pertanian, dan hortikultura.'],
            ['icon' => '🌾', 'title' => 'Pertanian', 'desc' => 'Kami menyediakan solusi pertanian terpadu seperti pengolahan lahan, penyediaan benih unggul, hingga distribusi hasil pertanian yang efisien.'],
            ['icon' => '🌳', 'title' => 'Kehutanan', 'desc' => 'Mendukung pelestarian hutan dengan penyediaan bibit pohon keras, program penghijauan, dan kerja sama reboisasi bersama pemerintah dan mitra.'],
            ];
            @endphp

            @foreach ($layanan as $item)
            <div class="bg-green-700 rounded-lg p-6 border border-gray-700 shadow-sm transition-transform transform hover:rotate-[1deg] hover:shadow-md">
                <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                <h3 class="text-lg text-white font-semibold mb-2">{{ $item['title'] }}</h3>
                <p class="text-sm text-white mb-4">{{ $item['desc'] }}</p>
                <a href="#" class="text-yellow-400 text-sm font-semibold hover:underline">View Layanan</a>
            </div>
            @endforeach
        </div>

        <!-- Button -->
        <div class="text-center">
            <a href="#" class="inline-flex items-center space-x-2 text-sm text-black border border-gray-600 px-5 py-2 rounded-full hover:bg-white hover:text-black transition">
                <span>Explore Layanan</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</section>