<?php

namespace App\Livewire\Website\Shop;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class FilterProducts extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public $sort, $minPrice = 0, $maxPrice = 10000;

    public function updatedSort($value): void
    {
        $this->sort = $value;
        $this->resetPage();
    }
    
    public function loadProducts()
    {
        $query = Product::withOutActiveDiscounts()->with('favorites');

        if ($this->minPrice && $this->maxPrice) {

            $query->whereBetween('price', [$this->minPrice, $this->maxPrice]);
        }

        switch ($this->sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'favorites':
                $query->whereHas('favorites', function ($q) {
                    $q->where('user_id', auth()->id());
                });
                break;
            default:
                // $query->inRandomOrder();
                break;
        }

        $this->maxPrice = $query->max('price');
        $this->minPrice = $query->min('price');
        
        return $query->paginate(9);
    }

    public function isFavourite($product): mixed
    {
        return $product->favorites()->where('user_id', auth()->id())->exists();
    }

    public function toggleFavourite(Product $product)
    {
        if (!Auth::check()) {
            return to_route('website.home.login.index');
        }

        $userId = auth()->id();

        if ($this->isFavourite($product)) {
            $product->favorites()->detach($userId);
        } else {
            $product->favorites()->sync([
                $userId => [
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        if($this->sort == 'favorites') $this->loadProducts();
        $this->dispatch('favourite-updated');
        $this->dispatch('favourite-updated', ['userId' => $userId]);
    }

    public function render()
    {
        return view('livewire.website.shop.filter-products', [
            'products' => $this->loadProducts(),
            'maxPrice' => $this->maxPrice,
            'minPrice' => $this->minPrice,
        ]);
    }
}
