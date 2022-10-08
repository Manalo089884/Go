@extends('customer.layout.base')
@section('content')
@section('title', 'Profile Information')

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
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Personal Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input id="fullname" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('customer')->user()->name}}" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('customer')->user()->email}}" disabled>
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input id="phone_number" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('customer')->user()->phone_number}}" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input id="gender" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('customer')->user()->gender}}" disabled>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="age" class="form-label">Birthday</label>
                                        <input id="age" type="text" class="form-control" placeholder="Input text" value="{{Auth::guard('customer')->user()->birthday}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button class="btn btn-primary w-32 mt-3">Edit Profile</button>
                                <a href="{{ Route('customer.change.pass') }}" class="btn btn-primary w-50 mt-3">Change Password</a>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->
            <!-- BEGIN: RECENT ORDERS -->
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Recent Orders
                    </h2>
                </div>
                <div class="p-5">
                    <div class="overflow-x-auto">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap">Order #</th>
                                    <th class="whitespace-nowrap text-center">Place On</th>
                                    <th class="whitespace-nowrap text-center">Items</th>
                                    <th class="whitespace-nowrap text-center">Total</th>
                                    <th class="whitespace-nowrap text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="whitespace-nowrap">489455921021952</td>
                                    <td class="whitespace-nowrap text-center">28/03/2022</td>
                                    <td class="whitespace-nowrap text-center">Toothpaste</td>
                                    <td class="whitespace-nowrap text-center">₱100.00</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">189455921021932</td>
                                    <td class="whitespace-nowrap text-center">12/04/2022</td>
                                    <td class="whitespace-nowrap text-center">Toothbrush</td>
                                    <td class="whitespace-nowrap text-center">₱120.00</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">789455921021952</td>
                                    <td class="whitespace-nowrap text-center">30/06/2022</td>
                                    <td class="whitespace-nowrap text-center">Toothpaste</td>
                                    <td class="whitespace-nowrap text-center">₱500.00</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
             <!-- END: RECENT ORDERS -->
        </div>
    </div>

@endsection
@push('scripts')
<script>
</script>
@endpush
