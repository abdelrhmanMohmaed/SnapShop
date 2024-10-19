<div class="product__discount">
    <div class="section-title product__discount__title">
        <h2>Sale Off</h2>
    </div>
    <div class="row">
        <div class="product__discount__slider owl-carousel" wire:ignore>
            @forelse ($discountProducts as $item)
                <div class="col-lg-4" wire:ignore.self>
                    <div class="product__discount__item" wire:ignore.self>
                        <div class="product__discount__item__pic set-bg"
                            data-setbg="{{ asset($item->picture) }}" wire:ignore.self>
                            {{-- <div class="product__discount__percent">{{$item->discounts->value}}</div> --}}
                            <ul class="product__item__pic__hover">
                                <li><a 
                                    wire:click.prevent="toggleFavourite({{ $item->id }})"
                                        @class(['featured__item__pic__hover_like_a' => $this->isFavourite($item)])><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>{{ $item->category->name }}</span>
                            <h5><a href="#">{{ $item->name }}</a></h5>
                            <div class="product__item__price">$30.00 <span>${{ $item->price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="">
                            {{-- <div class="product__discount__percent">{{$item->discounts->value}}</div> --}}
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span></span>
                            <h5><a href="#"></a></h5>
                            <div class="product__item__price">$ <span>$</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>