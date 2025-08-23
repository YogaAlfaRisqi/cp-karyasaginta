<section class="relative bg-white py-20 px-6 border-t border-gray-200 font-poppins" data-aos="fade-up" data-aos-duration="1000">
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-b from-white to-green-50"></div>

    <div class="relative max-w-6xl mx-auto z-10">
        <!-- Header -->
        <div class="mb-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-3" data-aos="fade-up">
                Sertifikasi
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-3xl mx-auto"
                data-aos="fade-up" data-aos-delay="100">
                Legalitas dan kepercayaan yang kami bangun melalui sertifikasi resmi dari lembaga terkait.
            </p>
        </div>

        <!-- Cards -->
        @php
        $certificates = [
        [
        'title' => 'Sertifikat Pengedar Benih Hortikultura',
        'desc' => 'CV. Karya Saginta telah memperoleh sertifikasi resmi sebagai Pengedar Benih Hortikultura yang menjamin legalitas dan mutu distribusi benih.'
        ],
        [
        'title' => 'Sertifikat Produsen Benih Hortikultura',
        'desc' => 'Kami juga memiliki sertifikat sebagai Produsen Benih Hortikultura yang menunjukkan kapabilitas produksi bibit unggul dan berkualitas.'
        ]
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            @foreach ($certificates as $i => $cert)
            <div class="bg-white border border-green-100 rounded-xl p-5 flex gap-4 items-start hover:border-green-300 transition"
                data-aos="fade-up" data-aos-delay="{{ $i * 150 }}">
                <div class="flex-shrink-0 w-10 h-10 bg-green-100 text-green-600 flex items-center justify-center rounded-full text-xl">
                    ✔
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-1">{{ $cert['title'] }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $cert['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Footer -->
        <p class="text-gray-700 text-base md:text-lg leading-relaxed max-w-4xl mx-auto text-center"
            data-aos="fade-up" data-aos-delay="300">
            Dengan sertifikasi ini, kami memastikan penyediaan bibit unggul secara legal, terpercaya, dan berkualitas tinggi.
        </p>
    </div>
</section>
