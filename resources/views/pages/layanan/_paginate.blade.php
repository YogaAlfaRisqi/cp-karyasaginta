<section class="mb-15 mx-4 md:mx-12 lg:mx-16">
  <div class="max-w-screen-xl mx-auto mt-12 px-4 text-gray-600 md:px-8">

    {{-- Desktop pagination --}}
    <div class="hidden justify-between text-sm md:flex">
      <div>
        SHOWING 
        {{ $layanan->firstItem() }}–{{ $layanan->lastItem() }} 
        OF {{ $layanan->total() }}
      </div>

      <div class="flex items-center gap-12" aria-label="Pagination">
        {{-- Tombol Previous --}}
        @if ($layanan->onFirstPage())
          <span class="text-gray-400 cursor-not-allowed">Previous</span>
        @else
          <a href="{{ $layanan->previousPageUrl() }}" class="hover:text-green-900">Previous</a>
        @endif

        {{-- Nomor Halaman --}}
        <ul class="flex items-center gap-1">
          @foreach ($layanan->getUrlRange(1, $layanan->lastPage()) as $page => $url)
            @if ($page == $layanan->currentPage())
              <li>
                <span class="px-3 py-2 rounded-lg duration-150 bg-green-700 text-white font-medium">
                  {{ $page }}
                </span>
              </li>
            @else
              <li>
                <a href="{{ $url }}" class="px-3 py-2 rounded-lg duration-150 hover:text-white hover:bg-green-600">
                  {{ $page }}
                </a>
              </li>
            @endif
          @endforeach
        </ul>

        {{-- Tombol Next --}}
        @if ($layanan->hasMorePages())
          <a href="{{ $layanan->nextPageUrl() }}" class="hover:text-green-900">Next</a>
        @else
          <span class="text-gray-400 cursor-not-allowed">Next</span>
        @endif
      </div>
    </div>

    {{-- Mobile pagination --}}
    <div class="flex items-center justify-between text-sm text-gray-600 font-medium md:hidden">
      @if ($layanan->onFirstPage())
        <span class="px-4 py-2 border rounded-lg text-gray-400">Previous</span>
      @else
        <a href="{{ $layanan->previousPageUrl() }}" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Previous</a>
      @endif

      <div class="font-medium">
        SHOWING {{ $layanan->firstItem() }}–{{ $layanan->lastItem() }} OF {{ $layanan->total() }}
      </div>

      @if ($layanan->hasMorePages())
        <a href="{{ $layanan->nextPageUrl() }}" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Next</a>
      @else
        <span class="px-4 py-2 border rounded-lg text-gray-400">Next</span>
      @endif
    </div>

  </div>
</section>
