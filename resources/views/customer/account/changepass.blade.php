@extends('customer.layout.base')
@section('content')
@section('title', 'Change Password')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
             Welcome to Go Dental!
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        @include('customer.component.side-profile')
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Change Password -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Change Password
                    </h2>
                </div>
                <div class="p-5">
                    @if(session('error'))
                        <div class="alert alert-danger show flex items-center mb-2" role="alert"> <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ session('error') }} </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-primary show mb-2" role="alert">{{ session('success') }}</div>
                    @endif
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

                    <form action="{{ Route('customer.change.pass') }}" method="POST">
                        @csrf
                        <div>
                            <label for="oldpass" class="form-label">Old Password</label>
                            <input id="oldpass" type="password" class="form-control" placeholder="Please Enter your Old Password" name="current_password" value="{{ old('current_password') }}">
                        </div>
                        <div class="mt-3">
                            <label for="newpass" class="form-label">New Password</label>
                            <input id="newpass" type="password" class="form-control" placeholder="Please Enter your New Password" name="password" value="{{ old('password') }}">
                        </div>
                        <div class="mt-3">
                            <label for="cpass" class="form-label">Confirm New Password</label>
                            <input id="cpass" type="password" class="form-control" placeholder="Please Enter Matching Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        </div>
                        <div class="flex justify-end">
                            <button class="btn btn-primary mt-4">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Change Password -->
        </div>
    </div>

@endsection
@push('scripts')
<script>
</script>
@endpush
