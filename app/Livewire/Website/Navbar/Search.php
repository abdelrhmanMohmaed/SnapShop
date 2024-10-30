<?php

namespace App\Livewire\Website\Navbar;

use App\Models\Product;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component
{
    #[Url]
    public ?string $search;

    public $products = [];

    public function updatedSearch()
    {
        $this->products = Product::withAnyTags([$this->search])
            ->orWhere('name', 'like', '%'.$this->search.'%')
            ->get();
    }

    public function render()
    {
        return view('livewire.website.navbar.search', [
            'products' => $this->products,
        ]);
    }
}
