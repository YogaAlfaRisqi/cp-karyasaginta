<div 
   x-data="{ selectedFaq: null, faqs: [   
    { q: 'Bagaimana cara memesan bibit di CV Karya Saginta?', a: 'Pemesanan bisa dilakukan langsung melalui WhatsApp, telepon, atau datang ke lokasi kami. Tim kami akan membantu dari pemilihan hingga proses transaksi.' },   
    { q: 'Apakah Karya Saginta melayani pengiriman ke luar kota/provinsi?', a: 'Ya, kami melayani pengiriman ke berbagai kota dan provinsi di Indonesia dengan standar keamanan dan kenyamanan hewan selama perjalanan.' },   
    { q: 'Berapa minimal pembelian bibit?', a: 'Minimal pembelian adalah 1 ekor. Namun, untuk pembelian dalam jumlah besar, tersedia harga khusus dan diskon menarik.' },   
    { q: 'Apakah ada garansi untuk bibit yang dibeli?', a: 'Kami memberikan garansi kesehatan hewan saat pengiriman. Jika terdapat masalah saat penerimaan, segera hubungi tim kami untuk tindak lanjut.' },   
  ] }"
>
  <section class="leading-relaxed max-w-screen-lg mt-16 mx-auto px-6 md:px-12 mb-20">
    <div class="space-y-3 text-center">
      <h1 class="text-4xl font-bold text-gray-900">Frequently Asked Questions</h1>
      <p class="text-gray-600 max-w-2xl mx-auto text-lg">
         Pertanyaan yang sering diajukan seputar layanan Karya Saginta. Masih bingung? Jangan ragu untuk menghubungi kami.
      </p>
    </div>

    <div class="mt-12 max-w-3xl mx-auto space-y-4">
      <template x-for="(item, index) in faqs" :key="index">
        <div class="rounded-2xl border border-gray-200 shadow-sm overflow-hidden bg-white">
          <button 
            class="w-full flex justify-between items-center px-6 py-5 text-left text-lg font-medium text-gray-800 hover:bg-gray-50 transition"
            @click="selectedFaq = selectedFaq === index ? null : index"
          >
            <span x-text="item.q"></span>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              class="h-6 w-6 text-gray-500 transform transition-transform duration-300"
              :class="selectedFaq === index ? 'rotate-45' : 'rotate-0'"
              fill="none" viewBox="0 0 24 24" stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
          </button>

          <!-- Answer with smooth transition -->
          <div 
            x-ref="answerElRef" 
            class="grid transition-all duration-500 ease-in-out" 
            :style="selectedFaq === index ? 'grid-template-rows:1fr; opacity:1;' : 'grid-template-rows:0fr; opacity:0;'"
          >
            <div class="overflow-hidden">
              <p class="px-6 pb-5 text-gray-600 text-base" x-text="item.a"></p>
            </div>
          </div>
        </div>
      </template>
    </div>
  </section>
</div>
