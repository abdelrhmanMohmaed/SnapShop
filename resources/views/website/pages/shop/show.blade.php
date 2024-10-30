@extends('website.layouts.main')

@section('title', 'Shop-Details')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/website/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{ $product->name }}</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('website.home.index') }}">Home</a>
                            <a href="{{ route('website.home.index') }}">{{ $product->category->name }}</a>
                            <span>{{ $product->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <livewire:website.shop.product-details :product="$product" :relatedProducts="$relatedProducts" />
    <!-- Product Details Section End -->

@endsection
