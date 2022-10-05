@extends('customer.layout.base')
@section('content')
@section('title', 'Showing')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        {{$product->name}}
    </h2>
</div>

<h2>{{ $product->category->name }}</h2>
<h2>{{ $product->brand->name }}</h2>
<h2>{{ $product->stock }}</h2>
<h2>{{ $product->SKU }}</h2>
<h2>{{ $product->sprice }}</h2>
<h2>{{ $product->weight }}</h2>
<h2>{!! $product->description !!}</h2>

@if(count($product->images) == 0)
    <img alt="Missing Image" class="object-fill  rounded-md h-48 w-96" src="{{ asset('dist/images/logo.png') }}">
@else
    <div class="mx-6 pb-8">
        <div class="fade-mode">
            @foreach ($product->images as $model)
                <div class="h-64 px-2">
                    <div class="h-full image-fit rounded-md overflow-hidden">
                        <img alt="Missing Image" data-action="zoom" class="object-fill  rounded-md h-48 w-96" src="/product_images/{{$model->images}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
@if(Auth::guard('customer')->check())
<button class="intro-x btn btn-primary mt-5 w-full">Add to Cart</button>
@else
 <!-- BEGIN: Modal Toggle -->
 <div class="text-center">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#warning-modal-preview" class="btn btn-primary">Add to Cart</a>
</div> <!-- END: Modal Toggle --> <!-- BEGIN: Modal Content -->
<div id="warning-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-lucide="x-circle" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Hi Customer</div>
                    <div class="text-slate-500 mt-2">Before Ordering Create Account First</div>
                </div>
                <div class="px-5 pb-8 text-center">
                     <button  data-tw-dismiss="modal" class="btn w-24 btn-primary">Ok</button>
                </div>
                <div class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400">
                    <a href="{{ Route('CLogin.index') }}" class="text-primary">Please Login your Go Dental Account First Before Ordering</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
@endif

@endsection
@push('scripts')
<script>
</script>
@endpush

