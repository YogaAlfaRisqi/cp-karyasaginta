<!-- Header + Search/Filter -->
<section class="bg-gradient-to-b from-white via-green-50 to-white py-4 font-poppins text-gray-800">
    <div class="mx-auto">
        <!-- Banner -->
        <div class="relative overflow-hidden mb-10 shadow-lg">
            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1600&q=80"
                alt="Banner Bibit Unggul"
                class="w-full h-64 lg:h-[40vh] object-cover" />

            <div class="absolute inset-0 bg-green-900/40 flex items-center justify-center">
                <div class="text-center text-white px-6">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">Bibit Unggul untuk Masa Depan Hijau</h1>
                    <p class="text-sm md:text-base text-green-100">Kualitas terbaik untuk hasil panen melimpah dan berkelanjutan</p>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-green-50 via-white to-green-50 rounded-2xl px-10 mx-2 lg:mx-20 xl:100 py-4 shadow-sm mb-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <!-- Judul -->
                <div>
                    <h2 class="text-3xl font-bold text-green-700 mb-1">Produk Bibit Unggul</h2>
                    <p class="text-sm text-gray-600">Temukan bibit terbaik sesuai kebutuhan pertanian dan kehutanan Anda.</p>
                </div>

                <!-- Search + Filter -->
                <div class="flex flex-col md:flex-row md:items-center gap-4 w-full md:w-auto">

                    <!-- Filter -->
                    <div class="relative w-full md:w-48">
                        <select
                            class="w-full py-2 pl-4 pr-10 rounded-2xl border border-gray-300 bg-white text-sm focus:ring-2 focus:ring-green-400 focus:outline-none shadow-sm appearance-none">
                            <option value="">Semua Kategori</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $filters['kategori'] == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                            @endforeach
                        </select>

                        <!-- Custom arrow -->
                        <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>


                    <!-- Search -->
                    <div class="relative w-full md:w-64">
                        <input type="text" placeholder="Cari bibit..."
                            class="w-full py-2 pl-4 pr-10 rounded-2xl border border-gray-300 bg-white focus:ring-2 focus:ring-green-400 focus:outline-none shadow-sm text-sm" />
                        <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>