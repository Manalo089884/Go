@extends('customer.layout.base')
@section('content')
@section('title', 'Address Book')
<script src="{{ asset('dist/js/phil-address.js') }}"></script>
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
                                @forelse ($address as $address)
                                <tr>
                                    <td class="whitespace-nowrap">{{ $address->name }}</td>
                                    <td class="whitespace-nowrap text-center">{{ $address->house }}</td>
                                    <td class="whitespace-nowrap text-center"><p id="pro">{{ $address->province }}</p>-{{ $address->city }}-{{ $address->barangay }} </td>
                                    <td class="whitespace-nowrap text-center">{{ $address->phone_number }}</td>
                                    <td class="whitespace-nowrap text-center">
                                        <a href="" class="mr-1"><i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit</a>
                                        <a href="" class="text-danger"><i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete</td></a>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">No Address Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ Route('customer.address.create') }}" class="btn btn-primary w-52 mt-3">Add New Address</a>
                    </div>

                </div>
            </div>
            <!-- END: Display Information -->
        </div>
    </div>
    @if(session('success'))
    <div class="intro-y">
        <div id="edit-success-notification-content" class="toastify-content hidden flex non-sticky-notification-content ">
            <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
            <div class="ml-4 mr-4">
                <div class="font-medium">New Address Added</div>
                <div class="text-slate-500 mt-1">{{session('success')}}</div>
            </div>
        </div>
    </div>

    <script>
    Toastify({
        node: $("#edit-success-notification-content") .clone() .removeClass("hidden")[0],
        duration: 7000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true, }).showToast();
    </script>
    @endif
@endsection
@push('scripts')
<script>
</script>
@endpush
