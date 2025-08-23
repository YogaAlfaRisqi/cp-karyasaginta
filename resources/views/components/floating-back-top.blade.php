<!-- Floating Back to Top Button -->
<button id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'});" 
   class="hidden fixed bottom-25 right-6 md:right-16 z-40 bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg transition transform hover:scale-110"
   aria-label="Kembali ke Atas">
   <!-- Icon panah ke atas -->
   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
   </svg>
</button>

<script>
    document.addEventListener('scroll', function () {
        const btn = document.getElementById('backToTop');
        if (window.scrollY > 500) {
            btn.classList.remove('hidden');
        } else {
            btn.classList.add('hidden');
        }
    });
</script>
