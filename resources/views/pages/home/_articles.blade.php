<section class="px-2 py-20 bg-gradient-to-b from-white via-white to-green-50" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">

        <!-- Tabs -->
        <div class="flex space-x-4 mb-6">
            <button class="px-4 py-2 rounded-2xl font-semibold bg-green-600 text-white">
                Artikel
            </button>
            <button class="px-4 py-2 border border-gray-300 rounded-2xl text-gray-700 hover:bg-gray-100">
                Info Budi Daya
            </button>
        </div>

        <!-- Tambahkan Alpine.js untuk interaksi -->
        <div x-data="{ scrollPos: 0 }" class="relative">
            <!-- Slider Controls -->
            <div class="flex justify-end items-center mb-4 space-x-2">
                <button @click="$refs.slider.scrollBy({ left: -300, behavior: 'smooth' })"
                    class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-400 hover:bg-green-400 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="$refs.slider.scrollBy({ left: 300, behavior: 'smooth' })"
                    class="w-9 h-9 flex items-center justify-center rounded-full border border-gray-400 hover:bg-gray-100 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Slider Artikel -->
            <div x-ref="slider" class="flex gap-6 snap-x snap-mandatory scroll-smooth overflow-hidden">
                @foreach ($articles as $article)
                <div class="min-w-[280px] md:min-w-[300px] max-w-sm snap-start flex-shrink-0 bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}"
                            class="w-full h-52 object-cover">
                        <div class="absolute inset-y-0 right-0 w-1/3 bg-green-800 bg-opacity-40 text-white text-right p-4 text-sm font-light flex flex-col justify-center space-y-1">
                            @foreach ($article['tags'] as $tag)
                            <span>{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            {{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d F Y') }}
                            • {{ $article['read_time'] }} menit baca
                        </div>
                        <h3 class="font-bold text-lg text-gray-900 leading-tight mb-1">
                            {{ $article['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600">Penulis: {{ $article['author'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>