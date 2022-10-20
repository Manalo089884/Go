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
    @include('admin.component.profile-side')
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Profile Information
                </h2>
            </div>
            <div class="p-5">
                <div class="flex flex-col-reverse xl:flex-row flex-col">
                    <div class="flex-1 mt-6 xl:mt-0">
                        <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 2xl:col-span-6">
                                <div>
                                    <label for="update-profile-form-1" class="form-label">Display Name</label>
                                    <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('web')->user()->name}}" disabled>
                                </div>
                                <div class="mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('web')->user()->email}}" disabled>
                                </div>
                            </div>
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="mt-3 2xl:mt-0">
                                    <label for="Gender" class="form-label">Gender</label>
                                    <input id="Gender" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('web')->user()->gender}}" disabled>
                                </div>
                                <div class="mt-3">
                                    <label for="Age" class="form-label">Age</label>
                                    <input id="Age" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('web')->user()->age}}" disabled>
                                </div>
                            </div>

                        </div>
                        <div class="flex justify-end"> <button type="button" class="btn btn-primary w-32 mt-8">Edit Profile</button></div>

                    </div>
                    <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                        <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{ asset('dist/images/profile-15.jpg') }}">
                                <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                            </div>
                            <div class="mx-auto cursor-pointer relative mt-5">
                                <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Display Information -->

    </div>
</div>
@endsection
