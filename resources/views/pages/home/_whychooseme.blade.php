<section
  class="py-14 bg-green-800"
  x-data="{
  features: [
  {
    title: 'Bibit Unggul Berkualitas',
    desc: 'Kami menyediakan bibit tanaman pertanian, perkebunan, dan kehutanan yang teruji, sehat, dan siap tumbuh optimal di berbagai kondisi lahan.',
    icon: '🌱'
  },
  {
    title: 'Pendampingan & Konsultasi',
    desc: 'Selain penyediaan bibit, kami juga memberikan layanan konsultasi dan pendampingan agar budidaya lebih terarah dan hasil lebih maksimal.',
    icon: '🤝'
  },
  {
    title: 'Pengiriman Cepat & Aman',
    desc: 'Proses distribusi bibit dilakukan dengan sistem packing yang aman serta pengiriman tepat waktu hingga ke berbagai daerah.',
    icon: '🚚'
  },
  {
    title: 'Komitmen Keberlanjutan',
    desc: 'Mendukung praktik ramah lingkungan dengan menyediakan bibit berkualitas untuk menunjang keberlanjutan pertanian dan kehutanan.',
    icon: '🌳'
  },
  {
  title: '2 Sertifikasi Resmi',
  desc: 'CV Karya Saginta telah mengantongi 2 sertifikasi dari lembaga berwenang, sehingga produk dan layanan kami terpercaya dan diakui kualitasnya.',
  icon: '📜'
},
]

  }">
  <div class="max-w-screen-xl mx-auto px-4 text-white md:px-8">
    <div class="max-w-xl mx-auto space-y-3 sm:text-center">
      <!-- <h3 class="text-indigo-600 font-semibold">cv karya saginta</h3> -->
      <p class="text-white text-3xl font-semibold sm:text-4xl">
        Kenapa Memilih Kami?
      </p>
      <p>
        Kami berkomitmen memberikan bibit unggul berkualitas, layanan terpercaya,
        serta pendampingan profesional untuk memastikan hasil panen dan perawatan
        kebun Anda lebih maksimal.
      </p>
    </div>
    <div class="mt-12">
      <ul class="grid gap-y-8 gap-x-12 sm:grid-cols-2 lg:grid-cols-3">
        <template x-for="(item, idx) in features" :key="idx">
          <li class="flex gap-x-4">
            <div
              class="flex-none w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center"
              x-html="item.icon">
              <!-- Icon replaced with empty string -->
            </div>
            <div>
              <h4
                class="text-lg text-white font-semibold"
                x-text="item.title">
                <!-- Title -->
              </h4>
              <p class="mt-3" x-text="item.desc">
                <!-- Description -->
              </p>
            </div>
          </li>
        </template>
      </ul>
    </div>
  </div>
</section>