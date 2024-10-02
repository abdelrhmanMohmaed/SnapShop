<?php

namespace App\Livewire\Website\Navbar;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class HeaderCounters extends Component
{
    public $favouriteCount = 0;

    public function mount()
    {
        $this->updateFavouriteCount();
    }
    
    #[On('favourite-updated')]
    public function updateFavouriteCount()
    {
        if(Auth::check()) {

            $this->favouriteCount = auth()->user()->favorites()->count();
        } else {

            $this->favouriteCount = 0;
        }
    }

    public function render(): View
    {
        return view('livewire.website.navbar.header-counters');
    }
}