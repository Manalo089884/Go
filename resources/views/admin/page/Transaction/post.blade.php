@extends('admin.layout.admin')
@section('content')
@section('title', 'Post')
<h2 class="intro-y text-lg font-medium mt-10">
    Home Banner
</h2>
<livewire:form.home-banner-form/>

<livewire:table.home-banner-table/>

<livewire:modal.delete-banner/>
@endsection

@push('scripts')
<script>
    //Show Form Modal
    const myModal = tailwind.Modal.getInstance(document.querySelector("#add-item-modal"));
    window.addEventListener('OpenModal',event => {
        myModal.show();
    });
    //Hide Form Modal
    window.addEventListener('CloseModal',event => {
        myModal.hide();
    });
    //Closing Modal and Refreshing its value
    const myModalEl = document.getElementById('add-item-modal')
     myModalEl.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    });

 //Delete Modal
 const BannerDeleteModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#delete-confirmation-modal"));
    //Show Delete Modal
    window.addEventListener('openDeleteModal',event => {
        BannerDeleteModal.show();
    });
    //Hide Delete Modal
    window.addEventListener('CloseDeleteModal',event => {
        BannerDeleteModal.hide();
    });
    //Hide Modal and Refresh its value
    const DeleteModal = document.getElementById('delete-confirmation-modal')
    DeleteModal.addEventListener('hidden.tw.modal', function(event) {
        console.log('Working');
        livewire.emit('forceCloseModal');
    })
</script>
@endpush
