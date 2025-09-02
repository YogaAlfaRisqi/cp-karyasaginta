<section class="bg-gradient-to-b from-white via-green-50 to-white py-4 font-poppins text-gray-800">
    <div class="mx-auto">
        <!-- Banner -->
        <div class="relative overflow-hidden shadow-lg">
            <img src="{{ $image }}"
                alt="Banner Image"
                class="w-full {{ $height }} object-cover" />

            <div class="absolute inset-0 bg-green-900/40 flex items-center justify-center">
                <div class="text-center text-white px-6">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">{{ $title }}</h1>
                    @if ($subtitle)
                        <p class="text-sm md:text-base text-green-100">
                            {{ $subtitle }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
