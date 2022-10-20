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
                <img alt="Go Dental Image" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/login_shop.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br> sign up to your account.</div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
            </div>
        </div>
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <!-- Register Form -->
                <form action="{{Route('register.store')}}" method="POST">
                    @csrf
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign Up</h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">
                        A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place
                    </div>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Name" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror

                        <input type="number" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Age" name="age" value="{{old('age')}}">
                        @error('age')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror

                        <input type="email" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email" name="email" value="{{old('email')}}">
                        @error('email')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror

                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" name="password">
                        @error('password')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation" name="password_confirmation">

                        <select data-placeholder="Select Category" class="tom-select w-full mt-4" name="gender">
                            <option disabled>Select Gender</option>
                            <option>Male</option>
                            <option >Female</option>
                        </select>
                        @error('gender')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <input type="submit" value="Register" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">
                        <a href="{{Route('login.index')}}" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">
                            Sign in
                        </a>
                    </div>
                </form>
                <!-- End Registration Form -->
            </div>
        </div>
    </div>
</div>
@endsection
