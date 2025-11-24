@extends('layouts.public')

@section('content')
{{-- HERO --}}
<section class="relative w-full overflow-hidden">
  <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png"
       alt="Hero"
       class="absolute inset-0 w-full h-full object-cover">

  <div class="absolute inset-0 bg-green-900/75"></div>

  <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-28">
    <div class="max-w-3xl text-white">
      <p class="text-sm text-green-200 uppercase tracking-wider mb-2">Welcome to Pasaggio</p>

      <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-4">
        Trusted by Millions, Backed by One with <span class="text-green-300">Pasaggio</span>
      </h1>

      <p class="text-base md:text-lg text-green-100 mb-6 leading-relaxed">
        Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s.
      </p>

      <div class="flex items-center gap-4">
        <a href="#about" class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 px-5 py-3 rounded-full text-white font-medium shadow">
          About Us
        </a>

        <a href="#" class="inline-flex items-center gap-2 border border-green-300 text-green-100 px-4 py-2 rounded-full">
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

{{-- ABOUT / PROFILE (three-column like reference) --}}
<section id="about" class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

      {{-- LEFT: vertical stacked circular images --}}
      <div class="lg:col-span-3 flex justify-center lg:justify-start">
        <div class="space-y-6">
          <div class="w-40 h-40 rounded-full overflow-hidden shadow-lg ring-4 ring-white">
            <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" alt="circle1" class="w-full h-full object-cover">
          </div>

          <div class="w-36 h-36 rounded-full overflow-hidden shadow-lg ring-4 ring-white -mt-6">
            <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" alt="circle2" class="w-full h-full object-cover">
          </div>

          <div class="w-28 h-28 rounded-full overflow-hidden shadow-lg ring-4 ring-white -mt-8">
            <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" alt="circle3" class="w-full h-full object-cover">
          </div>
        </div>
      </div>

      {{-- CENTER: main about text --}}
      <div class="lg:col-span-6">
        <div class="mb-4">
          <span class="text-sm text-green-600 uppercase">Our About us</span>
        </div>

        <h2 class="text-2xl md:text-3xl font-bold text-green-800 mb-4">
          At the Heart of the World's Favorite Foods
        </h2>

        <p class="text-gray-700 leading-relaxed mb-6">
          Pasaggio Foods Group is a global food company that serves and the planet is a growing family of household food brands across groceries, quick service, health foods and more.
        </p>

        <div class="flex items-center gap-4">
          <a href="#mission" class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 px-4 py-2 rounded-full text-white font-medium shadow">
            Discover More
          </a>

          <div class="text-sm text-gray-500">
            <div>Call Now</div>
            <div class="text-green-700 font-semibold">+62 812-3456-7890</div>
          </div>
        </div>
      </div>

      {{-- RIGHT: 4 info blocks (icons + short text) --}}
      <div class="lg:col-span-3 space-y-4">
        <div class="bg-green-50 border border-green-100 p-4 rounded-xl shadow-sm">
          <h4 class="text-sm font-semibold text-green-700 mb-1">Our Story</h4>
          <p class="text-sm text-gray-600">From humble beginnings to national supplier.</p>
        </div>

        <div class="bg-green-50 border border-green-100 p-4 rounded-xl shadow-sm">
          <h4 class="text-sm font-semibold text-green-700 mb-1">Our Values</h4>
          <p class="text-sm text-gray-600">Quality, Integrity, Sustainability.</p>
        </div>

        <div class="bg-green-50 border border-green-100 p-4 rounded-xl shadow-sm">
          <h4 class="text-sm font-semibold text-green-700 mb-1">Corporate Values</h4>
          <p class="text-sm text-gray-600">Professionalism & trust for partners.</p>
        </div>

        <div class="bg-green-50 border border-green-100 p-4 rounded-xl shadow-sm">
          <h4 class="text-sm font-semibold text-green-700 mb-1">Global Reach</h4>
          <p class="text-sm text-gray-600">Projects across islands & regions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- BRAND / 'Meet the Company Behind the Brands' --}}
