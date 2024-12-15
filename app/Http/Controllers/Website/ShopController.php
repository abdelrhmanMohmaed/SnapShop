<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index(Request $request, $department_id = null): View
    {
        $departments          = Department::active()->get();
        $selectedDepartmentId = $department_id;

        return view('website.pages.shop.index', compact('departments', 'selectedDepartmentId'));
    }


    public function show(Product $product): View
    {
        $product->load(['category', 'discount', 'favorites']);

        $relatedProducts = Product::active()->where('category_id', $product->category_id)->get();

        return view('website.pages.shop.show', compact('product', 'relatedProducts'));
    }
}
