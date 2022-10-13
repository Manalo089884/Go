@extends('admin.layout.admin')
@section('content')
@section('title', 'Supplier')
<h2 class="intro-y text-lg font-medium mt-10">
    Supplier List
</h2>

<livewire:table.supplier-table/>
<livewire:modal.archive-supplier/>


<div id="success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
    <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium" id="title"></div>
        <div class="text-slate-500 mt-1" id="message"></div>
     </div>
</div>

@if(session('success'))
<div id="insert-success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
    <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Supplier Added Successfully</div>
        <div class="text-slate-500 mt-1">{{session('success')}}</div>
    </div>
</div>
<script>
Toastify({
    node: $("#insert-success-notification-content") .clone() .removeClass("hidden")[0],
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
    //Delete Modal
    const SupplierArchiveModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#delete-confirmation-modal"));
    //Show Delete Modal
    window.addEventListener('openArchiveModal',event => {
        SupplierArchiveModal.show();
    });
    //Hide Delete Modal
    window.addEventListener('CloseDeleteModal',event => {
        SupplierArchiveModal.hide();
    });
    //Hide Modal and Refresh its value
    const ArchiveModal = document.getElementById('delete-confirmation-modal')
    ArchiveModal.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    })
</script>
@endpush
