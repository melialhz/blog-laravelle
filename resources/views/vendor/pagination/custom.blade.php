@if($paginator->hasPages ())
    <ul class="pagination">
        @foreach ($elements as $element)
            @if(is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif
            @if(is_array ($element))
                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li class="page-item active my-active"><span class="page-link"
                                                                     href="{{ $url }}">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link bg-white" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
@endif
