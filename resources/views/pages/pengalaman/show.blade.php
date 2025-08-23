@extends('layouts.public')

@section('content')
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    
    <a href="{{ route('landingpage') }}" class="text-green-700 hover:underline mb-6 inline-block">
      &larr; Kembali ke Beranda
    </a>

    <div class="max-w-4xl mx-auto bg-white shadow rounded-lg overflow-hidden">
      
      <!-- Gambar Utama -->
      <img src="{{ asset($experience['image']) }}" alt="{{ $experience['title'] }}"
           class="w-full h-64 object-cover object-center">

      <div class="p-6 space-y-4">
        <!-- Judul -->
        <h1 class="text-3xl font-bold text-green-800">{{ $experience['title'] }}</h1>

        <!-- Subjudul -->
        @if(!empty($experience['subtitle']))
          <p class="text-lg text-gray-700">{{ $experience['subtitle'] }}</p>
        @endif

        <!-- Info Lokasi & Tanggal -->
        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
          @if(!empty($experience['location']))
            <div class="flex items-center gap-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3c4.243 0 7.75 3.507 7.75 7.75S12 21 12 21s-7.75-6.257-7.75-10.25S7.757 3 12 3z"/>
              </svg>
              <span>{{ $experience['location'] }}</span>
            </div>
          @endif

          @if(!empty($experience['date']))
            <div class="flex items-center gap-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3M3.75 9h16.5M4.5 9v10.5A1.5 1.5 0 006 21h12a1.5 1.5 0 001.5-1.5V9"/>
              </svg>
              <span>{{ $experience['date'] }}</span>
            </div>
          @endif
        </div>

        <!-- Deskripsi -->
        <div class="text-base text-gray-800 leading-relaxed pt-4 border-t">
          {!! nl2br(e($experience['content'])) !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
