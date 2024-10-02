<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        {{-- <div class="header__top__right__language">
                            <img src="{{ asset('assets/website/img/language.png') }}" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div> --}}
                        <div class="header__top__right__auth">
                            <a href="{{ route('website.home.login.index') }}"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ route('website.home.index') }}"><img src="{{ asset('assets/website/img/logo.png') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ request()->routeIs('website.home.index') ? 'active' : '' }}"><a
                                href="{{ route('website.home.index') }}">Home</a></li>
                        <li
                            class="{{ request()->routeIs('website.home.shop.index') || request()->routeIs('website.home.shopping-cart') || request()->routeIs('website.home.checkout') || request()->routeIs('website.home.shop.show') ? 'active' : '' }}">
                            <a href="{{ route('website.home.shop.index') }}">Shop</a>
                        </li>

                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{ route('website.home.shop.show') }}">Shop Details</a></li>
                                <li><a href="{{ route('website.home.shopping-cart') }}">Shopping Cart</a></li>
                                <li><a href="{{ route('website.home.checkout') }}">Check Out</a></li>
                                <li><a href="{{ route('website.home.blog.show') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li
                            class="{{ request()->routeIs('website.home.blog.index') || request()->routeIs('website.home.blog.show') ? 'active' : '' }}">
                            <a href="{{ route('website.home.blog.index') }}">Blog</a>
                        </li>
                        <li class="{{ request()->routeIs('website.home.contact-us') ? 'active' : '' }}"><a
                                href="{{ route('website.home.contact-us') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- header-counters => favourites and cart -->
            @livewire('website.navbar.header-counters')
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero {{ request()->routeIs('website.home.index') ? '' : 'hero-normal' }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Departments</span>
                    </div>
                    <ul>
                        @foreach ($departments as $item)
                            <li><a href="{{$item->id}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
