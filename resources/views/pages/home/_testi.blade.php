<section class="py-14 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">

        {{-- HEADER --}}
        <div class="max-w-3xl mx-auto text-center mb-10">
            <h3 class="text-green-700 dark:text-green-400 font-bold text-2xl mb-2">Apa Kata Mereka</h3>
            <p class="text-gray-600 dark:text-gray-400 text-lg">
                Testimoni pelanggan dan mitra yang telah mempercayai kami.
            </p>
        </div>

        {{-- KONTEN TESTIMONIAL --}}
        <div class="max-w-3xl mx-auto text-center">
            @forelse ($testimonials as $testimonial)
            <div
                class="bg-white dark:bg-gray-800 p-8 mb-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 relative">
                <figure>
                    <blockquote>
                        <p class="text-gray-800 dark:text-gray-200 text-xl italic leading-relaxed">
                            "{{ $testimonial->message }}"
                        </p>
                    </blockquote>
                    <div class="mt-8">
                        <img
                            src="{{ asset('storage/' . $testimonial->photo_url) }}"
                            alt="Foto {{ $testimonial->name }}"
                            class="w-16 h-16 mx-auto rounded-full object-cover border-4 border-green-200 dark:border-green-600 shadow-md" />

                        <div class="mt-4">
                            <span class="block text-green-700 dark:text-green-400 font-bold text-lg">
                                {{ $testimonial->name }}
                            </span>
                            @if ($testimonial->position)
                            <span class="block text-gray-500 dark:text-gray-400 text-base mt-0.5">
                                {{ $testimonial->position }}
                            </span>
                            @endif
                        </div>
                    </div>
                </figure>
            </div>
            @empty
            {{-- PESAN JIKA BELUM ADA DATA --}}
            <div
                class="max-w-2xl mx-auto text-center bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto text-gray-400 dark:text-gray-500"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.78C3.606 14.866 3 13.567 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <p class="mt-4 text-gray-600 dark:text-gray-400 italic font-medium">
                    Saat ini <span class="font-semibold">belum ada testimonial</span> yang ditampilkan.
                </p>
                <p class="text-sm text-gray-500 dark:text-gray-600 mt-1">
                    Hubungi administrator untuk menambahkan ulasan dari pelanggan atau mitra Anda.
                </p>
            </div>
            @endforelse
        </div>

    </div>
</section>