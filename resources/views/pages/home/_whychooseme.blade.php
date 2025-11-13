<section class="py-16 sm:py-20 bg-gray-50"> {{-- Latar Krem/Abu-abu Muda untuk kesan hangat dan modern --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{
        features: [
            {
                title: 'Bibit Unggul Berkualitas',
                desc: 'Kami menyediakan bibit tanaman pertanian, perkebunan, dan kehutanan yang teruji, sehat, dan siap tumbuh optimal di berbagai kondisi lahan.',
                icon: '🌱'
            },
            {
                title: 'Pendampingan & Konsultasi',
                desc: 'Selain penyediaan bibit, kami juga memberikan layanan konsultasi dan pendampingan agar budidaya lebih terarah dan hasil lebih maksimal.',
                icon: '🤝'
            },
            {
                title: 'Pengiriman Cepat & Aman',
                desc: 'Proses distribusi bibit dilakukan dengan sistem packing yang aman serta pengiriman tepat waktu hingga ke berbagai daerah.',
                icon: '🚚'
            },
            {
                title: 'Komitmen Keberlanjutan',
                desc: 'Mendukung praktik ramah lingkungan dengan menyediakan bibit berkualitas untuk menunjang keberlanjutan pertanian dan kehutanan.',
                icon: '🌳'
            },
            {
                title: '2 Sertifikasi Resmi',
                desc: 'CV Karya Saginta telah mengantongi 2 sertifikasi dari lembaga berwenang, sehingga produk dan layanan kami terpercaya dan diakui kualitasnya.',
                icon: '📜'
            },
            {
                title: '2 Sertifikasi Resmi',
                desc: 'CV Karya Saginta telah mengantongi 2 sertifikasi dari lembaga berwenang, sehingga produk dan layanan kami terpercaya dan diakui kualitasnya.',
                icon: '📜'
            },
            {
                title: '2 Sertifikasi Resmi',
                desc: 'CV Karya Saginta telah mengantongi 2 sertifikasi dari lembaga berwenang, sehingga produk dan layanan kami terpercaya dan diakui kualitasnya.',
                icon: '📜'
            },
            {
                title: '2 Sertifikasi Resmi',
                desc: 'CV Karya Saginta telah mengantongi 2 sertifikasi dari lembaga berwenang, sehingga produk dan layanan kami terpercaya dan diakui kualitasnya.',
                icon: '📜'
            }

        ]
    }">
        
        <div class="max-w-xl mx-auto space-y-4 text-center mb-16">
            <h2 class="text-xs font-semibold uppercase tracking-wider text-green-600">
                Layanan Profesional
            </h2>
            <p class="text-green-900 text-3xl font-extrabold sm:text-4xl">
                Mengapa Harus Memilih CV Karya Saginta?
            </p>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Kami berkomitmen memberikan bibit unggul berkualitas, layanan terpercaya, serta pendampingan profesional untuk memastikan hasil panen dan perawatan kebun Anda lebih maksimal.
            </p>
        </div>
        
        <div class="mt-8">
            <ul class="grid gap-y-10 gap-x-8 sm:grid-cols-2 lg:grid-cols-4">
                <template x-for="(item, idx) in features" :key="idx">
                    <li class="flex flex-col items-center text-center p-6 bg-white rounded-xl shadow-sm ">

                        <div class="flex-none w-14 h-14 mb-4 
                                    bg-gradient-to-br from-green-500 to-green-700 text-white 
                                    rounded-full flex items-center justify-center text-2xl font-bold transition duration-300">

                            <span x-text="item.icon" role="img" aria-label="Icon"></span>
                        </div>

                        <div>
                            <h4 class="text-lg text-gray-900 font-bold mb-2" x-text="item.title">
                                </h4>
                            <p class="text-gray-600 text-sm" x-text="item.desc">
                                </p>
                        </div>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</section>