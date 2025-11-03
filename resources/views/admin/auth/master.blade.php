@php
    $rtlClass = LaravelLocalization::getCurrentLocale() == 'ar' ? ' rtl' : '';
@endphp
        <!doctype html>
<html lang="en">

@include('admin.auth.partials.head')

<body class="light{{ $rtlClass }}">

@yield('content')

@include('admin.auth.partials.scripts')

</body>
</html>