<section class="py-16 bg-green-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-left mb-8">
      <span class="text-sm text-green-600 uppercase">Our Brand</span>
      <h3 class="text-2xl md:text-3xl font-bold text-green-800 mt-2">Meet the Company Behind the Brands</h3>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-4 gap-6">
      {{-- Example brand cards; replace imgs --}}
      <div class="bg-white rounded-2xl p-4 shadow flex flex-col items-start gap-3">
        <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" class="w-full h-28 object-cover rounded-lg" alt="brand1">
        <h4 class="text-green-700 font-semibold">Bourbon</h4>
        <a href="#" class="mt-auto inline-block text-sm text-green-600 font-medium">See More →</a>
      </div>

      <div class="bg-white rounded-2xl p-4 shadow flex flex-col items-start gap-3">
        <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" class="w-full h-28 object-cover rounded-lg" alt="brand2">
        <h4 class="text-green-700 font-semibold">Treat</h4>
        <a href="#" class="mt-auto inline-block text-sm text-green-600 font-medium">See More →</a>
      </div>

      <div class="bg-white rounded-2xl p-4 shadow flex flex-col items-start gap-3">
        <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" class="w-full h-28 object-cover rounded-lg" alt="brand3">
        <h4 class="text-green-700 font-semibold">Pure Magic</h4>
        <a href="#" class="mt-auto inline-block text-sm text-green-600 font-medium">See More →</a>
      </div>

      <div class="bg-white rounded-2xl p-4 shadow flex flex-col items-start gap-3">
        <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" class="w-full h-28 object-cover rounded-lg" alt="brand4">
        <h4 class="text-green-700 font-semibold">Biscola</h4>
        <a href="#" class="mt-auto inline-block text-sm text-green-600 font-medium">See More →</a>
      </div>
    </div>
  </div>
</section>

{{-- MISSION & IMPACT --}}
<section id="mission" class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

      <div class="lg:col-span-7">
        <span class="text-sm text-green-600 uppercase mb-2 inline-block">Our Mission and Impact</span>
        <h3 class="text-2xl md:text-3xl font-bold text-green-800 my-4">Feeding the Future, One Family at a Time</h3>

        <p class="text-gray-700 mb-6 leading-relaxed">
          We are building a movement to healthier families and communities through sustainable sourcing and nutritious products.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl shadow-sm">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white flex items-center justify-center ring-2 ring-green-100">
              <!-- icon -->
              <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M7 7v10a4 4 0 004 4h2a4 4 0 004-4V7"/>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-green-700">Nutrition First</h4>
              <p class="text-sm text-gray-600">We prioritize nutrient-rich crops and seedlings.</p>
            </div>
          </div>

          <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl shadow-sm">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white flex items-center justify-center ring-2 ring-green-100">
              <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 2-4 2-4 4v2h8v-2c0-2-4-2-4-4z"/>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-green-700">Community</h4>
              <p class="text-sm text-gray-600">Empowering farmers and local partners.</p>
            </div>
          </div>

          <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl shadow-sm">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white flex items-center justify-center ring-2 ring-green-100">
              <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M12 3v18"/>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-green-700">Sustainability</h4>
              <p class="text-sm text-gray-600">Responsible sourcing & reforestation.</p>
            </div>
          </div>

          <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl shadow-sm">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white flex items-center justify-center ring-2 ring-green-100">
              <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-green-700">Accessibility</h4>
              <p class="text-sm text-gray-600">Products accessible to wider communities.</p>
            </div>
          </div>
        </div>
      </div>

      {{-- RIGHT: large rounded image --}}
      <div class="lg:col-span-5">
        <div class="w-full rounded-2xl overflow-hidden shadow-lg">
          <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" alt="mission" class="w-full h-[420px] object-cover">
        </div>
      </div>
    </div>
  </div>
</section>

{{-- PRODUCTS --}}
<section class="py-16 bg-green-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between mb-8">
      <div>
        <span class="text-sm text-green-600 uppercase">Our Products</span>
        <h3 class="text-2xl md:text-3xl font-bold text-green-800 mt-2">Products You'll Love</h3>
      </div>
      <a href="#" class="text-sm bg-white px-4 py-2 rounded-full shadow text-green-700">See All Products</a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
      @foreach($products ?? [1,2,3,4] as $p)
      <div class="bg-white rounded-2xl p-4 shadow flex flex-col">
        <div class="w-full h-36 rounded-xl overflow-hidden mb-3">
          <img src="/mnt/data/a2bccdee-8962-4260-8a5c-0e5f5282a2eb.png" alt="product" class="w-full h-full object-cover">
        </div>
        <h4 class="text-green-800 font-semibold mb-2">{{ is_object($p) ? $p->name : 'Sample Product' }}</h4>
        <p class="text-sm text-gray-600 mb-4 flex-1">Short product description that fits two lines and entices customers to click through.</p>
        <div class="flex items-center justify-between">
          <a href="#" class="inline-flex items-center gap-2 bg-green-500 text-white text-sm px-3 py-2 rounded-full shadow">See More</a>
          <span class="text-sm text-green-700 font-semibold">IDR 0</span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
