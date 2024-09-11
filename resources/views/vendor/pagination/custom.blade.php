@if ($paginator->hasPages())
    <div class="navigation" align="center">
        @if ($paginator->onFirstPage())
            <span>Назад</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}">Назад</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="nav_ext">...</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span>{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">Вперед</a>
        @else
            <span>Вперед</span>
        @endif
    </div>
@endif
