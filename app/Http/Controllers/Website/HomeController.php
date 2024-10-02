<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View 
    {
        $categories = Category::active()->inRandomOrder()->get();
        $latestProducts = Product::active()->orderBy('id', 'desc')->take(9)->get();

        return view('website.pages.home.index',compact('categories','latestProducts'));
    }
}
