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
        <meta name="_token" content="{{csrf_token()}}" />
        <title>Go Dental - @yield('title')</title>



        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <!-- END: Head -->
    <body class="py-5 md:py-0 bg-black/[0.15] ">
        @include('admin.component.main-color-switcher')
        @include('admin.component.dark-mode-switcher')

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
       <script src="{{ mix('dist/js/app.js') }}"></script>
       <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
        @yield('scripts')
        <!-- END: JS Assets-->
    </body>
</html>