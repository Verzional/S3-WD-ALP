@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-6 py-3 text-sm font-medium text-[#D2DAC2] bg-[#5D6749] border border-[#5D6749] cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-6 py-3 text-sm font-medium text-[#5D6749] bg-[#D2DAC2] border border-[#5D6749] leading-5 rounded-md hover:text-[#5D6749] focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-6 py-3 ml-3 text-sm font-medium text-[#5D6749] bg-[#D2DAC2] border border-[#5D6749] leading-5 rounded-md hover:text-[#5D6749] focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-6 py-3 ml-3 text-sm font-medium text-[#D2DAC2] bg-[#5D6749] border border-[#5D6749] cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-[#5D6749] leading-5 dark:text-gray-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="relative inline-flex items-center px-6 py-3 text-sm font-medium text-[#D2DAC2] bg-[#5D6749] border border-[#5D6749] cursor-default rounded-l-md leading-5 dark:bg-gray-800 dark:border-gray-600" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-6 py-3 text-sm font-medium text-[#5D6749] bg-[#D2DAC2] border border-[#5D6749] rounded-l-md leading-5 hover:text-[#5D6749] focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-6 py-3 -ml-px text-sm font-medium text-[#5D6749] bg-[#D2DAC2] border border-[#5D6749] cursor-default leading-5 dark:bg-gray-800 dark:border-gray-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-6 py-3 -ml-px text-sm font-medium text-[#D2DAC2] bg-[#5D6749] border border-[#5D6749] cursor-default leading-5 dark:bg-gray-800 dark:border-gray-600">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-6 py-3 -ml-px text-sm font-medium text-[#5D6749] bg-[#D2DAC2] border border-[#5D6749] leading-5 hover:text-[#5D6749] focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400 dark:hover:text-gray-300 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-6 py-3 -ml-px text-sm font-medium text-[#5D6749] bg-[#D2DAC2] border border-[#5D6749] rounded-r-md leading-5 hover:text-[#5D6749] focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="relative inline-flex items-center px-6 py-3 -ml-px text-sm font-medium text-[#D2DAC2] bg-[#5D6749] border border-[_{{{CITATION{{{_1{](https://github.com/Qusaix/appointment_picker/tree/c2e96cac20d00658b094ee6f6400ec1e78ea13b1/vendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FPagination%2Fresources%2Fviews%2Ftailwind.blade.php)[_{{{CITATION{{{_2{](https://github.com/zaini14/ujikom/tree/7bbdb72c2fc9e5df51253b8f4aaccc2fff494b8d/resources%2Fviews%2Fvendor%2Fpagination%2Ftailwind.blade.php)[_{{{CITATION{{{_3{](https://github.com/mcarson24/start-trek-tweets/tree/49bbe3c1c027a444f66aeb6a2bd543bace17bd23/resources%2Fviews%2Fvendor%2Fpagination%2Ftailwind.blade.php)[_{{{CITATION{{{_4{](https://github.com/abo3adel/laravel-today-website/tree/b614346a9d81c4f0a7b94f5309dde89f9ea316a9/resources%2Fviews%2Fvendor%2Fpagination%2Ftailwind.blade.php)[_{{{CITATION{{{_5{](https://github.com/Kaishiyoku/strahlungswerte/tree/bd57e4b58b48792f64ae054a7420b60d2f30950c/resources%2Fviews%2Fvendor%2Fpagination%2Ftailwind.blade.php)[_{{{CITATION{{{_6{](https://github.com/msafadi/pallancer-laravel-2/tree/6f223001f9061b3ea35d7c55ffc8fa633e8a3d65/resources%2Fviews%2Fvendor%2Fpagination%2Fsimple-bootstrap-4.blade.php)[_{{{CITATION{{{_7{](https://github.com/YilanBoy/simple-blog/tree/d49ca821c2b411d3937f6bef59825d6c97e089cf/resources%2Fviews%2Fvendor%2Flivewire%2Ftailwind.blade.php)[_{{{CITATION{{{_8{](https://github.com/devalfullstackdeveloper/EssentialsNewPath/tree/03d3500b1322f74adbccd166d3b88c45c9f15d0c/resources%2Fviews%2Fvendor%2Fpagination%2Ftailwind.blade.php)[_{{{CITATION{{{_9{](https://github.com/spatie/spatie.be/tree/4b74844a7228926ed46dd153847ae77074650180/resources%2Fviews%2Fvendor%2Fpagination%2Ftailwind.blade.php)[_{{{CITATION{{{_10{](https://github.com/Melisa-Surja/Novel-Platform---PNovel/tree/c4b551b2ab55654b89e8528b156a25f7a24e58fd/resources%2Fviews%2Fvendor%2Fpagination%2Ftailwind.blade.php)5D6749] cursor-default rounded-r-md leading-5 dark:bg-gray-800 dark:border-gray-600" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
