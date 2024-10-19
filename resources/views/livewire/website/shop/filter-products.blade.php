<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-5">
            <div class="sidebar">
                <div class="sidebar__item">
                    <h4>Department</h4>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Oatmeal</a></li>
                    </ul>
                </div>

                <div>
                    <h4>Price</h4>
                    <div>
                        <div class="d-flex justify-content-between my-3">
                            <input type="number" id="minamount" class="form-control mx-2"
                                wire:model.live.debounce.250ms="minPrice" placeholder="Min Price">
                            <input type="number" id="maxamount" class="form-control mx-2"
                                wire:model.live.debounce.250ms="maxPrice" placeholder="Max Price">
                        </div>
                    </div>
                </div>

                <!-- Start Latest Product Section Begin -->
                <x-website.shop.latest-products />
                <!-- End Latest Product Section Begin -->

            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-7">

        <!-- Start Discount Products Section Begin -->
        <x-website.shop.sale-off />
        <!-- End Discount Products Section Begin -->

        <!-- Start Discount Products Section Begin -->
        <div class="filter__item">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="filter__sort">
                        <span>Sort By</span>
                        <select wire:model.change="sort" class="ml-3 border-0">
                            <option value="default">Default</option>
                            <option value="price_asc">Price: Low to High</option>
                            <option value="price_desc">Price: High to Low</option>
                            <option value="name_asc">Name: A to Z</option>
                            <option value="name_desc">Name: Z to A</option>
                            @auth
                                <option value="favorites">My Favorites</option>
                            @endauth
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="filter__found">
                        <h6><span>{{ $products->total() }}</span> Products found</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Discount Products Section Begin -->



        <div class="row">
            @forelse ($products as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg">
                            <img src="{{ asset($item->picture) }}" alt="{{ $item->name }}" />

                            <ul class="product__item__pic__hover">
                                <li><a wire:click="toggleFavourite({{ $item->id }})"
                                        wire:key="product-{{ $item->id }}" @class([
                                            'cursor',
                                            'featured__item__pic__hover_like_a' => $this->isFavourite($item),
                                        ])><i
                                            class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{ $item->name }}</a></h6>
                            <h5>${{ $item->price }}</h5>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{ asset('assets/website/img/products/product-1.jpg') }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>
                            <h5></h5>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="product__pagination">
            {{ $products->links('website.layouts.partials.main.custom-pagination-links') }}
        </div>
    </div>
</div>
