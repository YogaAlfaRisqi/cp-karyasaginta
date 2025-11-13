<section class="bg-gray-50 py-20 sm:py-32" id="experience">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
 
        {{-- GRID PROJECTS --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12"> {{-- Tambah gap-y-12 untuk ruang vertikal yang lega --}}
            @foreach($experiences as $exp)
                <a href="{{ route('experience.show', $exp['slug']) }}"
                   class="group block p-0 transition duration-300"> {{-- Hapus semua styling card (bg-white, shadow, rounded) --}}
                    
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="{{ asset('storage/' . $exp->image) }}"
                             alt="{{ $exp['title'] }}"
                             class="w-full h-56 object-cover">
                    </div>
                    

                    <div class="px-0">
                        

                        <h3 class="text-xl font-bold text-gray-900 leading-snug group-hover:text-green-600 transition duration-300">
                            {{ $exp['title'] }}
                        </h3>
                        
                        <p class="text-base text-gray-600 mt-1 mb-3 line-clamp-2"> 
                            {{ $exp['slug'] ?? 'Proyek pengadaan dan penyaluran bibit unggul di wilayah tertentu.' }}
                        </p>
                        

                        <div class="flex items-center text-sm text-gray-500 mt-2">
                            {{-- Ikon Penulis/User (Jika ada) --}}
                            <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span class="font-medium mr-4">
                                {{ $exp['author'] ?? 'CV Karya Saginta' }}
                            </span>
                            
                            {{-- Tanggal --}}
                            <span class="font-medium">
                                {{ \Carbon\Carbon::parse($exp['date'])->translatedFormat('d M Y') ?? 'N/A' }}
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>