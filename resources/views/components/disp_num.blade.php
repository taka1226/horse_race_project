<div class="num_box arial f12">
    @php
    $start_items = ($pagination->currentPage() - 1) * $pagination->perPage() + 1;
    $end_items = min($pagination->currentPage() * $pagination->perPage(), $pagination->total());
    @endphp
    <p><span>{{ $start_items }} - {{ $end_items}}</span> <span style="color: #A9A9A9;">/</span> <span class="number">{{ number_format($pagination->total())}}件</span></p>
</div>
