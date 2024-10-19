@extends('website.layouts.main')

@section('title', 'Shop')

@section('content')
    <style>
        .product__pagination .active {
            background: #7fad39 !important;
            border-color: #7fad39 !important;
            color: #ffffff !important;
        }
    </style>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/website/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('website.home.index') }}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        @livewire('website.shop.filter-products')
    </section>
    <!-- Product Section End -->
@endsection
