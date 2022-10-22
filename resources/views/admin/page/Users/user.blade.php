@extends('admin.layout.admin')
@section('content')
@section('title', 'User')
<h2 class="intro-y text-lg font-medium mt-10">
    List of Users
</h2>

<livewire:table.user-table/>

@if(session('success'))
<div id="success-notification-content" class="toastify-content hidden flex non-sticky-notification-content">
    <i class="fa-regular fa-circle-check fa-3x text-success mx-auto"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">User Successfully Created</div>
        <div class="text-slate-500 mt-1">{{session('success')}}</div>
    </div>
</div>
<script>
Toastify({
    node: $("#success-notification-content") .clone() .removeClass("hidden")[0],
    duration: 7000,
    newWindow: true,
    close: true,
    gravity: "top",
    position: "right",
    stopOnFocus: true, }).showToast();
</script>
@endif


@endsection
