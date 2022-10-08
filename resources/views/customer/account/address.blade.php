@extends('customer.layout.base')
@section('content')
@section('title', 'Address Book')
<script src="{{ asset('dist/js/phil-conv-address.js') }}"></script>
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

                    <livewire:table.customer-address-table/>

                    <livewire:modal.delete-customer-address/>

                    <div class="flex justify-end">
                        <a href="{{ Route('customer.address.create') }}" class="btn btn-primary w-52 mt-3">Add New Address</a>
                    </div>
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
    })</script>
@endpush
