<section id="klien" class="bg-gradient-to-b from-white via-green-50 to-white py-16 font-poppins" data-aos="fade-right" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-2">Client Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
                CV Karya Saginta telah dipercaya oleh berbagai instansi dan perusahaan dalam penyediaan bibit unggul dan solusi kehutanan yang berkelanjutan.
            </p>
        </div>

        <!-- Client Cards -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @php
            $clients = [
            ['logo' => 'ks.jpg', 'name' => 'Kementerian Pertanian'],
            ['logo' => 'ks.jpg', 'name' => 'Perhutani'],
            ['logo' => 'ks.jpg', 'name' => 'Dinas Kehutanan'],
            ['logo' => 'ks.jpg', 'name' => 'BUMN Perkebunan'],
            ['logo' => 'ks.jpg', 'name' => 'Pemerintah Daerah'],
            ['logo' => 'ks.jpg', 'name' => 'Perusahaan Swasta'],
            ['logo' => 'ks.jpg', 'name' => 'Universitas Mitra'],
            ['logo' => 'ks.jpg', 'name' => 'Komunitas Tani'],
            ];
            @endphp

            @foreach ($clients as $client)
            <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition text-center">
                <div class="h-20 mb-3 flex items-center justify-center">
                    <img src="{{ asset('images/' . $client['logo']) }}" alt="{{ $client['name'] }}" class="h-full object-contain" />
                </div>
                <h4 class="text-sm text-gray-700 font-medium">{{ $client['name'] }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>