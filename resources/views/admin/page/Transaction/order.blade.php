@extends('admin.layout.admin')
@section('content')  
@section('title', 'Order')
<h2 class="intro-y text-lg font-medium mt-10">Order</h2>
<livewire:table.order-table/>
@endsection