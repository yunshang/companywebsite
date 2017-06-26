@if ($paginator->hasPages())
        @if ($paginator->onFirstPage())
            // <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"><span class="last-page">上一页</span></a>
        @endif
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"><span class="next-page">下一页</span></a>
        @else
            // <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
        @endif
@endif
