@extends('admin.layout.base')
@section('content')
@section('title', 'register')
 <div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="#" class="-intro-x flex items-center pt-5">
                <img alt="Go Dental Logo" class="w-6" src="{{asset('icons/log.png')}}">
                <span class="text-white text-lg ml-3">Go Dental</span>
            </a>
            <div class="my-auto">
                <img alt="Go Dental Image " class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/login_shop.svg') }}">
                <div class="-intro-x text-white font-medium text-3xl leading-tight mt-10"> Create a new password for {{$email}}</div>
            </div>
        </div>
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <!-- Forgot Password Form -->
                <form action="{{Route('reset.password')}}" method="POST">
                    @csrf
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Set your password</h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">
                       Create a new password for {{$email}}
                    </div>
                    <div class="intro-x mt-2">.
                        @if(session('fail'))
                            <div class="alert alert-danger show flex items-center mb-2" role="alert"> <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{session('fail')}}</div>
                        @endif
                        <input type="hidden" name="token" value="{{$token}}">

                        <input type="hidden" class="intro-x login__input form-control py-3 px-4 block mt-2" placeholder="Email" name="email" value="{{$email ?? old('email')}}">
                        @error('email')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror

                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" name="password">
                        @error('password')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror

                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation" name="password_confirmation">
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left" >
                        <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-96 xl:mr-3 align-top">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
                <!-- Forgot Password Form -->
            </div>
        </div>
    </div>
</div>
@endsection
