<div class="product__pagination">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
            <span>
                @if ($paginator->onFirstPage())
                    <a><i class="fa fa-long-arrow-left"></i></a>
                @else
                    <a wire:click="previousPage" wire:loading.attr="disabled" rel="prev" style="cursor: pointer"><i
                            class="fa fa-long-arrow-left"></i></a>
                @endif
            </span>
            <!-- Display Page Numbers -->
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                @if ($i == $paginator->currentPage())
                    <a class="active">{{ $i }}</a>
                @else
                    <a wire:click="gotoPage({{ $i }})" style="cursor: pointer">{{ $i }}</a>
                @endif
            @endfor
            <span>
                @if ($paginator->onLastPage())
                    <a><i class="fa fa-long-arrow-right"></i></a>
                @else
                    <a wire:click="nextPage" wire:loading.attr="disabled" rel="next" style="cursor: pointer"><i
                            class="fa fa-long-arrow-right"></i></a>
                @endif
            </span>
        </nav>
    @endif
</div>
