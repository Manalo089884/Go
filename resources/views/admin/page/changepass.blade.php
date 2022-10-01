@extends('admin.layout.admin')
@section('content')
@section('title', 'Profile')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Update Profile
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <div class="relative flex items-center p-5">
                <div class="w-12 h-12 image-fit">
                    <img class="rounded-full" src="{{ asset('dist/images/profile-15.jpg') }}">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium text-base">{{Auth::guard('web')->user()->name}}</div>
                    <div class="text-slate-500">Admin</div>
                </div>

            </div>
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <a class="flex items-center" href="{{ Route('profile.index') }}"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                <a class="flex items-center mt-5 {{ (request()->is('admin/profile/changepassword')) ? 'text-primary font-medium' : '' }}" href="{{ Route('AdminChangePass') }}"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>

            </div>
        </div>
    </div>
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Change Password
                </h2>
            </div>
            <div class="p-5">
                <div>
                    <label for="change-password-form-1" class="form-label">Old Password</label>
                    <input id="change-password-form-1" type="password" class="form-control" placeholder="Input text">
                </div>
                <div class="mt-3">
                    <label for="change-password-form-2" class="form-label">New Password</label>
                    <input id="change-password-form-2" type="password" class="form-control" placeholder="Input text">
                </div>
                <div class="mt-3">
                    <label for="change-password-form-3" class="form-label">Confirm New Password</label>
                    <input id="change-password-form-3" type="password" class="form-control" placeholder="Input text">
                </div>
                <button type="button" class="btn btn-primary mt-4">Change Password</button>
            </div>
        </div>
        </div>
        <!-- END: Display Information -->

    </div>
</div>
@endsection
