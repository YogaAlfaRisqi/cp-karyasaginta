<section class="py-20 sm:py-32 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- JUDUL SECTION --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-900 leading-tight">
                Testimonial
            </h2>
            <p class="text-lg text-gray-600 mt-3">
                Dengarkan langsung dari pengguna nyata <br>yang mengandalkan produk kami setiap hari untuk mendapatkan hasil.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:gap-10">

            @forelse($testimonials as $testimonial)
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 flex flex-col items-center text-center transform  transition duration-300">

                <div class="relative mb-12">
                    <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-full text-5xl text-gray-200 font-serif">
                        “
                    </span>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        "{{ $testimonial['message'] }}"
                    </p>
                </div>


                <div class="mt-auto">
                    <img src="{{ Storage::url($testimonial->photo_url) }}"
                        alt="{{ $testimonial['name'] }}"
                        class="w-16 h-16 rounded-full object-cover mx-auto mb-3 shadow-md border-2 border-white">
                    <p class="text-base font-bold text-gray-900">{{ $testimonial['name'] }}</p>
                    <p class="text-sm text-gray-500 mt-0.5">{{ $testimonial['position'] }}</p>
                </div>
            </div>
            @empty
            <div class="p-10 md:p-16 bg-white rounded-2xl shadow-lg border-2 border-dashed border-green-200 text-center">


                <div class="mx-auto w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path> {{-- Contoh Ikon Lightning Bolt/Inspirasi --}}
                    </svg>
                </div>


                <h3 class="text-xl font-semibold text-gray-800 mb-2">
                    Belum Ada Ulasan dari Pelanggan
                </h3>


                <p class="text-gray-500 mb-0">
                    Dapatkan hasil yang menakjubkan dari produk kami! Ulasan Anda sangat berarti.
                </p>

            </div>
            @endforelse

        </div>
    </div>
</section>