@extends('layouts.public')

@section('content')
<section class="bg-white py-10 sm:py-16">
    <div class="container mx-auto px-4 lg:px-8 max-w-7xl">

        {{-- HEADER ARTIKEL (DI LUAR GRID UTAMA, SEPERTI DI GAMBAR) --}}
        <div class="max-w-6xl mx-auto mb-10 md:mb-12">

            {{-- Breadcrumb / Kategori --}}
            <a href="/experience" class="text-md text-gray-500 hover:text-green-700 transition">
                Pengalaman
            </a>
            <span class="text-sm text-gray-500">/ {{ $experience->category->name ?? 'Proyek' }}</span>

            {{-- Judul Utama --}}
            <h1 class="text-4xl md:text-4xl font-extrabold text-gray-900 mt-2 leading-tight">
                {{ $experience->title }}
            </h1>

            {{-- Meta Info (Penulis & Tanggal) --}}
            <div class="flex items-center text-sm text-gray-500 mt-4">

                <span class="mr-4">
                    <img src="https://picsum.photos/30/30?grayscale" alt="Author" class="inline-block w-8 h-8 rounded-full object-cover mr-2 border border-gray-200">
                    Oleh <span class="font-medium text-gray-700">{{ $experience->user?->name ?? 'Unknown' }}
                    </span>
                </span>

                {{-- Tanggal --}}
                <span class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>{{ $experience->start_date ? $experience->start_date->format('d M Y') : '24 Januari 2025' }}</span>
                </span>
            </div>
        </div>


        @if ($experience->image)
        <figure class="max-w-6xl mx-auto mb-10 md:mb-16 rounded-xl overflow-hidden shadow-lg">
            <img src="{{ asset('storage/' . $experience->image) }}"
                alt="{{ $experience->title }}"
                class="w-full h-auto object-cover max-h-[30rem]">
        </figure>
        @endif


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

                {{-- Latest Post --}}
                <div class="space-y-4">
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2">
                        Latest Post
                    </h3>
                    @foreach ($latestPosts as $post)
                    <a href="{{ route('experience.show', $post->slug) }}" class="flex items-start group">
                        <img src="{{ $post->thumbnail_url ?? 'https://picsum.photos/60/60?random='.$loop->index }}"
                            alt="{{ $post->title }}"
                            class="w-16 h-16 object-cover rounded-md flex-shrink-0 mr-3">
                        <div>
                            <p class="text-sm font-semibold text-gray-800 group-hover:text-green-700 transition leading-snug">
                                {{ Str::limit($post->title, 50) }}
                            </p>
                            <time class="text-xs text-gray-500 mt-1 block">
                                {{ $post->start_date ? $post->start_date->format('M d, Y') : '-' }}
                            </time>
                        </div>
                    </a>
                    @endforeach
                </div>

                {{-- Categories --}}
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2">
                        Categories
                    </h3>
                    <ul class="text-sm space-y-1">
                        @foreach ($categories as $category)
                        <li>
                            <a href="#"
                                class="text-gray-600 hover:text-green-700 flex justify-between">
                                {{ $category->name }} <span>({{ $category->experiences_count }})</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Popular Tags --}}
                <div>
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2 mb-3">
                        Popular Tags
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($tags as $tag)
                        <span class="bg-gray-100 hover:bg-green-100 text-gray-600 hover:text-green-700 px-3 py-1 rounded-full text-xs font-medium transition cursor-pointer">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Social Media --}}
                <div>
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-200 pb-2 mb-3">
                        Social Media
                    </h3>
                    <div class="flex gap-3 text-gray-500">
                        @foreach ($socials as $social)
                        <a href="{{ $social['url'] }}" class="hover:text-green-700 transition">
                            @if($social['icon'] === 'facebook')
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.52 23.36C3.38 23.36 0 20.3 0 16.48v-8.48C0 3.1 3.38 0 7.52 0h8.96C20.62 0 24 3.1 24 7.96v8.48c0 3.82-3.38 6.92-7.52 6.92h-8.96zM8.5 7h7v2h-7V7zm-1 4h9v2h-9v-2zm0 4h9v2h-9v-2z"></path>
                            </svg>
                            @elseif($social['icon'] === 'linkedin')
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">...</svg>
                            @endif
                        </a>
                        @endforeach
                    </div>
                </div>

            </aside>



        </div>
    </div>
</section>
@endsection