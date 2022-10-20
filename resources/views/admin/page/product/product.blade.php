@extends('admin.layout.admin')
@section('content')
@section('title', 'Product')
<h2 class="intro-y text-lg font-medium mt-10">
    Product List
</h2>

<livewire:table.product-table/>

<livewire:modal.delete-product/>

@if(session('success'))
<div id="edit-success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
    <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Product Added Successfully</div>
        <div class="text-slate-500 mt-1">{{session('success')}}</div>
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
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
@if(session('ProductEditSuccess'))
    <div id="edit-success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
        <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
        <div class="ml-4 mr-4">
            <div class="font-medium">Edit Success</div>
            <div class="text-slate-500 mt-1">{{session('ProductEditSuccess')}}</div>
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


<div id="success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
    <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium" id="title"></div>
        <div class="text-slate-500 mt-1" id="message"></div>
     </div>
</div>

<div id="invalid-success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
    <i class="fa-regular fa-circle-xmark fa-3x text-danger mx-auto"></i>
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

    //Delete Modal
    const ProductDeleteModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#delete-confirmation-modal"));
    //Show Delete Modal
    window.addEventListener('openDeleteModal',event => {
        ProductDeleteModal.show();
    });
    //Hide Delete Modal
    window.addEventListener('CloseDeleteModal',event => {
        ProductDeleteModal.hide();
    });
    //Hide Modal and Refresh its value
    const DeleteModal = document.getElementById('delete-confirmation-modal')
    DeleteModal.addEventListener('hidden.tw.modal', function(event) {
        console.log('Working');
        livewire.emit('forceCloseModal');
    })
</script>
@endpush
