<div>
    <input type="text" wire:model.live.debounce.250ms="search" placeholder="Search by tags or name..." />

    @empty(!$search)
        <div class="search-results mt-1 position-absolute bg-white border border-gray-500 rounded w-75 z-10">
            @if(!empty($products) && $products->count() > 0)
                <ul class="list-group m-0 p-0 list-unstyled">
                    @foreach ($products as $item)
                        <li class="list-group-item d-flex align-items-center p-3 border-bottom" style="background-color: #252525;">
                            <img src="{{ $item->picture }}" alt="{{ $item->name }}" height="80" width="80" class="img-thumbnail ms-3">
                            <a href="{{ $item->id }}" class="ml-3 text-capitalize" style="color: white">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul class="list-group m-0 p-0 list-unstyled">
                    <li class="list-group-item d-flex align-items-center p-3 border-bottom" style="background-color: #252525;">
                        <span class="ml-3 text-capitalize" style="color: white">No products found for "{{ $search }}"</span>
                    </li>
                </ul>
            @endif
        </div>
    @endempty
</div>
