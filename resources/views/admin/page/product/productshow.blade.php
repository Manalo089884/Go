@extends('admin.layout.admin')
@section('content')  
@section('title', 'Product')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Showing Product - {{$product->name}}</h2>
</div>

<!-- Product Information -->
<div class="intro-y box p-5 mt-5">
   <h1>Name: {{$product->name}}</h1>
   <h1>Category: {{$product->category->name }}</h1>
   <h1>Brand: {{$product->brand->name}}</h1>
   <h1>Current Stock: {{$product->stock}}</h1>
   <h1>SKU: {{$product->SKU}}</h1>
   <h1>Cost Price: {{$product->cprice}}</h1>
   <h1>Selling Price: {{$product->sprice}}</h1>
   <h1>Status: {{$product->status}}</h1>
   <h1>Description:  {!! $product->description !!} </h1>
   <h1>List of Product Images</h1>
   <div class="intro-y grid grid-cols-12 gap-6 mt-5" id="datatable">
        @foreach ($images as $image)
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="p-5">
                    <div class="flex items-center justify-center ">
                        <img class="object-contain h-48 " src="/product_images/{{$image->images}}"  data-action="zoom" alt="">
                    </div>
                </div>
            </div>
        @endforeach
    </div> 
    <div class="text-right mt-5">
        <a href="{{Route('product.index')}}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Return</button></a>
        <button type="submit" class="btn btn-primary w-24 mt-3">Archive</button>
        <button type="submit" class="btn btn-primary w-24 mt-3">Delete</button>
    </div>
</div>
<!-- Images Layout -->

      
@endsection