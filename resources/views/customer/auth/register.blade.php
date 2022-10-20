@extends('customer.layout.base')
@section('content')
@section('title', 'Register')
<div class="items-center justify-center flex">
    <div class="" style="width: 54rem">
        <div class="flex intro-y items-center py-10 sm:py-3 mt-5">
            <div class="flex items-center mr-auto">
                <h2>Create your Go Dental Account</h2>
            </div>
            <a class="text-success" href="{{ Route('CLogin.index') }}">Already have an account? Login here</a>
        </div>
    </div>
</div>
<!-- BEGIN: Wizard Layout -->
<div class="items-center justify-center flex" >
    <div class="intro-y box py-10 sm:py-10 mt-5" style="width: 54rem">
        <div class="px-1 mt-0">
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
<<<<<<< HEAD
=======

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="{{ old('email') }}">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label class="form-label">Phone Number</label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">
                    </div>


                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select">
                            <option value="Male" @if(old('gender') == "Male") selected @endif>Male</option>
                            <option value="Female" @if(old('gender') == "Female") selected @endif>Female</option>
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
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label class="form-label">Birthday</label>
                        <div class="relative w-full mx-auto">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </div>
                            <input type="text" class="datepicker form-control pl-12" name="birthday" data-single-mode="true" value="{{ old('birthday') }}">
                        </div>
                    </div>
                </div>
                <button class="intro-x btn btn-primary mt-5 w-full">Register</button>
                <div class="text-slate-500 text-justify mt-4 intro-x">By proceeding to sign up,
                    I acknowledge that I have read and consented to Go Dental <a href="{{ Route('terms') }}" class="text-success">Terms of Use</a> and <a href="{{ Route('privacy') }}" class="text-success">Privacy Policy</a>,
                    which sets out how Go Dental collects, uses and discloses my personal data, and the rights that
                    I have under applicable law.
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
