<section>
    <div class="max-w-6xl mx-auto px-4 pb-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($product as $item)
            <div class="bg-white rounded-xl shadow border border-gray-200 hover:shadow-lg transition overflow-hidden flex flex-col">

                <div class="w-full h-56 bg-white flex justify-center items-center border-b">
                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"
 class="object-cover w-full h-full transition-transform duration-500 hover:scale-105">
                </div>

                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-semibold text-md text-green-800">{{ $item->name}}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ $item->description }}</p>
                    </div>
                    <div class="flex flex-row justify-between gap-2 mt-4">
                        <a href="#"
                            class="flex items-center gap-2 px-5 py-2 rounded-xl border border-green-600 hover:text-green-800 text-sm font-semibold transition">
                            <!-- Icon Detail (Info) -->
                            <svg class="w-5 h-5 text-green" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z" />
                            </svg>
                            Detail
                        </a>
                        <!-- Tombol Beli via WhatsApp -->
                        <a href="https://wa.me/{{ $wa }}?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($item['title']) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-5 py-2 rounded-xl border bg-green-600 text-white text-sm font-medium hover:bg-green-800 transition">
                            <!-- Icon WhatsApp -->
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M16.12 13.26c-.24-.12-1.42-.7-1.64-.78-.22-.08-.38-.12-.54.12s-.62.78-.76.94c-.14.16-.28.18-.52.06-.24-.12-1.02-.38-1.93-1.23-.71-.63-1.2-1.4-1.34-1.64-.14-.24-.01-.36.11-.48.11-.12.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42s-.54-1.3-.74-1.76c-.2-.48-.4-.42-.54-.42-.14 0-.3 0-.46 0s-.42.06-.64.3c-.22.24-.84.82-.84 2s.86 2.34.98 2.5c.12.16 1.68 2.54 4.1 3.56.57.24 1.02.38 1.36.48.57.18 1.1.16 1.5.1.46-.06 1.42-.58 1.62-1.14.2-.56.2-1.04.14-1.14-.06-.1-.2-.16-.44-.28zM12 2C6.48 2 2 6.48 2 12c0 1.89.5 3.66 1.36 5.18L2 22l4.94-1.3C8.38 21.5 10.13 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2z" />
                            </svg>
                            Beli Via WhatsApp
                        </a>

                        <!-- Tombol Detail -->

                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>