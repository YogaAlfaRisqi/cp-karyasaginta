@extends('layouts.public')

@section('content')
<section class="bg-gray-50 py-16">
  <div class="container mx-auto px-4 lg:px-8 grid lg:grid-cols-3 gap-10">

    <!-- Kolom Kiri: Detail Pengalaman -->
    <article
      class="lg:col-span-2 bg-white rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden">

      <!-- Gambar Utama -->
      @if ($experience->image)
      <figure class="relative">
        <img
          src="{{ asset('storage/' . $experience->image) }}"
          alt="{{ $experience->title }}"
          class="w-full h-64 sm:h-80 lg:h-[28rem] object-cover">
        <figcaption
          class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent px-6 py-4 text-white">
          <h1 class="text-xl sm:text-3xl font-semibold drop-shadow-md">
            {{ $experience->title }}
          </h1>
        </figcaption>
      </figure>
      @endif

      <!-- Konten -->
      <div class="p-6 sm:p-8 lg:p-10 space-y-10 leading-relaxed">

        <!-- Subjudul -->
        @if ($experience->subtitle)
        <p class="text-xl text-gray-700 font-medium italic border-l-4 border-green-500 pl-4">
          “{{ $experience->subtitle }}”
        </p>
        @endif

        <!-- Ringkasan -->
        @if ($experience->summary)
        <section class="bg-green-50 border border-green-100 p-6 rounded-2xl shadow-sm">
          <h3 class="text-green-700 font-semibold mb-2">Ringkasan</h3>
          <p class="text-gray-700 text-base leading-relaxed">
            {!! nl2br(e($experience->summary)) !!}
          </p>
        </section>
        @endif

        <!-- Isi / Konten -->
        @if ($experience->content)
        <section class="prose prose-lg max-w-none text-gray-800 prose-green prose-headings:text-green-800">
          {!! nl2br(e($experience->content)) !!}
        </section>
        @endif

        <!-- Galeri -->
        @if (!empty($experience->gallery))
        <section>
          <h3 class="text-xl font-semibold text-green-800 mb-4 border-b border-gray-100 pb-1">Galeri Kegiatan</h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            @foreach ($experience->gallery as $img)
            <div
              class="overflow-hidden rounded-xl shadow-sm hover:shadow-md hover:-translate-y-1 transform transition-all duration-300">
              <img src="{{ asset('storage/' . $img) }}" alt="Gallery"
                class="w-full h-40 object-cover rounded-xl hover:opacity-90 transition duration-200">
            </div>
            @endforeach
          </div>
        </section>
        @endif

        <!-- Informasi Tambahan -->
        <section class="border-t border-gray-200 pt-6 text-sm text-gray-700 grid sm:grid-cols-2 gap-3">
          @if ($experience->location)
          <p><strong class="text-green-700">📍 Lokasi:</strong> {{ $experience->location }}</p>
          @endif

          @if ($experience->partner)
          <p><strong class="text-green-700">🤝 Mitra:</strong> {{ $experience->partner }}</p>
          @endif

          @if ($experience->start_date || $experience->end_date)
          <p class="sm:col-span-2">
            <strong class="text-green-700">🗓️ Periode:</strong>
            {{ $experience->start_date ? $experience->start_date->format('d M Y') : '–' }}
            s.d.
            {{ $experience->is_current ? 'Sekarang' : ($experience->end_date ? $experience->end_date->format('d M Y') : '–') }}
          </p>
          @endif
        </section>

        <!-- Tag & Statistik -->
        <section class="border-t border-gray-100 pt-6 flex flex-wrap items-center justify-between gap-4">
          <div class="flex flex-wrap items-center gap-2">
            <span
              class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1 rounded-full font-semibold text-xs sm:text-sm">
              🌿 {{ $experience->category->name ?? 'Tanpa Kategori' }}
            </span>

            @if ($experience->tags)
            @foreach ($experience->tags as $tag)
            <span
              class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-2.5 py-1 rounded-full text-xs font-medium transition">
              #{{ $tag }}
            </span>
            @endforeach
            @endif
          </div>

          <div class="text-gray-500 text-xs flex items-center gap-1">
            👁️ <span>{{ $experience->views ?? 0 }}</span> kali dilihat
          </div>
        </section>

      </div>

    </article>

    <!-- Kolom Kanan: Pengalaman Lainnya -->
    <aside class="space-y-6">
      <h2 class="text-xl font-bold text-green-800 border-b pb-2">
        Pengalaman & Kegiatan Lainnya
      </h2>

      @forelse ($relatedExperiences as $item)
      <article class="bg-white rounded-xl p-5 border border-gray-100 hover:shadow-md transition group">

        <div class="mb-3">
          <a href="{{ route('experience.show', $item->slug) }}"
            class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-green-800 transition">
            {{ Str::limit($item->title, 80) }}
          </a>
          @if ($item->subtitle)
          <p class="text-sm text-gray-500 mt-1">{{ Str::limit($item->subtitle, 100) }}</p>
          @endif
        </div>

        <div class="flex items-center justify-between">
          <span
            class="inline-flex items-center text-xs font-semibold px-2.5 py-1 rounded-2xl bg-green-100 text-green-700">
            {{ $item->category->name ?? 'Umum' }}
          </span>
          @if ($item->start_date)
          <time class="text-xs text-gray-500">{{ $item->start_date->format('M d, Y') }}</time>
          @endif
        </div>
      </article>
      @empty
      <p class="text-gray-500 text-sm italic">Belum ada pengalaman lainnya.</p>
      @endforelse
    </aside>

  </div>
</section>
@endsection