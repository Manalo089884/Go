@extends('customer.layout.base')
@section('content')  
@section('title', 'Login')

<div class="intro-y box mt-10">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">
            Go Dental Login 
        </h2>
    </div>
    <div id="vertical-form" class="p-5">
        <form action="{{Route('CLogin.store')}}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger show mb-2" role="alert">
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
                <div>
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="mt-3">
                    <label class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-check mt-5">
                    <input class="form-check-input" name="remember" type="checkbox" >
                    <label class="form-check-label" for="vertical-form-3">Remember me</label>
                </div>
                <button class="btn btn-primary mt-5">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection 
@push('scripts')
<script>
</script>
@endpush