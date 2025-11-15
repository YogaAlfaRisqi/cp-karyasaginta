<section class="bg-gray-50 py-20 sm:py-32" id="experiences-home">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER SECTION HOME --}}
        <div class="text-center mb-16">
            <p class="text-sm font-semibold text-green-600 uppercase tracking-widest mb-2">
                Dampak Nyata & Kontribusi Kami
            </p>

            {{-- Judul Utama --}}
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-900 leading-tight">
                Kisah Sukses <br>Proyek Terbaru
            </h2>

            {{-- Deskripsi --}}
            <p class="text-lg text-gray-600 mt-4 max-w-3xl mx-auto">
                Lihat studi kasus dan laporan keberhasilan terbaru dari proyek pengadaan dan penyaluran bibit unggul CV Karya Saginta di seluruh Indonesia.
            </p>
        </div>

        {{-- GRID PROJECTS (Minimalis) --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
            @forelse($experiences as $exp) {{-- Gunakan @forelse untuk handle data kosong --}}
            <a href="{{ route('experience.show', $exp['slug']) }}"
                class="group block p-0 transition duration-300 hover:opacity-80">

                {{-- 1. AREA GAMBAR --}}
                <div class="relative overflow-hidden rounded-xl mb-4">
                    <img src="{{ asset('storage/' . $exp->image) }}"
                        alt="{{ $exp['title'] }}"
                        class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-[1.03]"> {{-- Tambahkan efek hover --}}
                </div>

                {{-- 2. AREA TEKS --}}
                <div class="px-0">

                    {{-- Kategori (di atas Judul, seperti blog modern) --}}
                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wider mb-1">
                        {{ $exp['category']->name ?? 'Studi Kasus' }}
                    </p>

                    <h3 class="text-xl font-bold text-gray-900 leading-snug transition duration-300">
                        {{ $exp['title'] }}
                    </h3>

                    {{-- Ringkasan / Deskripsi Singkat --}}
                    <p class="text-base text-gray-600 mt-1 mb-3 line-clamp-2">
                        {{ $exp['subtitle'] ?? $exp['slug'] ?? 'Proyek pengadaan dan penyaluran bibit unggul di wilayah tertentu.' }}
                    </p>

                    {{-- META INFO (Penulis & Tanggal) --}}
                    <div class="flex items-center text-sm text-gray-500 mt-2">
                        {{-- Ikon & Penulis --}}
                        <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="font-medium mr-4">
                            {{ $exp['author'] ?? 'Tim CVKS' }}
                        </span>

                        {{-- Tanggal --}}
                        <span class="font-medium">
                            {{ \Carbon\Carbon::parse($exp['date'] ?? now())->translatedFormat('d M Y') }}
                        </span>
                    </div>
                </div>
            </a>
            @empty
            <p class="col-span-3 text-center text-gray-500 italic">Belum ada data proyek atau pengalaman untuk ditampilkan.</p>
            @endforelse
        </div>

        {{-- FOOTER SECTION (Tombol Aksi) --}}
        <div class="text-center mt-16">
            <a href=""
                class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full shadow-md text-white bg-green-600 hover:bg-green-700 transition duration-300">
                Lihat Semua Proyek Kami
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>

    </div>
</section>