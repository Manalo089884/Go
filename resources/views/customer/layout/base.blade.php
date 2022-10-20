<!DOCTYPE html>
<<<<<<< HEAD
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">

=======
<html lang="en" class="light">
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('icons/log.png')}}" rel="shortcut icon">
        <link rel="stylesheet" href="{{ asset('dist/css/build.css') }}" />
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Go Dental E-Commerce Seller">
        <meta name="keywords" content="Go Dental">
        <meta name="author" content="Mark Joseph Manalo">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Go Dental - @yield('title')</title>
        <!-- BEGIN: CSS Assets-->
        <script src="https://kit.fontawesome.com/1cff19edbf.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <!-- END: CSS Assets-->
        @livewireStyles
    </head>
    <!-- END: Head -->
    <body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======


>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        <!-- BEGIN: Mobile Menu -->
        @include('customer.component.mobile-menu')
        <!-- END: Mobile Menu -->
        @include('customer.component.top-menu')
        <!-- BEGIN: Top Bar -->
        @include('customer.component.side-menu')
        <!-- Content -->
        <div class="content content--top-nav">
            @yield('content')
        </div>
        <!-- END: Top Menu -->
        @include('customer.component.footer')
        <!-- BEGIN: JS Assets-->

        <script src="{{ asset('dist/js/app.js') }}"></script>
        @livewireScripts
        <!-- END: JS Assets-->
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

        @stack('scripts')

    </body>
</html>

