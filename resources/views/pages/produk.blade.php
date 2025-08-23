@extends('layouts.public')

@section('content')

<section class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins text-gray-800">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Header + Search/Filter -->
<div class="bg-gradient-to-r from-green-50 via-white to-green-50 rounded-2xl p-6 shadow-sm mb-10">
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
        <select class="w-full py-2 pl-4 pr-10 rounded-2xl border border-gray-300 bg-white text-sm focus:ring-2 focus:ring-green-400 focus:outline-none shadow-sm">
          <option value="">Semua Kategori</option>
          <option value="buah">Bibit Buah</option>
          <option value="kayu">Bibit Kayu</option>
          <option value="hortikultura">Hortikultura</option>
          <option value="perkebunan">Perkebunan</option>
        </select>
        <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
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



        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $produk = [
            ['img' => 'KS.jpg', 'title' => 'Bibit Alpukat Mentega', 'desc' => 'Cocok untuk dataran rendah dan tinggi.'],
            ['img' => 'KS.jpg', 'title' => 'Durian Musang King', 'desc' => 'Rasa manis legit dan produktivitas tinggi.'],
            ['img' => 'KS.jpg', 'title' => 'Mangga Harum Manis', 'desc' => 'Bibit cepat tumbuh dan berbuah besar.'],
            ['img' => 'KS.jpg', 'title' => 'Bibit Duku Super', 'desc' => 'Manis dan cocok di iklim tropis.'],
            ['img' => 'KS.jpg', 'title' => 'Petai Jumbo', 'desc' => 'Cocok untuk kebutuhan pasar dan dapur.'],
            ['img' => 'KS.jpg', 'title' => 'Bibit Kopi Arabika', 'desc' => 'Tahan penyakit dan hasil berkualitas.'],
            ];
            $wa = '628126527016';
            @endphp

            @foreach ($produk as $item)
            <div class="bg-white rounded-xl shadow border border-gray-200 hover:shadow-lg transition overflow-hidden flex flex-col">
                <div class="h-40 bg-white flex justify-center items-center border-b">
                    <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" class="h-32 object-contain">
                </div>
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-semibold text-md text-green-800">{{ $item['title'] }}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ $item['desc'] }}</p>
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




@endsection