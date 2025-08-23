@extends('layouts.public')

@section('content')











<style>
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .scroll-marquee {
        animation: scroll-left 35s linear infinite;
    }

    .scroll-marquee:hover {
        animation-play-state: paused;
    }
</style>

<section id="produk" class="bg-gradient-to-b from-green-50 to-white py-16 text-gray-800 font-poppins overflow-hidden">
    <div class="max-w-full mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-green-700">Jenis Bibit Unggul</h2>
            <p class="text-gray-600 text-sm mt-2">Temukan beragam bibit unggulan berkualitas tinggi</p>
        </div>

        <div class="overflow-hidden relative w-full">
            <div class="flex whitespace-nowrap scroll-marquee">
                @php
                $bibit = [
                ['nama' => 'Alpukat', 'img' => 'alpukat.png'],
                ['nama' => 'Durian', 'img' => 'durian.png'],
                ['nama' => 'Aren', 'img' => 'aren.png'],
                ['nama' => 'Pinang', 'img' => 'pinang.png'],
                ['nama' => 'Mangga', 'img' => 'mangga.png'],
                ['nama' => 'Duku', 'img' => 'duku.png'],
                ['nama' => 'Jengkol', 'img' => 'jengkol.png'],
                ['nama' => 'Petai', 'img' => 'petai.png'],
                ['nama' => 'Kopi', 'img' => 'kopi.png'],
                ['nama' => 'Bambu Kuning', 'img' => 'bambu.png'],
                ['nama' => 'Durian Musang King', 'img' => 'musangking.png'],
                ];
                $colors = ['bg-green-100', 'bg-yellow-100', 'bg-emerald-100', 'bg-lime-100', 'bg-teal-100', 'bg-blue-100'];
                @endphp

                @foreach (array_merge($bibit, $bibit) as $i => $item)
                <div class="min-w-[180px] max-w-xs mx-2 px-4 py-3 shadow-md border rounded-xl {{ $colors[$i % count($colors)] }} flex flex-col items-center justify-center text-center hover:shadow-lg transition">
                    <div class="w-12 h-12 mb-2 rounded-full bg-white flex items-center justify-center shadow-inner overflow-hidden">
                        <img src="{{ asset('images/buah/' . $item['img']) }}" alt="{{ $item['nama'] }}" class="w-full h-full object-contain">
                    </div>
                    <span class="font-medium text-gray-800 text-sm">{{ $item['nama'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>




@endsection