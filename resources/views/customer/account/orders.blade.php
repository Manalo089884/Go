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
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        My Orders
                    </h2>
                </div>
                <div class="p-5">
                    <div class="overflow-x-auto">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap">Product Name</th>
                                    <th class="whitespace-nowrap text-center">Category</th>
                                    <th class="whitespace-nowrap text-center">Total</th>
                                    <th class="whitespace-nowrap text-center">Quantity</th>
                                    <th class="whitespace-nowrap text-center">Status</th>
                                    <th class="whitespace-nowrap text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="whitespace-nowrap">Brush</td>
                                    <td class="whitespace-nowrap text-center">Key</td>
                                    <td class="whitespace-nowrap text-center">₱100.00</td>
                                    <td class="whitespace-nowrap text-center">2</td>
                                    <td class="whitespace-nowrap text-center text-success">Received</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">Paste</td>
                                    <td class="whitespace-nowrap text-center">Dey</td>
                                    <td class="whitespace-nowrap text-center">₱100.00</td>
                                    <td class="whitespace-nowrap text-center">200</td>
                                    <td class="whitespace-nowrap text-center text-success">Received</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap">Brush</td>
                                    <td class="whitespace-nowrap text-center">Ley</td>
                                    <td class="whitespace-nowrap text-center">₱300.00</td>
                                    <td class="whitespace-nowrap text-center">1</td>
                                    <td class="whitespace-nowrap text-center text-success">Received</td>
                                    <td class="whitespace-nowrap text-center"><i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show</td>
                                </tr>
                            </tbody>
                        </table>
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
