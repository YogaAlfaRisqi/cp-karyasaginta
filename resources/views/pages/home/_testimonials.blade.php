<section class="bg-gradient-to-b from-green-50 to-white py-16 font-poppins text-gray-800" data-aos="fade-down" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-2">Testimoni Client</h2>
            <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                Pendapat mitra kami tentang pelayanan dan kualitas bibit dari CV Karya Saginta.
            </p>
        </div>

        <!-- Testimonials -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($testimonials as $t)
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                <div class="flex items-center space-x-4 mb-4">
                    <img src="{{ asset('images/testimonials/' . $t['photo']) }}" alt="{{ $t['name'] }}" class="w-14 h-14 rounded-full object-cover">
                    <div>
                        <h4 class="font-semibold text-gray-800">{{ $t['name'] }}</h4>
                        <p class="text-sm text-gray-500">{{ $t['role'] }}</p>
                    </div>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed italic">“{{ $t['message'] }}”</p>
            </div>
            @endforeach
        </div>
    </div>
</section>