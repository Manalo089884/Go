@extends('admin.layout.admin')
@section('content')
@section('title', 'Supplier')
<h2 class="intro-y text-lg font-medium mt-10">
    Supplier List
</h2>

<livewire:table.suppler-archive-table/>

<livewire:modal.force-delete-supplier/>

<livewire:modal.restore-supplier/>

<livewire:modal.show-supplier/>

<div id="success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
    <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium" id="title"></div>
        <div class="text-slate-500 mt-1" id="message"></div>
     </div>
</div>


@endsection

@push('scripts')
<script>
 //SuccessAlert
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

    //Invalid Alert
    window.addEventListener('InvalidAlert',event => {
        let id = (Math.random() + 1).toString(36).substring(7);
        Toastify({
            node: $("#invalid-success-notification-content") .clone() .removeClass("hidden")[0],
            duration: 7000,
            newWindow: true,
            className: `toast-${id}`,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true, }).showToast();

            const toast = document.querySelector(`.toast-${id}`)
                toast.querySelector("#title").innerText = event.detail.title
                toast.querySelector("#message").innerText = event.detail.name
    });

    //ShowSupplierModal
    const ShowSupplier = tailwind.Modal.getOrCreateInstance(document.querySelector("#ShowSupplierModal"));
     //Show Delete Modal
     window.addEventListener('openShowModal',event => {
        ShowSupplier.show();
    });
    //Hide Delete Modal
    window.addEventListener('CloseShowModal',event => {
        ShowSupplier.hide();
    });

    //Hide Modal and Refresh its value
    const ShowModalClose = document.getElementById('ShowSupplierModal')
    ShowModalClose.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    });

    //Delete Modal
    const SupplierDeleteModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#delete-confirmation-modal"));
    //Show Delete Modal
    window.addEventListener('openDeleteModal',event => {
        SupplierDeleteModal.show();

    });
    //Hide Delete Modal
    window.addEventListener('CloseDeleteModal',event => {
        SupplierDeleteModal.hide();
    });


    //Hide Modal and Refresh its value
    const DeleteModal = document.getElementById('delete-confirmation-modal')
    DeleteModal.addEventListener('hidden.tw.modal', function(event) {
        console.log('Working');
        livewire.emit('forceCloseModal');
    });


    //Restore Modal
    const ProductRestoreModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#restore-modal"));
    //Show Restore Modal
    window.addEventListener('OpenRestoreModal',event => {
        ProductRestoreModal.show();
        console.log('open Restore');
    });
    //Hide Restore Modal
    window.addEventListener('closeRestoreModal',event => {
        ProductRestoreModal.hide();
    });
    //Hide Modal and Refresh its value
    const RestoreModal = document.getElementById('restore-modal')
    RestoreModal.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    });
</script>
@endpush
