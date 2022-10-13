@extends('admin.layout.admin')
@section('content')
@section('title', 'Add Product')

<div class="col-span-12 lg:col-span-8 2xl:col-span-9">
    <!-- BEGIN: Display Product Information -->
    <div class="intro-y box mt-2 lg:mt-5">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Add Product Form
            </h2>
        </div>
        <form action="{{Route('product.store')}}" method="POST" enctype="multipart/form-data">
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
                        <input id="Name" name="name" type="text" placeholder="Please Enter Product Name" class="form-control" value="{{old('name')}}" >
                    </div>
                    <div class="mt-3">
                        <label for="Category" class="form-label">Category Name</label>
                        <select data-placeholder="Select Category" class="tom-select w-full" name="category">
                            @forelse($categories as $category)
                                @if(old('category') == $category->id )
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @empty
                                <option disabled>No Results Found Add a Category first</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="mt-3 grid grid-cols-12 gap-2  ">
                        <div class="col-span-6 sm:col-span-12">
                            <label for="inventory" class="form-label">Inventory Stock</label>
                            <div class="input-group">
                                <input  type="number" class="form-control" placeholder="Inventory Stock" name="stock" value="{{old('stock')}}">
                                <div class="input-group-text">
                                    PCS
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-12">
                            <label for="inventory" class="form-label">Inventory Warning Level</label>
                            <div class="input-group">
                                <input  type="number" class="form-control" placeholder="Warning Stock" name="w_stock" value="{{old('w_stock')}}">
                                <div class="input-group-text">
                                    PCS
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-3">
                        <label for="weight" class="form-label">Weight</label>
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Please the Weight of the Product"  name="weight" value="{{old('weight')}}">
                            <div class="input-group-text">
                                grams
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div class="mt-3 xl:mt-0">
                        <label for="SKU" class="form-label">SKU</label>
                        <input type="text" class="form-control" placeholder="SKU" name="SKU" value="{{old('SKU')}}">
                    </div>
                    <div class="mt-3">
                        <label for="Brand" class="form-label">Brand Name</label>
                        <select data-placeholder="Select Brand" class="tom-select w-full" name="brand" >
                            @forelse($brands as $brand)
                                @if(old('brand') == $brand->id )
                                    <option value="{{$brand->id}}" selected>{{$brand->name}}</option>
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
                            <input  type="number" id="cprice" class="form-control" placeholder="Please Enter Original Price the Product" name="cprice" value="{{old('cprice')}}">
                            <div class="input-group-text">
                                PHP
                            </div>
                        </div>

                    </div>
                    <div class="mt-3">
                        <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row"> Selling Price <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">   <span id="profit">0 </span><span> PHP</span></span> </label>
                        <div class="input-group">
                            <input type="number" id="sprice" class="form-control" placeholder="Please Enter Price you want to sell"  name="sprice" value="{{old('sprice')}}">
                            <div class="input-group-text">
                                PHP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6 mt-3">
                    <div>
                        <div>
                            <label for="Category" class="form-label">Supplier Name</label>
                            <select data-placeholder="Select Category" class="tom-select w-full" name="supplier">
                                @forelse($suppliers as $supplier)
                                    @if(old('category') == $supplier->id )
                                        <option value="{{$supplier->id}}" selected>{{$supplier->name}}</option>
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
                        <label class="form-label w-full flex flex-col sm:flex-row">Product Image</label>
                        <input type="file" name="images[]" placeholder="Choose files" value="{{old('images')}}" multiple accept="image/*" >
                    </div>

                    <div class="mt-3">
                        <label for="description" class="form-label">Description</label>
                        <div class="mt-2">
                            <textarea id="editor" class="editor" name="description" >{{old('description')}}</textarea>
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
@endsection

@push('scripts')
<script src="{{asset('dist/js/ckeditor-classic.js')}}"></script>


@endpush
