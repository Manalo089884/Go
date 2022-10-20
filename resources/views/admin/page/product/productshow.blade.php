@extends('admin.layout.admin')
@section('content')
@section('title', 'Product')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Showing Product - {{$product->name}}</h2>
</div>
<div class="col-span-12 lg:col-span-8 2xl:col-span-9">
    <!-- BEGIN: Display Product Information -->
    <div class="intro-y box mt-2 lg:mt-5">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Product Information
            </h2>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#ShowSupplierModal" class="btn btn-outline-primary w-32 mr-1">
                    <i class="fa-solid fa-eye w-4 h-4 mr-1"></i>Supplier Info
                </a>
            </div>
             <!-- END: Modal Toggle --> <!-- BEGIN: Modal Content -->
          </div>
        <div class="p-5">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label for="Name" class="form-label">Product Name</label>
                        <input id="Name" type="text" class="form-control" value="{{$product->name}}" disabled>
                    </div>
                    <div class="mt-3">
                        <label for="Category" class="form-label">Category Name</label>
                        <input id="Category" type="text" class="form-control" value="{{ $product->category->name }}" disabled>
                    </div>
                    <div class="mt-3">
                        <label for="Brand" class="form-label">Brand Name</label>
                        <input id="Brand" type="text" class="form-control" value="{{ $product->brand->name }}" disabled>
                    </div>
                    <div class="mt-3">
                        <label for="Status" class="form-label">Status</label>
                        @if($product->status == 1)
                            <input id="Status" type="text" class="form-control" value="Active" disabled>
                        @elseif ($product->status == 0)
                            <input id="Status" type="text" class="form-control" value="Draft" disabled>
                        @endif
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div class="mt-3 xl:mt-0">
                        <label for="Cost" class="form-label">Cost Price</label>
                        <input id="Cost" type="text" class="form-control"  value="{{ $product->cprice }}" disabled>
                    </div>
                    <div class="mt-3">
                        <label for="Selling Price" class="form-label">Selling Price</label>
                        <input id="Selling Price" type="text" class="form-control"  value="{{ $product->sprice }}" disabled>
                    </div>
                    <div class="mt-3">
                        <label for="SKU" class="form-label">SKU</label>
                        <input id="SKU" type="text" class="form-control"  value="{{ $product->SKU }}" disabled>
                    </div>
                    <div class="mt-3">
                        <label for="inventory" class="form-label">Current Stock</label>
                        <input id="inventory" type="text" class="form-control"  value="{{ $product->stock }}" disabled>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="mt-3">
                        <label for="description" class="form-label">Description</label>
                        {!!   $product->description !!}
                    </div>
                </div>

            </div>
            <div class="flex justify-end mt-5">
                <a href="" class="btn btn-outline-dark w-32 mr-1">Archive Product</a>
                <a href="" class="btn btn-outline-danger w-32 mr-1">Delete Product</a>
                <a href="{{Route('product.index')}}" class="btn btn-outline-success  w-32 mr-1">Return</a>
            </div>
        </div>
    </div>
    <!-- END: Display Product Information -->
    <!-- BEGIN: Product Image Information -->
    <div class="intro-y box mt-5">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Product Image
            </h2>
        </div>
        <div class="p-5">
            @if(count($product->images) == 0)
            <div class="flex justify-center	">
                <div>
                    <div>
                        <img alt="Missing Image" class="object-fill  rounded-md h-48 w-96" src="{{ asset('dist/images/NoResultFound.svg') }}">
                    </div>
                    <div class="flex justify-center mt-2 text-lg text-slate-600 font-medium leading-none mt-3">No Image Found</div>
                </div>
            </div>
            @else
                <div class="intro-y grid grid-cols-12 gap-6 mt-5" id="datatable">
                    @foreach ($product->images as $model)
                        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                            <div class="p-5">
                                <div class="flex items-center justify-center ">
                                    <img class="object-contain h-48 " src="/product_images/{{$model->images}}"  data-action="zoom" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-end mt-5">
                    <a href="{{Route('product.index')}}"  class="btn btn-outline-secondary w-24 mr-1">Return</a>
                </div>
            @endif

        </div>
    </div>
    <!-- END: Product Image  -->
</div>

<div id="ShowSupplierModal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                    Supplier Information
                </h2>
            </div>
            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Name:</label>
                    <label class="form-label">{{ $product->suppliers->name }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Email:</label>
                    <label class="form-label">{{ $product->suppliers->email }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Contact Number:</label>
                    <label class="form-label">{{ $product->suppliers->contact }}</label>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <label for="modal-form-1" class="form-label font-medium">Supplier Address:</label>
                    <label class="form-label">{{ $product->suppliers->address }}</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">
                    Dismiss
                </button>
            </div>
            <!-- END: Modal Footer -->
        </div>
    </div>
</div>


@endsection
