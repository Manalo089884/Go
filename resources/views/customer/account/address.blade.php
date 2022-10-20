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
                        <table class="table table-bordered table-hover" id="datatable">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap">Full Name</th>
                                    <th class="whitespace-nowrap text-center">Address</th>
                                    <th class="whitespace-nowrap text-center">Postcode</th>
                                    <th class="whitespace-nowrap text-center">Phone Number</th>
                                    <th class="whitespace-nowrap text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="addressTbody">
                                @forelse ($address as $address)
                                <tr>
                                    <td class="whitespace-nowrap">{{ $address->name }}</td>
                                    <td class="whitespace-nowrap text-center">{{ $address->house }}</td>
                                    <td class="whitespace-nowrap text-center address">{{ $address->province }}-{{ $address->city }}-{{ $address->barangay}}</td>
                                    <td class="whitespace-nowrap text-center">{{ $address->phone_number }}</td>
                                    <td class="whitespace-nowrap text-center flex items-center justify-center">
                                        <a href="{{ Route('customer.address.edit', $address->id) }}" class="mr-1">
                                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit</a>
                                        <a class="flex items-center text-danger" href="javascript:;"  id="deleteAddress" data-name="{{$address->name}}"  data-id="{{$address->id}}">
                                            <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete
                                         </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">No Address Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7

                    @if($countaddress <= 4)
                    <div class="flex justify-end  mt-3">
                        <a href="{{ Route('customer.address.create') }}" class="btn btn-primary w-52">Add New Address</a>
<<<<<<< HEAD
                    </div>
                    @else
                         <!-- BEGIN: Modal Toggle -->
                         <div class="flex justify-end  mt-3">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#warning-modal-preview" class="btn btn-primary">
                                Add New Address
                            </a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="warning-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">
                                                Oops...
                                            </div> <div class="text-slate-500 mt-2">Something went wrong!</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn w-24 btn-primary">Ok</button>
                                        </div>
                                        <div class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400">
                                            <a href="" class="text-primary">
                                                You can only create up to 5 shipping address
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <!-- END: Modal Content -->
                    @endif

=======
                    <div class="flex justify-end">
                        <a href="{{ Route('customer.address.create') }}" class="btn btn-primary w-52 mt-3">Add New Address</a>
                    </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                    </div>
                    @else
                         <!-- BEGIN: Modal Toggle -->
                         <div class="flex justify-end  mt-3">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#warning-modal-preview" class="btn btn-primary">
                                Add New Address
                            </a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="warning-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">
                                                Oops...
                                            </div> <div class="text-slate-500 mt-2">Something went wrong!</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn w-24 btn-primary">Ok</button>
                                        </div>
                                        <div class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400">
                                            <a href="" class="text-primary">
                                                You can only create up to 5 shipping address
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <!-- END: Modal Content -->
                    @endif

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                </div>
            </div>
            <!-- END: Display Information -->
        </div>
    </div>
    <div id="success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
        <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
        <div class="ml-4 mr-4">
            <div class="font-medium" id="title"></div>
            <div class="text-slate-500 mt-1" id="message"></div>
         </div>
    </div>
    @if(session('deleteSuccess'))
    <div class="intro-y">
        <div id="edit-success-notification-content" class="toastify-content hidden flex non-sticky-notification-content ">
            <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
            <div class="ml-4 mr-4">
                <div class="font-medium">Address Deleted Successfully</div>
                <div class="text-slate-500 mt-1">{{session('deleteSuccess')}}</div>
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    @if(session('invalid'))
        <div id="invalid-success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
            <i class="fa-regular fa-circle-xmark fa-3x text-danger mx-auto"></i>
            <div class="ml-4 mr-4">
                <div class="font-medium" id="title">Operation Failed</div>
                <div class="text-slate-500 mt-1" id="message">{{session('invalid')}}</div>
            </div>
        </div>

        <script>
        Toastify({
            node: $("#invalid-success-notification-content") .clone() .removeClass("hidden")[0],
            duration: 7000,
            newWindow: true,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true, }).showToast();
        </script>
    @endif
<<<<<<< HEAD
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7


    <x-Modal.DeleteModal>
        <div class="p-5 text-center">
            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
            <div class="text-3xl mt-5">
                Are you sure?
            </div>
            <div class="text-slate-500 mt-2">
                Do you really want to delete this address
                <div id="delete_address"></div>
            </div>
        </div>
        <form action method="POST" id="deleteAddressForm">
            @method('DELETE')
            @csrf
            <div class="px-5 pb-8 text-center">
                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                <button type="submit" class="btn btn-danger w-24">Delete</button>
            </div>
        </form>
    </x-Modal.DeleteModal>
@endsection
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======


>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
@push('scripts')
<script src="{{ asset('dist/js/phil-conv-address.js') }}"></script>
<script>
       window.addEventListener('SuccessAlert',event => {
        let id = (Math.random() + 1).toString(36).substring(7);
        Toastify({
            node: $("#success-notification-content") .clone() .removeClass("hidden")[0],
            duration: 7000,
            className: `toast-${id}`,
            newWindow: false,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true, }).showToast();

            const toast = document.querySelector(`.toast-${id}`)
            toast.querySelector("#title").innerText = event.detail.title
            toast.querySelector("#message").innerText = event.detail.name
        });
    //Delete Modal
    const CustomerDeleteModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#delete-confirmation-modal"));
    //Show Delete Modal
    window.addEventListener('openDeleteModal',event => {
        CustomerDeleteModal.show();
    });
    //Hide Delete Modal
    window.addEventListener('CloseDeleteModal',event => {
        CustomerDeleteModal.hide();
    });
    //Hide Modal and Refresh its value
    const DeleteModal = document.getElementById('delete-confirmation-modal')
    DeleteModal.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    })
    $(document).ready(function () {
    $("#datatable").on("click", "#deleteAddress", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        $("#deleteAddressForm").attr("action", "/user/address/" + id);
        $("#delete_address").text(name);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#delete-confirmation-modal")
        );
        myModal.show();
    });

});




    </script>


@endpush
