@extends('admin.layout.admin')
@section('content')
@section('title', 'Product')


<!-- Product Information -->
<div class="col-span-12 lg:col-span-8 2xl:col-span-9">
    <!-- BEGIN: Display Product Information -->
    <div class="intro-y box mt-2 lg:mt-5">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Editing Product - {{ $product->name }}
            </h2>
        </div>
        <form action="{{Route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

        <div class="p-5">
            @if ($errors->any())
            <div class="intro-y alert alert-danger show mb-2" role="alert">
                <div class="flex items-center">
                    <div class="font-medium text-lg">Whoops Something Went Wrong</div>
                    <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Error</div>
                </div>
                <div class="mt-3">
                    @foreach ($errors->all() as $error)
                     <div>{{$error}}</div>
                    @endforeach
               </div>
            </div>
            @endif
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label for="Name" class="form-label">Product Name</label>
                        <input id="Name" name="name" type="text" placeholder="Please Enter Product Name" class="form-control" value="{{old('name') ?? $product->name}}" >
                    </div>
                    <div class="mt-3">
                        <label for="Category" class="form-label">Category Name</label>
                        <select data-placeholder="Select Category" class="tom-select w-full" name="category">
                            @if($categories->count())
                                @foreach($categories as $category)
                                    @if(old('category') == $category->id || $product->category_id )
                                        <option value="{{$product->category_id }}" selected>{{$product->category->name }}</option>
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option disabled>No Results Found Add a Category first</option>
                            @endif
                        </select>
                    </div>
                    <div class="mt-3 grid grid-cols-12 gap-2 ">
                        <div class="col-span-6 sm:col-span-12">
                            <label for="inventory" class="form-label">Inventory Stock</label>
                            <div class="input-group">
                                <input  type="number" class="form-control" placeholder="Inventory Stock" name="stock" value="{{old('stock')  ?? $product->stock}}">
                                <div class="input-group-text">
                                    PCS
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-12">
                            <label for="inventory" class="form-label">Inventory Warning Level</label>
                            <div class="input-group">
                                <input  type="number" class="form-control" placeholder="Warning Stock" name="w_stock" value="{{old('w_stock') ?? $product->stock_warning}}">
                                <div class="input-group-text">
                                    PCS
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="weight" class="form-label">Weight</label>
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Please the Weight of the Product"  name="weight" value="{{old('weight') ?? $product->weight}}">
                            <div class="input-group-text">
                                grams
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div class="mt-3 xl:mt-0">
                        <label for="SKU" class="form-label">SKU</label>
                        <input type="text" class="form-control" placeholder="SKU" name="SKU" value="{{old('SKU')?? $product->SKU}}">
                    </div>
                    <div class="mt-3">
                        <label for="Brand" class="form-label">Brand Name</label>
                        <select data-placeholder="Select Brand" class="tom-select w-full" name="brand" >
                            @forelse($brands as $brand)
                                @if(old('brand') == $brand->id || $product->brand_id)
                                <option value="{{$product->brand_id}}" selected> {{$product->brand->name }}</option>
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @else
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endif
                            @empty
                                <option disabled>No Results Found Add a Brand first</option>
                            @endforelse
                        </select>

                    </div>
                    <div class="mt-3">
                        <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row"> Cost Price <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500" ><span id="margin"> </span>%</span> </label>
                        <div class="input-group">
                            <input  type="number" id="cprice" class="form-control" placeholder="Please Enter Original Price the Product" name="cprice" value="{{old('cprice')?? $product->cprice}}">
                            <div class="input-group-text">
                                PHP
                            </div>
                        </div>

                    </div>
                    <div class="mt-3">
                        <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row"> Selling Price <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">   <span id="profit">0 </span><span> PHP</span></span> </label>
                        <div class="input-group">
                            <input type="number" id="sprice" class="form-control" placeholder="Please Enter Price you want to sell"  name="sprice" value="{{old('sprice') ?? $product->sprice}}">
                            <div class="input-group-text">
                                PHP
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#cprice,#sprice').keyup(function(){
                        var x = $('#sprice').val();
                        var y = $('#cprice').val();
                        var total = x - y;
                        $('#profit').text(total);
                        var margin = (total/x) * 100;

                        $('#margin').text( parseFloat(margin).toFixed(2));
                    });
                </script>
                   <div class="col-span-12 xl:col-span-6 mt-3">
                    <div>
                        <div>
                            <label for="Category" class="form-label">Supplier Name</label>
                            <select data-placeholder="Select Category" class="tom-select w-full" name="supplier">
                                @forelse($suppliers as $supplier)
                                    @if(old('supplier') == $supplier->id || $product->suppliers_id)
                                    <option value="{{$product->suppliers_id}}" selected> {{$product->suppliers->name }}</option>
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                    @else
                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                    @endif
                                @empty
                                    <option disabled>No Results Found Add a Supplier first</option>
                                @endforelse
                            </select>
                        </div>
                    </div>

                </div>
                <div class="col-span-12">
                    <div class="mt-3">
                        <label>Active Status</label>
                        <div class="form-switch mt-2">
                            <input type="checkbox" class="form-check-input" name="status" id="status" value="1" {{old('status') == 1 ? 'checked' : ''}} >
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="description" class="form-label">Description</label>
                        <div class="mt-2">
                            <textarea id="editor" class="editor" name="description" >{{old('description' ) ?? $product->description}}</textarea>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-right mt-5">
                <a href="{{Route('product.index')}}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                <button type="submit" class="btn btn-primary w-24 mt-3">Save</button>
            </div>
        </div>
    </form>
    </div>


