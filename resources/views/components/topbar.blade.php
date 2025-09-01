<!-- Top Bar -->
<div 
  class="bg-green-800 text-white text-sm overflow-hidden transition-all duration-500 ease-in-out hidden md:block"
  :class="scrolled 
            ? 'max-h-0 py-0 opacity-0' 
            : 'max-h-20 py-3 opacity-100'">

  <div class="container mx-auto flex justify-between items-center px-4 transition-all duration-500 ease-in-out">
    
    <div class="flex items-center space-x-2">
      <!-- Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" viewBox="0 0 20 20" fill="currentColor">
        <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4z" />
      </svg>
      <span class="font-normal text-sm">
        Penyedia Bibit Unggul & Layanan Perkebunan, Pertanian, Kehutanan
      </span>
    </div>

    <div class="flex items-center space-x-5">

      <!-- Sosial Media -->
      <a href="#" class="flex items-center space-x-1 hover:text-yellow-300 transition">
        <i class="fab fa-instagram"></i><span>Instagram</span>
      </a>
      <a href="#" class="flex items-center space-x-1 hover:text-yellow-300 transition">
        <i class="fab fa-facebook"></i><span>Facebook</span>
      </a>
      <a href="#" class="flex items-center space-x-1 hover:text-yellow-300 transition">
        <i class="fab fa-youtube"></i><span>Youtube</span>
      </a>

    </div>
  </div>
</div>
