@if ($paginator->lastPage() > 1)
<div class="pagination-links" id="member-dir-pag-top">
    {{--
    <span class="page-numbers current">1</span>
    <a class="page-numbers" href="./members.html">2</a>
    <span class="page-numbers dots">...</span>
    <a class="page-numbers" href="./members.html">8</a>
    <a class="next page-numbers" href="./members.html">&rarr;</a>
    --}}
    <li class="page-numbers{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="page-numbers {{ ($paginator->currentPage() == $i) ? ' current' : '' }}">
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-numbers {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
        </li>
</div>
@endif