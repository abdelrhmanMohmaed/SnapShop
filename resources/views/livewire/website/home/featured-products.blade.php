<div>
    <div class="featured__controls">
        <ul>
            <li class="{{ $filter === '*' ? 'active' : '' }}" wire:click="$set('filter', '*')">All</li>
            <li class="{{ $filter === '1' ? 'active' : '' }}" wire:click="$set('filter', '1')">Beef</li>
            <li class="{{ $filter === '2' ? 'active' : '' }}" wire:click="$set('filter', '2')">Chicken</li>
            <li class="{{ $filter === '4' ? 'active' : '' }}" wire:click="$set('filter', '4')">Vegetables</li>
            <li class="{{ $filter === '11' ? 'active' : '' }}" wire:click="$set('filter', '11')">Fresh Fish</li>
            <li class="{{ $filter === '6' ? 'active' : '' }}" wire:click="$set('filter', '6')">Dried Fruits</li>
        </ul>
    </div>
    <div class="row featured__filter">
        @foreach ($products as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $item->name }}">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <img src="{{ asset($item->picture) }}" alt="{{ $item->name }}">
                        <!-- Livewire component to handle favorites -->
                        <ul class="featured__item__pic__hover">
                            <li><a wire:click="toggleFavourite({{ $item->id }})" @class([
                                'featured__item__pic__hover_like_a' => $this->isFavourite($item),
                            ])><i
                                        class="fa fa-heart"></i></a></li>
                            <li><a><i class="fa fa-retweet"></i></a></li>
                            <li><a><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{ $item->name }}</a></h6>
                        <h5>${{ $item->quantity }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center">
        @if (count($products) == $limit)
            <button wire:click.prevent="loadMore" class="btn primary-btn">Show More</button>
        @endif
        @if ($limit > 8)
            <button wire:click.prevent="showLess" class="btn secondary-btn">Show Less</button>
        @endif
    </div>
</div>
