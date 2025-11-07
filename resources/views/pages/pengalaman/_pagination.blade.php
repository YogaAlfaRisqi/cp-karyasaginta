<section class="mb-15 mx-15">
  <div class="max-w-screen-xl mx-auto mt-12 px-4 text-gray-600 md:px-8">

    {{-- Desktop pagination --}}
    <div class="hidden justify-between text-sm md:flex">
      <div>
        SHOWING 
        {{ $experiences->firstItem() }}–{{ $experiences->lastItem() }} 
        OF {{ $experiences->total() }}
      </div>

      <div class="flex items-center gap-12" aria-label="Pagination">
        {{-- Tombol Previous --}}
        @if ($experiences->onFirstPage())
          <span class="text-gray-400 cursor-not-allowed">Previous</span>
        @else
          <a href="{{ $experiences->previousPageUrl() }}" class="hover:text-green-900">Previous</a>
        @endif

        {{-- Nomor Halaman --}}
        <ul class="flex items-center gap-1">
          @foreach ($experiences->getUrlRange(1, $experiences->lastPage()) as $page => $url)
            @if ($page == $experiences->currentPage())
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
        @if ($experiences->hasMorePages())
          <a href="{{ $experiences->nextPageUrl() }}" class="hover:text-green-900">Next</a>
        @else
          <span class="text-gray-400 cursor-not-allowed">Next</span>
        @endif
      </div>
    </div>

    {{-- Mobile pagination --}}
    <div class="flex items-center justify-between text-sm text-gray-600 font-medium md:hidden">
      @if ($experiences->onFirstPage())
        <span class="px-4 py-2 border rounded-lg text-gray-400">Previous</span>
      @else
        <a href="{{ $experiences->previousPageUrl() }}" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Previous</a>
      @endif

      <div class="font-medium">
        SHOWING {{ $experiences->firstItem() }}–{{ $experiences->lastItem() }} OF {{ $experiences->total() }}
      </div>

      @if ($experiences->hasMorePages())
        <a href="{{ $experiences->nextPageUrl() }}" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Next</a>
      @else
        <span class="px-4 py-2 border rounded-lg text-gray-400">Next</span>
      @endif
    </div>

  </div>
</section>
