<div class="max-w-screen-xl mx-auto md:mx-10 mt-12 px-4 text-gray-600 md:px-8 ">
    {{-- Desktop view --}}
    <div class="hidden justify-between text-sm md:flex">
        <div>
            SHOWING {{ $products->firstItem() }}–{{ $products->lastItem() }} OF {{ $products->total() }}
        </div>

        <div class="flex items-center gap-12" aria-label="Pagination">
            {{-- Previous Button --}}
            @if ($products->onFirstPage())
                <span class="text-gray-400 cursor-not-allowed">Previous</span>
            @else
                <a href="{{ $products->previousPageUrl() }}" class="hover:text-green-900">Previous</a>
            @endif

            {{-- Numbered Pages --}}
            <ul class="flex items-center gap-1">
                @php
                    $start = max(1, $products->currentPage() - 2);
                    $end = min($start + 4, $products->lastPage());
                @endphp

                {{-- First page --}}
                @if ($start > 1)
                    <li>
                        <a href="{{ $products->url(1) }}" class="px-3 py-2 rounded-lg duration-150 hover:text-white hover:bg-green-600">
                            1
                        </a>
                    </li>
                    @if ($start > 2)
                        <li><div>...</div></li>
                    @endif
                @endif

                {{-- Dynamic pages --}}
                @for ($i = $start; $i <= $end; $i++)
                    @if ($i == $products->currentPage())
                        <li>
                            <span class="px-3 py-2 rounded-lg bg-green-700 text-white font-medium">
                                {{ $i }}
                            </span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $products->url($i) }}" class="px-3 py-2 rounded-lg duration-150 hover:text-white hover:bg-green-600">
                                {{ $i }}
                            </a>
                        </li>
                    @endif
                @endfor

                {{-- Last page --}}
                @if ($end < $products->lastPage())
                    @if ($end < $products->lastPage() - 1)
                        <li><div>...</div></li>
                    @endif
                    <li>
                        <a href="{{ $products->url($products->lastPage()) }}" class="px-3 py-2 rounded-lg duration-150 hover:text-white hover:bg-green-600">
                            {{ $products->lastPage() }}
                        </a>
                    </li>
                @endif
            </ul>

            {{-- Next Button --}}
            @if ($products->hasMorePages())
                <a href="{{ $products->nextPageUrl() }}" class="hover:text-green-900">Next</a>
            @else
                <span class="text-gray-400 cursor-not-allowed">Next</span>
            @endif
        </div>
    </div>

    {{-- Mobile view --}}
    <div class="flex items-center justify-between text-sm text-gray-600 font-medium md:hidden">
        @if ($products->onFirstPage())
            <span class="px-4 py-2 border rounded-lg text-gray-400">Previous</span>
        @else
            <a href="{{ $products->previousPageUrl() }}" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Previous</a>
        @endif

        <div class="font-medium">
            SHOWING {{ $products->firstItem() }}–{{ $products->lastItem() }} OF {{ $products->total() }}
        </div>

        @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Next</a>
        @else
            <span class="px-4 py-2 border rounded-lg text-gray-400">Next</span>
        @endif
    </div>
</div>
