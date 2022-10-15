@extends('admin.layout.admin')
@section('content')
@section('title', 'User')
<h2 class="intro-y text-lg font-medium mt-10">
    List of Users
</h2>

<livewire:table.user-table/>

@endsection
