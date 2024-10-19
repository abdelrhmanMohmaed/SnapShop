<div class="sidebar__item">
    <div class="latest-product__text">
        <h4>Latest Products</h4>
        <div class="latest-product__slider owl-carousel" wire:ignore>

            @forelse ($latestProducts as $index => $item)
                @if ($index % 6 == 0)
                    <div class="latest-prdouct__slider__item">
                @endif

                <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                        <img src="{{ asset($item->picture) }}" alt="{{ $item->name }}">
                    </div>
                    <div class="latest-product__item__text">
                        <h6>{{ $item->name }}</h6>
                        <span>${{ $item->price }}</span>
                    </div>
                </a>@if (($index + 1) % 6 == 0 || $index == $latestProducts->count() - 1)</div>
            @endif
        @empty
            <p>No products found.</p>
        @endforelse
    </div>
</div>