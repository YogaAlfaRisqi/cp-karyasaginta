<section class="max-w-6xl mx-auto px-4 sm:px-4 lg:px-4 mb-12"> {{-- Wrapper untuk konten --}}

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> {{-- Grid untuk 2 kolom di md ke atas, 1 kolom di mobile --}}

        {{-- CARD PERTAMA: TRANSFORM YOUR BALCONY (Kiri Atas) --}}
        <div class="relative bg-gradient-to-br from-green-50 to-green-100 rounded-3xl p-8 overflow-hidden 
                    flex flex-col justify-between min-h-[250px] shadow-sm">
            
            {{-- Background Shape 1 (Bunga Besar - Kiri Atas) --}}
            <div class="absolute top-0 left-0 -translate-x-1/4 -translate-y-1/4 w-48 h-48 bg-green-200 rounded-full opacity-50"></div>
            <svg class="absolute top-0 left-0 -translate-x-1/4 -translate-y-1/4 w-48 h-48 text-green-700 opacity-80" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8zM11 6h2v6h-2zM11 14h2v2h-2z"/>
                {{-- Ini adalah icon matahari sederhana, bisa diganti dengan icon daun/bunga yang lebih kompleks --}}
            </svg>
            {{-- Anda mungkin perlu menggunakan SVG yang lebih kompleks untuk bunga yang persis di gambar --}}


            <div class="relative z-10"> {{-- Konten agar di atas background --}}
                <h3 class="text-2xl md:text-3xl font-extrabold text-green-800 mb-2 leading-tight">
                    Perbarui Kebun Anda,<br>Ciptakan Suasana Hijau
                </h3>
                <p class="text-green-700 text-sm mb-4 max-w-[70%]">
                    Jelajahi koleksi bibit pilihan yang siap mengubah halaman rumah Anda.
                </p>
                <a href=""
                    class="inline-block px-5 py-2 bg-green-700 hover:bg-green-800 text-white rounded-lg text-sm font-medium transition">
                    Jelajahi Bibit Hias
                </a>
            </div>
        </div>

        {{-- CARD KEDUA: HEALTHY ROOTS, HAPPY PLANTS (Kanan Bawah) --}}
        <div class="relative bg-gradient-to-tl from-green-50 to-emerald-100 rounded-3xl p-8 overflow-hidden 
                    flex flex-col justify-between min-h-[250px] shadow-sm">
            
            {{-- Background Shape 2 (Bunga Besar - Kanan Bawah) --}}
            <div class="absolute bottom-0 right-0 translate-x-1/4 translate-y-1/4 w-48 h-48 bg-green-200 rounded-full opacity-50"></div>
            <svg class="absolute bottom-0 right-0 translate-x-1/4 translate-y-1/4 w-48 h-48 text-emerald-700 opacity-80" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8zM11 6h2v6h-2zM11 14h2v2h-2z"/>
                {{-- Icon Bunga atau Daun --}}
            </svg>

            <div class="relative z-10 self-end text-right"> {{-- Konten agar di atas background, dan rata kanan --}}
                <h3 class="text-2xl md:text-3xl font-extrabold text-emerald-800 mb-2 leading-tight">
                    Bibit Sehat, <br>Tanaman Ceria
                </h3>
                <p class="text-emerald-700 text-sm mb-4 max-w-[70%] ml-auto"> {{-- ml-auto untuk rata kanan --}}
                    Berikan nutrisi terbaik dengan produk perawatan bibit kami.
                </p>
                <a href=""
                    class="inline-block px-5 py-2 bg-emerald-700 hover:bg-emerald-800 text-white rounded-lg text-sm font-medium transition">
                    Lihat Produk Perawatan
                </a>
            </div>
        </div>

    </div>
</section>