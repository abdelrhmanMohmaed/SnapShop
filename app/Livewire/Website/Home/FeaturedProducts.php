<?php

namespace App\Livewire\Website\Home;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class FeaturedProducts extends Component
{
    public $products = [], $filter = '*', $limit = 8, $product;

    public function mount(): void
    {
        $this->loadProducts();
    }
    public function loadProducts(): void
    {
        $this->products = Product::active()
            ->when($this->filter != '*', function ($query) {
                return $query->where('category_id', $this->filter);
            })->inRandomOrder()
            ->with('favorites')
            ->take($this->limit)
            ->get();
    }
    public function updatedFilter($value): void
    {
        $this->filter = $value;
        $this->limit = 8;
        $this->loadProducts();
    }

    public function loadMore(): void
    {
        $this->limit += 8;
        $this->loadProducts();
    }

    public function showLess(): void
    {
        $this->limit -= 8;
        $this->loadProducts(); 
    }



    // Start Actions
    // Start Favourite Action
    public function isFavourite($product): mixed
    {
        return $product->favorites()->where('user_id', auth()->id())->exists();
    }

    public function onProductsUpdated()
    {
        $this->render();
    }

    public function toggleFavourite(Product $product)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = auth()->id();

        if ($this->isFavourite($product)) {
            $product->favorites()->detach($userId);
        } else {
            $product->favorites()->sync([
                $userId => [
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]);
        }
        // Fire Event to update fav-count at navbar component
        $this->dispatch('favourite-updated', userId: $userId);
    }
    // End Favourite Action
    // End Actions
    
    public function render()
    {
        return view('livewire.website.home.featured-products', [
            'products' => $this->products
        ]);
    }
}
