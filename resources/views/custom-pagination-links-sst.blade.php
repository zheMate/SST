@if($paginator->hasPages())
    <nav>
        @if($paginator->onFirstPage())
            <span class="previous-link-disable">
            @lang('pagination.previous')
        </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="previous-link">
                @lang('pagination.previous')
            </a>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        @if($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="next-link">
                @lang('pagination.next')
            </a>
        @else
            <span class="next-link-disable">
            @lang('pagination.next')
        </span>
        @endif
    </nav>
@endif
