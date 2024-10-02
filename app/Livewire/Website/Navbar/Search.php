<?php

namespace App\Livewire\Website\Navbar;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;

class Search extends Component
{ 
    #[Url]
    public ?string $search;
    public $products = [];
    public function updatedSearch()
    {
        $this->products = Product::withAnyTags([$this->search])
        ->orWhere('name', 'like', '%' . $this->search . '%')
        ->get();
    }

    public function render()
    {
        return view('livewire.website.navbar.search',[
            'products' => $this->products
        ]);
    }
}
