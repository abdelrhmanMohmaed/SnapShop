<div class="product__discount">
    <div class="section-title product__discount__title">
        <h2>Sale Off</h2>
    </div>
    <div class="row">
        <div class="product__discount__slider owl-carousel" wire:ignore>
            @forelse ($discountProducts as $item)
                <div class="col-lg-4" wire:ignore.self>
                    <div class="product__discount__item" wire:ignore.self>
                        <div class="product__discount__item__pic set-bg" data-setbg="{{ asset($item->picture) }}"
                            wire:ignore.self>
                            @if ($item->discount->type == 'percentage')
                                <div class="product__discount__percent">{{ $item->discount->value }}%</div>
                            @else
                                <div class="product__discount__percent">{{ $item->discount->value }}$</div>
                            @endif
                            <ul class="product__item__pic__hover">
                                <li><a wire:click.prevent="toggleFavourite({{ $item->id }})"
                                        @class([
                                            'featured__item__pic__hover_like_a' => $this->isFavourite($item),
                                        ])><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        @php
                            $originalPrice = $item->price;
                            $discountedPrice = 0;
                            if ($item->discount->type == 'percentage') {
                                $discountedPrice = $originalPrice - $originalPrice * ($item->discount->value / 100);
                            } else {
                                $discountedPrice = $originalPrice - $item->discount->value;
                            }
                        @endphp
                        <div class="product__discount__item__text">
                            <span>{{ $item->category->name }}</span>
                            <h5><a href="#">{{ $item->name }}</a></h5>
                            <div class="product__item__price">${{ number_format($discountedPrice, 2) }}
                                <span>${{ $item->price }}</span>
                            </div>
                            <span id="countdown-{{ $item->id }}" data-end-date="{{ $item->discount->end_date }}"></span>
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
<script>
    function startCountdown(elementId, endDate) {
        var countdownElement = document.getElementById(elementId);
        var countDownDate = new Date(endDate).getTime();

        var countdownInterval = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdownElement.innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(countdownInterval);
                countdownElement.innerHTML = "Expired";
            }
        }, 1000);
    }

    document.querySelectorAll("[id^='countdown-']").forEach(function(element) {
        var endDate = element.getAttribute("data-end-date");
        startCountdown(element.id, endDate);
    });
</script>