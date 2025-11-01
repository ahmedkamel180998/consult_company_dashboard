<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
<div class="container-xxl bg-white p-0">
    @include('frontend.partials.spinner')

    <div class="container-xxl position-relative p-0">
        @include('frontend.partials.navbar')

        @yield('hero')
    </div>

    @yield('content')

    @include('frontend.partials.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('frontend.partials.scripts')
</body>

</html>