<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index(): View
    {
        return view('website.pages.shop.index');
    }

    public function show(Product $product): View
    {
        $product->load(['category', 'discount', 'favorites']);

        $relatedProducts = Product::active()->where('category_id', $product->category_id)->get();

        return view('website.pages.shop.show', compact('product', 'relatedProducts'));
    }
}
