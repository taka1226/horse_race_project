<div class="paging f16">
    @if ($paginator->hasPages())
        <!-- 前へ移動ボタン -->
        <a @if( $paginator->currentPage() <> 1) href="{{ $paginator->url(1) }}" @endif class="num first-prev @if( $paginator->currentPage() == 1) standby @endif"></a>
        <a @if( $paginator->currentPage() <> 1) href="{{ $paginator->previousPageUrl() }}" @endif class="num prev @if( $paginator->currentPage() == 1) standby @endif"></a>
        
        <!-- ページ番号　-->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled">
                    {{ $element }}
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="{{ $url }}" class="num current">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="num">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- 次へ移動ボタン -->
        <a @if( $paginator->currentPage() <> $page) href="{{ $paginator->nextPageUrl() }}" @endif class="num next @if( $paginator->currentPage() == $page) standby @endif"></a>
        <a @if( $paginator->currentPage() <> $page) href="{{ $paginator->url($page) }}" @endif class="num last-next @if( $paginator->currentPage() == $page) standby @endif"></a>
@endif

</div>
