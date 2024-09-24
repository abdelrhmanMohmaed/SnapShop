<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Snap Shop | @yield('title')</title>

    @include('website.layouts.partials.main.styles')
    @stack('styles')
</head>

<body>
    <!-- Start Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- End Page Preloder -->

    <!-- Start Navbar -->
    @include('website.layouts.partials.main.navbar')

    @yield('hero-different-section-home-page')
    </div>
    </div>
    </div>
    </section>
    <!-- Hero Section End -->
    <!-- End Navbar -->


    @yield('content')




    @include('website.layouts.partials.main.footer')


    @include('website.layouts.partials.main.scripts')
    @stack('scripts')
</body>

</html>
