@if ($paginator->hasPages())

<nav aria-label="Page navigation example">
    @if ($paginator->onFirstPage())
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
          @else

          <li class="page-item">
      <a class="page-link" aria-label="Previous" href="{{ $paginator->previousPageUrl() }}">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
@endif
        @foreach ($elements as $element)
            @if (is_string($element))

    <li class="page-item"><a class="page-link">{{ $element }}</a></li>
    @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
    <li class="page-item"><a class="page-link" >{{ $page }}</a></li>
     @else
    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
    <li class="page-item">
      <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
     @else

     <li class="page-item">
      <a class="page-link" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    @endif
  </ul>
</nav>

@endif


