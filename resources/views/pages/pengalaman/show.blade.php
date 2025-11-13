@extends('layouts.public')

@section('content')
<section class="bg-white py-10 sm:py-16">
    <div class="container mx-auto px-4 lg:px-8 max-w-7xl">
        
        {{-- HEADER ARTIKEL (DI LUAR GRID UTAMA, SEPERTI DI GAMBAR) --}}
        <div class="max-w-6xl mx-auto mb-10 md:mb-12">
            
            {{-- Breadcrumb / Kategori --}}
            <a href="/experience" class="text-sm text-gray-500 hover:text-green-700 transition">
                Pengalaman
            </a> 
            <span class="text-sm text-gray-500">/ {{ $experience->category->name ?? 'Proyek' }}</span>

            {{-- Judul Utama --}}
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2 leading-tight">
                {{ $experience->title }}
            </h1>

            {{-- Meta Info (Penulis & Tanggal) --}}
            <div class="flex items-center text-sm text-gray-500 mt-4">
                {{-- Nama Penulis (Jika ada) --}}
                <span class="mr-4">
                    <img src="https://picsum.photos/30/30?grayscale" alt="Author" class="inline-block w-8 h-8 rounded-full object-cover mr-2 border border-gray-200">
                    Oleh <span class="font-medium text-gray-700">Sarah Winter / Tim CVKS</span>
                </span>
                
                {{-- Tanggal --}}
                <span class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>{{ $experience->start_date ? $experience->start_date->format('d M Y') : '24 Januari 2025' }}</span>
                </span>
            </div>
        </div>

        {{-- GAMBAR UTAMA (FEATURED IMAGE) --}}
        @if ($experience->image)
        <figure class="max-w-6xl mx-auto mb-10 md:mb-16 rounded-xl overflow-hidden shadow-lg">
            <img src="{{ asset('storage/' . $experience->image) }}"
                 alt="{{ $experience->title }}"
                 class="w-full h-auto object-cover max-h-[30rem]">
        </figure>
        @endif
        
        {{-- GRID UTAMA KONTEN & SIDEBAR --}}
        <div class="grid lg:grid-cols-12 gap-10 px-auto ml-6">

            <article class="lg:col-span-8">
            
                <div class="space-y-6 leading-relaxed">
                    
                    @if ($experience->summary)
                    <p class="text-lg text-gray-700 font-medium">
                        {!! nl2br(e($experience->summary)) !!}
                    </p>
                    @endif

                    @if ($experience->content)
                    <section class="prose prose-lg max-w-none text-gray-800 prose-green prose-headings:text-green-800">
                        {!! nl2br(e($experience->content)) !!}
                    </section>
                    @endif
                    
                    <section class="border-t border-gray-200 pt-6 text-sm text-gray-700 grid sm:grid-cols-2 gap-3">
                        @if ($experience->location)
                        <p><strong class="text-green-700">📍 Lokasi:</strong> {{ $experience->location }}</p>
                        @endif
                        @if ($experience->partner)
                        <p><strong class="text-green-700">🤝 Mitra:</strong> {{ $experience->partner }}</p>
                        @endif
                    </section>

                </div>

            </article>

            <aside class="lg:col-span-4 lg:pl-6 space-y-8">

                {{-- 1. LATEST POST (POSTINGAN TERBARU) --}}
                <div class="space-y-4">
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2">
                        Latest Post
                    </h3>
                    @for ($i = 0; $i < 3; $i++) {{-- Loop untuk 3 postingan terbaru --}}
                    <a href="#" class="flex items-start group">
                        <img src="https://picsum.photos/60/60?random={{ $i + 1 }}" alt="Latest Post" class="w-16 h-16 object-cover rounded-md flex-shrink-0 mr-3">
                        <div>
                            <p class="text-sm font-semibold text-gray-800 group-hover:text-green-700 transition leading-snug">
                                {{ Str::limit("Proyek Pengadaan Bibit Unggul Terbaru ke-".($i+1), 50) }}
                            </p>
                            <time class="text-xs text-gray-500 mt-1 block">Jan 5, 2025</time>
                        </div>
                    </a>
                    @endfor
                </div>

                {{-- 2. CATEGORIES (KATEGORI) --}}
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2">
                        Categories
                    </h3>
                    <ul class="text-sm space-y-1">
                        <li><a href="#" class="text-gray-600 hover:text-green-700 flex justify-between">Pertanian <span>(12)</span></a></li>
                        <li><a href="#" class="text-gray-600 hover:text-green-700 flex justify-between">Perkebunan <span>(8)</span></a></li>
                        <li><a href="#" class="text-gray-600 hover:text-green-700 flex justify-between">Hortikultura <span>(5)</span></a></li>
                    </ul>
                </div>

                {{-- 3. POPULAR TAGS --}}
                <div>
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2 mb-3">
                        Popular Tags
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach (['#BibitUnggul', '#Mangga', '#Durian', '#Reboisasi', '#JawaBarat'] as $tag)
                        <span class="bg-gray-100 hover:bg-green-100 text-gray-600 hover:text-green-700 px-3 py-1 rounded-full text-xs font-medium transition cursor-pointer">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- 4. SOCIAL MEDIA --}}
                <div>
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2 mb-3">
                        Social Media
                    </h3>
                    <div class="flex gap-3 text-gray-500">
                        {{-- Placeholder Icons --}}
                        <a href="#" class="hover:text-green-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.52 23.36C3.38 23.36 0 20.3 0 16.48v-8.48C0 3.1 3.38 0 7.52 0h8.96C20.62 0 24 3.1 24 7.96v8.48c0 3.82-3.38 6.92-7.52 6.92h-8.96zM8.5 7h7v2h-7V7zm-1 4h9v2h-9v-2zm0 4h9v2h-9v-2z"></path></svg>
                        </a>
                        <a href="#" class="hover:text-green-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm4 0h-2v-6h2v6zm1.78-9h-1.56a.78.78 0 000 1.56h1.56a.78.78 0 100-1.56z"></path></svg>
                        </a>
                        {{-- Tambahkan ikon lain sesuai gambar (Instagram, Twitter, dll.) --}}
                    </div>
                </div>

            </aside>

        </div>
    </div>
</section>
@endsection