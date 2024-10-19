<?php

namespace App\View\Components\website\shop;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestProducts extends Component
{
    public $latestProducts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->latestProducts = Product::withOutActiveDiscounts()->orderBy('created_at', 'desc')->take(18)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.shop.latest-products', [
            'latestProducts' => $this->latestProducts,
        ]);
    }
}

