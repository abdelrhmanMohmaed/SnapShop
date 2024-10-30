<?php

namespace App\Livewire\Website\Shop;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product;

    public $relatedProducts = [];

    public function mount($product, $relatedProducts)
    {
        $this->product = $product;
        $this->relatedProducts = $relatedProducts;
    }

    // Start Actions
    // Start Favourite Action
    public function isFavourite($product): mixed
    {
        return $product->favorites()->where('user_id', auth()->id())->exists();
    }

    public function toggleFavourite(Product $product)
    {
        if (! Auth::check()) {
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
        // Fire Event to update fav-count at navbar component
        $this->dispatch('favourite-updated', userId: $userId);
    }
    // End Favourite Action
    // End Actions

    public function render()
    {
        return view('livewire.website.shop.product-details');
    }
}
