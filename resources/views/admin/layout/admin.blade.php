<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('icons/log.png')}}" rel="shortcut icon">

        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Go Dental E-Commerce Seller">
        <meta name="keywords" content="Go Dental">
        <meta name="author" content="Mark Joseph Manalo">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Go Dental - @yield('title')</title>
        <script src="https://kit.fontawesome.com/1cff19edbf.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        @livewireStyles
    </head>
    <!-- END: Head -->

    <body class="py-5 md:py-0 bg-black/[0.15] ">

        <!-- BEGIN: Mobile Menu -->
        @include('admin.component.mobile-menu')
        <!-- END: Mobile Menu -->
        <div class="flex overflow-hidden">
            <!-- BEGIN: Side Menu -->
             @include('admin.component.side-menu')

            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                @include('admin.component.top-menu')
                <!-- END: Top Bar -->
                @yield('content')


            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        @livewireScripts
        <script src="{{ asset('dist/js/app.js') }}"></script>
        @stack('scripts')
        <!-- END: JS Assets-->
    </body>
</html>
