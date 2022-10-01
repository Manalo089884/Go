@extends('customer.layout.base')
@section('content')
@section('title', 'Address Book')

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
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Address Book
                    </h2>
                </div>
                <div class="p-5">
                    <div class="overflow-x-auto">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap">Full Name</th>
                                    <th class="whitespace-nowrap text-center">Address</th>
                                    <th class="whitespace-nowrap text-center">Postcode</th>
                                    <th class="whitespace-nowrap text-center">Phone Number</th>
                                    <th class="whitespace-nowrap text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="whitespace-nowrap">Mark Joseph Manalo</td>
                                    <td class="whitespace-nowrap text-center">283 Ramos Compound Baesa Quezon City</td>
                                    <td class="whitespace-nowrap text-center">Metro Manila</td>
                                    <td class="whitespace-nowrap text-center">09452692274</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">Paul Cedrick Reyes</td>
                                    <td class="whitespace-nowrap text-center">283 Ramos Compound Baesa Quezon City</td>
                                    <td class="whitespace-nowrap text-center">Metro Manila</td>
                                    <td class="whitespace-nowrap text-center">09452692274</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">Gene Vincent Soriano</td>
                                    <td class="whitespace-nowrap text-center">283 Ramos Compound Baesa Quezon City</td>
                                    <td class="whitespace-nowrap text-center">Metro Manila</td>
                                    <td class="whitespace-nowrap text-center">09452692274</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="btn btn-primary w-52 mt-3">Add New Address</button>
                    </div>

                </div>
            </div>
            <!-- END: Display Information -->

        </div>
    </div>

@endsection
@push('scripts')
<script>
</script>
@endpush
