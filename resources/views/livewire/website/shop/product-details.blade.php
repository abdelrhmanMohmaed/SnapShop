<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="{{ asset($product->picture) }}"
                            alt="{{ $product->name }}" height="450">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{ $product->category->name }}’s Package</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        {{-- <i class="fa fa-star-o"></i> --}}
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    @php
                        $originalPrice = $product->price;
                        $discountedPrice = null;
                        $discountValue = null;

                        if ($product->discount) {
                            if ($product->discount->type == 'percentage') {
                                $discountValue = number_format($product->discount->value, 2) . ' %';
                                $discountedPrice = $originalPrice - $originalPrice * ($product->discount->value / 100);
                            } else {
                                $discountValue = number_format($product->discount->value, 2) . ' $';
                                $discountedPrice = $originalPrice - $product->discount->value;
                            }
                        }
                    @endphp

                    <div class="product__details__price">
                        @if ($discountedPrice)
                            <div class="product__item__price product__item__price_custom">
                                ${{ number_format($discountedPrice, 2) }}
                                <span>${{ number_format($originalPrice, 2) }}</span>
                            </div>
                        @else
                            <div class="product__item__price">${{ number_format($originalPrice, 2) }}</div>
                        @endif
                    </div>

                    <p>{{ $product->summary }}</p>
                    @if ($product->is_active)
                        <div class="product__details__quantity" wire:ignore>
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                    @endif
                    <a wire:click="toggleFavourite({{ $product->id }})" @class([
                        'heart-icon',
                        'product__details__quantity__hover_like_a' => $this->isFavourite($product),
                    ])><span
                            class="icon_heart_alt"></span></a>
                    <ul>
                        @if ($product->discount)
                            <li><b>Discount</b> <span class="font-weight-bold">{{ $discountValue }}</span></li>
                        @endif
                        <li><b>Availability</b> <span>{{ $product->is_active ? 'In Stock' : 'Coming Soon..' }}</span>
                        </li>
                        <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                        <li><b>Weight</b> <span>0.5 kg</span></li>
                        <li><b>Share on</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Product Details Section Begin -->
            <x-website.shop.product-details :product="$product" />
            <!-- Product Details Section End -->
        </div>
    </div>

    <!-- Related Product Section Begin -->
    <x-website.shop.related-product :relatedProducts="$relatedProducts" />
    <!-- Related Product Section End -->
</section>
<!-- Product Details Section End -->
