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
                <img alt="Go Dental Image" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/undraw_inspiration.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Forgotten Password?</div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">No Worries Go Dental got you</div>
            </div>
        </div>
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <!-- Reset Password Form -->
                <form action="{{Route('reset.store')}}" method="POST">
                    @csrf
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Reset Password</h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">
                        Forgotten Password? No Worries Go Dental got you
                    </div>
                    <div class="intro-x mt-8">
                        @if(session('success'))
                            <div class="alert alert-success show mb-5 form-control" role="alert">{{session('success')}}</div>
                        @endif
                        <input type="email" class="intro-x login__input form-control py-3 px-4 block" placeholder="Enter your email" name="email" value="{{old('email')}}"  >
                        @error('email')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <input type="submit" value="Reset Password" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" @if(session('success'))
                        disabled
                    @endif>
                    </div>
                </form>
                <!-- End Reset Form -->
            </div>
        </div>
    </div>
</div>
@endsection
