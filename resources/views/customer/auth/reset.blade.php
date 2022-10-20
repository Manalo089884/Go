@extends('customer.layout.base')
@section('content')
@section('title', 'Reset Password')

<div class="intro-y items-center justify-center flex">
    <div class="bg-white my-10" style="width: 30rem">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                   Forgot your password?
                </h2>
        </div>
        <div id="vertical-form" class="p-5">
            <form action="{{Route('resetcustomer.store')}}" method="POST">
                @csrf
                @if(session('success'))
                <div class="alert alert-success show mb-5 form-control" role="alert">{{session('success')}}</div>
                @endif

                <div class="preview">
                    <div>
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="example@gmail.com">
                        @error('email')
                            <div class="login__input-error text-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-5 w-full "  @if(session('success')) disabled @endif>Reset Password</button>
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

