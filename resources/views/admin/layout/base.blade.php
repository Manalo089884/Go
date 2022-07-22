<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
          <link href="{{asset('dist/images/logo.png')}}" rel="shortcut icon">
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Go Dental E-Commerce Seller">
        <meta name="keywords" content="Go Dental">
        <meta name="author" content="Mark Joseph Manalo">
        <title>Go Dental - @yield('title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- END: CSS Assets-->
    </head>
    <body class="login">
    @include('admin.component.main-color-switcher')
    @include('admin.component.dark-mode-switcher')
   
@yield('content')


    <script src="{{ asset('dist/js/app.js') }}"></script>


</body>
</html>