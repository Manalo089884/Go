@extends('admin.layout.admin')
<<<<<<< HEAD
@section('content')
=======
@section('content')  
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
@section('title', 'Product')

<h2 class="text-lg font-medium mr-auto intro-y mt-10">List of Archive Products</h2>

<livewire:table.product-archive-table/>
<livewire:modal.force-delete-product/>
<livewire:modal.restore-product/>
<<<<<<< HEAD
<livewire:modal.show-product/>


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
=======

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
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa


@endsection
@push('scripts')
<script>
    //SuccessAlert
    window.addEventListener('SuccessAlert',event => {
        let id = (Math.random() + 1).toString(36).substring(7);
<<<<<<< HEAD
        Toastify({
            node: $("#success-notification-content") .clone() .removeClass("hidden")[0],
            duration: 7000,
            className: `toast-${id}`,
            newWindow: false,
            close: true,
            gravity: "top",
            position: "right",
=======
        Toastify({ 
            node: $("#success-notification-content") .clone() .removeClass("hidden")[0], 
            duration: 7000, 
            className: `toast-${id}`,
            newWindow: false, 
            close: true, 
            gravity: "top", 
            position: "right", 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
            stopOnFocus: true, }).showToast();

            const toast = document.querySelector(`.toast-${id}`)
            toast.querySelector("#title").innerText = event.detail.title
            toast.querySelector("#message").innerText = event.detail.name
        });
<<<<<<< HEAD

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
=======
        
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
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
        console.log('open');
    });
    //Hide Delete Modal
    window.addEventListener('CloseDeleteModal',event => {
        ProductDeleteModal.hide();
    });
    //Hide Modal and Refresh its value
    const DeleteModal = document.getElementById('delete-confirmation-modal')
<<<<<<< HEAD
    DeleteModal.addEventListener('hidden.tw.modal', function(event) {
=======
    DeleteModal.addEventListener('hidden.tw.modal', function(event) { 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
<<<<<<< HEAD
    RestoreModal.addEventListener('hidden.tw.modal', function(event) {
        console.log('Working');
        livewire.emit('forceCloseModal');
    });

     //ShowSupplierModal
     const ShowProduct = tailwind.Modal.getOrCreateInstance(document.querySelector("#ShowProductModal"));
     //Show Delete Modal
     window.addEventListener('openShowModal',event => {
        ShowProduct.show();
    });
    //Hide Delete Modal
    window.addEventListener('CloseShowModal',event => {
        ShowProduct.hide();
    });

    //Hide Modal and Refresh its value
    const ShowModalClose = document.getElementById('ShowProductModal')
    ShowModalClose.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    });





</script>
@endpush
=======
    RestoreModal.addEventListener('hidden.tw.modal', function(event) { 
        console.log('Working');
        livewire.emit('forceCloseModal');
    });
</script>
@endpush
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
