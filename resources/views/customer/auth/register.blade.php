@extends('customer.layout.base')
@section('content')
@section('title', 'Register')

<div class="flex items-center mt-8">
    <h2 class="intro-y text-3xl font-medium mr-auto">
        Create your Go Dental Account
    </h2>
</div>
<!-- BEGIN: Wizard Layout -->
<div class="intro-y box py-10 sm:py-20 mt-5">
    <div class="px-5 mt-5">
        <div class="font-medium text-center text-lg">Setup Your Account</div>
        <div class="text-slate-500 text-center mt-2">To start off, please enter your username, email address and password.</div>
    </div>
    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
        <form action="{{Route('CRegister.store')}}" method="POST">
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
            @if(session('success'))
                <div class="alert alert-primary show mb-2" role="alert">{{session('success')}}</div>
            @endif

            <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">Phone Number</label>
                    <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                </div>

                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" placeholder="Age">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label class="form-label">Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button class="btn btn-primary w-24 ml-2">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@push('scripts')
<script>
</script>
@endpush
