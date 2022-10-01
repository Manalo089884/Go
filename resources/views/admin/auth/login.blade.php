@extends('admin.layout.base')
@section('content')
@section('title', 'login')

<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <div class="hidden xl:flex flex-col min-h-screen">
            <p class="-intro-x flex items-center pt-5">
                <img alt="Go Dental Logo" class="w-6" src="{{asset('icons/log.png')}}">
                <span class="text-white text-lg ml-3">
                    Go Dental
                </span>
            </p>
            <div class="my-auto">
                <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/login_shop.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to <br> sign in to your account.
                </div>
                <div class="intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                    Manage all your e-commerce accounts in one place
                </div>
            </div>
        </div>
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
               <!-- Login Form -->
                <form action="{{Route('login.store')}}" method="POST">
                    @csrf
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign In</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
                        A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place
                    </div>
                    <!-- Show Info Session -->
                    @if(session('info'))
                        <div class="intro-x alert alert-dark show mb-2 mt-2" role="alert">{{session('info')}}</div>
                    @endif
                    <!-- Show Status Session -->
                    @if (session('status'))
                        <div class="alert alert-danger show flex items-center mb-2 mt-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{session('status')}}
                        </div>
                    @endif
                    <!-- Show Fail Session -->
                    @if(session('fail'))
                        <div class="intro-x alert alert-danger show mb-2 mt-2" role="alert">{{session('fail')}}</div>
                    @endif

                    <div class="intro-x mt-8">
                        <input name="email" type="text" class="intro-x login__input form-control py-3 px-4 block" value="{{ old('email')}}" placeholder="Email" >
                        @error('email')
                            <div id="error-email" class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror
                        <input name="password" type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" >
                        @error('password')
                            <div id="error-password" class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2" name="remember">
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>
                        <a href="{{Route('reset.index')}}">Forgot Password?</a>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <input type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" value="Login" />
                    </div>
                </form>
                <!-- End Login Form -->
            </div>
        </div>
    </div>
</div>



@endsection
