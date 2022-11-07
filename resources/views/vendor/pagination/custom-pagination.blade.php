@if ($paginator->hasPages())
<div class="custom-pagination mb-3">
    <div class="paginate">
        @if ($paginator->onFirstPage())
            <a href="javascript:void(0)" class="page_navigate_btn"><i class="fa fa-angle-left"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="page_navigate_btn"><i class="fa fa-angle-left"></i></a>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="javascript:void(0)" class="active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="page_navigate_btn"><i class="fa fa-angle-right"></i></a>
        @else
            <a href="javascript:void(0)" class="page_navigate_btn"><i class="fa fa-angle-right"></i></a>
        @endif
    </div>
</div>
@endif