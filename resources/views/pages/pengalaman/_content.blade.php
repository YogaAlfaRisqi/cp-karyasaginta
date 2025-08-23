<section class="bg-white py-16" id="experience">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <h2 class="text-3xl font-bold text-center text-green-700 mb-4">Pengalaman Proyek</h2>
    <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
      Beberapa proyek pengadaan dan penyaluran bibit unggulan oleh CV Karya Saginta dalam bidang pertanian, perkebunan, kehutanan, dan hortikultura.
    </p>

    <!-- Grid Projects -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($experiences as $exp)
        <a href="{{ route('experiences.show', $exp['slug']) }}"
           class="group block bg-gray-50 rounded-xl shadow hover:shadow-md transition p-5">
          
          <img src="{{ asset($exp['image']) }}"
               alt="{{ $exp['title'] }}"
               class="w-full h-48 object-cover rounded-md mb-4 group-hover:scale-105 transition-transform duration-300">
          
          <h3 class="text-xl font-semibold text-green-800 group-hover:underline">
            {{ $exp['title'] }}
          </h3>
          <p class="text-sm text-gray-600 mt-2">{{ $exp['subtitle'] }}</p>
        </a>
      @endforeach
    </div>
  </div>
</section>
