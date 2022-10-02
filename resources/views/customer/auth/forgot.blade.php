@extends('customer.layout.base')
@section('content')
@section('title', 'Change Password')

{{-- style="margin: 3%; align-items: center; justify-content: center;  display: flex" --}}
{{-- style="background-color: white; align-items: center; justify-content: center; width: 30rem" --}}

<div class="items-center justify-center flex">
    <div class="bg-white my-10" style="width: 30rem">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 ">
                <h2 class="intro-x font-medium text-base mr-auto text-center ">
                    Create a new password for {{$email}}
                </h2>
        </div>
        <div id="vertical-form" class="p-5">
            <form action="{{Route('customer.reset.password')}}" method="POST">
                @csrf
                <!-- Incorrect Password Alert -->
                @if(session('fail'))
                    <div class="alert alert-danger show flex items-center mb-2" role="alert"> <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{session('fail')}}</div>
                @endif
                <input type="hidden" name="token" value="{{$token}}">
                <input type="hidden" class="intro-x login__input form-control py-3 px-4 block mt-2" placeholder="Email" name="email" value="{{$email}}">
                @error('email')
                    <div class="login__input-error text-danger mt-2">{{$message}}</div>
                @enderror
                <div class="preview">
                    <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" name="password">
                        @error('password')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation" name="password_confirmation">
                        <button class="intro-x btn btn-primary mt-5 w-full" >Change Password</button>
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
