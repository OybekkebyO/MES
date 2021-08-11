@if ($paginator->hasPages())
    <div class="fn_pagination">
<ul class="pagination fn_ajax_buttons">
        @if ($paginator->onFirstPage())

<li class="disabled page_item"><span class="page_link">&laquo;</span></li>

        @else

<li><a class="fn_sort_pagination_link page_link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>

        @endif
        @foreach ($elements as $element)
            @if (is_string($element))

<li class="disabled page_item"><span class="page_link">{{ $element }}</span></li>

            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

<li class="active page_item"><span class="page_link">{{ $page }}</span></li>

                    @else

<li class="page_item"><a class="fn_sort_pagination_link page_link" href="{{ $url }}">{{ $page }}</a></li>

                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())

<li class="page_item"><a class="fn_sort_pagination_link page_link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>

        @else

<li class="disabled page_item"><span class="page_link">&raquo;</span></li>

        @endif
    </ul>
  </div>

@endif
