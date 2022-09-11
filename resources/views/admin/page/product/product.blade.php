@extends('admin.layout.admin')
@section('content')  
@section('title', 'Product')
<h2 class="intro-y text-lg font-medium mt-10">
    Product List
</h2>

<livewire:table.product-table/>


@endsection