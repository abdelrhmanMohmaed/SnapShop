<?php

namespace App\View\Components\website\shop;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SaleOff extends Component
{
    public $discountProducts = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->discountProducts = Product::withActiveDiscounts()->with(['discounts','category'])->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.shop.sale-off',[
            'discountProducts' => $this->discountProducts
        ]);
    }
}