<script src="{{asset('dist/js/ckeditor-classic.js')}}"></script>
<!-- Images Layout -->
<div class="intro-y box p-5 mt-5" id="ImageList">
    <form action="{{url('admin/addimage/'.$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-3">
            <label class="form-label w-full flex flex-col sm:flex-row">Product Image</label>
            <input type="file" name="images[]" placeholder="Choose files" multiple accept="image/*" >
            <div class="text-danger mt-2">
                @error('images'){{$message}}@enderror
            </div>
             <button type="submit" class="btn btn-primary w-24 mt-3">Add Image </button>

        </div>
        <div class="intro-y grid grid-cols-12 gap-6 mt-5" id="datatable">
            @foreach ($images as $image)
                <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                    <div class="p-5">
                        <div class="flex items-center justify-center ">
                            <img class="object-contain h-48 " src="/product_images/{{$image->images}}"  data-action="zoom" alt="">
                        </div>
                        <a href="javascript:;"  class="block font-medium text-center mt-2" id="deleteImage" data-id="{{$image->id}}" data-name="{{$image->images}}">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>

<x-Modal.DeleteModal>
    <div class="p-5 text-center">
        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
        <div class="text-3xl mt-5">
            Are you sure? You want to delete this image
        </div>
        <div class="text-slate-500 text-2xl	 mt-2">
            This action cannot be undone
            <img src id="my_image" alt="" >
        </div>
    </div>
    <form action method="POST" id="DeleteImageForm">
        @method('DELETE')
        @csrf
        <div class="px-5 pb-8 text-center">
            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
            <button type="submit" class="btn btn-danger w-24">Delete</button>
        </div>
    </form>
</x-Modal.DeleteModal>


<script>
$(document).ready(function () {
    $("#datatable").on("click", "#deleteImage", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        $("#my_image").attr("src","/product_images/" + name);
        $("#DeleteImageForm").attr("action", "/admin/productimage/" + id);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#delete-confirmation-modal")
        );
        myModal.show();
    });
});
</script>
@if(session('SuccessImage'))
    <x-Notification.SuccessNotification title="Image Saved" message="{{session('SuccessImage')}}"/>
@endif

@if(session('DeleteSuccess'))
    <x-Notification.SuccessNotification title="Image Deleted" message="{{session('DeleteSuccess')}}"/>
@endif

<script src="{{asset('dist/js/ckeditor-classic.js')}}"></script>
@endsection
