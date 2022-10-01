@extends('customer.layout.base')
@section('content')
@section('title', 'Login')

{{-- style="margin: 3%; align-items: center; justify-content: center;  display: flex" --}}
{{-- style="background-color: white; align-items: center; justify-content: center; width: 30rem" --}}

<div class="items-center justify-center flex">
    <div class="bg-white my-10" style="width: 30rem">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 ">
                <h2 class="intro-x font-medium text-base mr-auto text-center ">
                     Welcome to Go Dental! Please Login
                </h2>
        </div>
        <div id="vertical-form" class="p-5">
            <form action="{{Route('CLogin.store')}}" method="POST">
                @csrf
                <!-- Incorrect Password Alert -->
                @if(session('fail'))
                    <div class="alert alert-danger show mb-2 intro-x" role="alert">{{ session('fail') }}</div>
                @endif
                <!-- Show All error -->
                @if ($errors->any())
                <div class="alert alert-danger show mb-2 intro-x" role="alert">
                    <div class="flex items-center">
                        <div class="font-medium text-lg">Whoops Something Went Wrong</div>
                        <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Error</div>
                    </div>
                    <div class="mt-3">
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                </div>
                @endif

                @if(session('status'))
                    <div class="alert alert-primary show mb-2" role="alert">{{session('status')}}</div>
                @endif

                <div class="preview">
                    <div class="intro-x">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="mt-3 w-96 intro-x">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2" name="remember">
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>
                        <a href="">Forgot Password?</a>
                    </div>

                    <button class="intro-x btn btn-primary mt-5 w-full" >Login</button>

                    <div style="padding-top: 5%; text-align: center" class="intro-x">
                    <a class="text-success" href="{{Route('CRegister.index')}}">New to Go Dental? Click here.</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
</script>
@endpush
