@extends('admin.layout.admin')
@section('content')
@section('title', 'Product')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Product</h2>
</div>

<div class="intro-y box p-5 mt-5">
    <ul class="nav nav-boxed-tabs" role="tablist">
        <li id="example-3-tab" class="nav-item flex-1" role="presentation">
            <button class="nav-link w-full py-2 active" data-tw-toggle="pill" data-tw-target="#example-tab-3" type="button" role="tab" aria-controls="example-tab-3" aria-selected="true" >
                Product Information
            </button>
        </li>
        <li id="example-4-tab" class="nav-item flex-1" role="presentation">
            <button class="nav-link w-full py-2" data-tw-toggle="pill" data-tw-target="#example-tab-4" type="button" role="tab" aria-controls="example-tab-4" aria-selected="false" >
                Product Images
            </button>
        </li>
    </ul>
    <div class="tab-content mt-5">
        <div id="example-tab-3" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-3-tab">
            <form action="{{URL('product/'.$product->id.'update')}}" method="POST">
                @method('put')
                @csrf

                <div class="mt-3">
                    <div class="input-form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Product Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span>
                        </label>
                        <input id="validation-form-1" type="text" name="name" class="form-control @error('name') border-danger @enderror" placeholder="Product Name" value="{{old('name') ?? $product->name}}" >
                        <div class="text-danger mt-2">@error('name'){{$message}}@enderror</div>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Category <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span>
                    </label>
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
                    <div class="text-danger mt-2">@error('category'){{$message}}@enderror</div>
                </div>

                <div class="mt-3">
                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Brand <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span>
                    </label>
                    <select data-placeholder="Select Brand" class="tom-select w-full" name="brand" >
                    @if($brand->count())
                        @foreach($brand as $brand)
                            @if(old('brand') == $brand->id || $product->brand_id)
                                 <option value="{{$product->brand_id}}" selected> {{$product->brand->name }}</option>
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @else
                                <option value="{{$brand->id}}"">{{$brand->name}}</option>
                            @endif
                        @endforeach
                    @else
                        <option disabled>No Results Found Add a Brand first</option>
                    @endif
                    </select>
                </div>

                <div class="mt-3">
                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Stock <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span>
                    </label>
                    <div class="input-group ">
                        <input id="crud-form-3" type="number" class="form-control @error('stock') border-danger @enderror" placeholder="Quantity" aria-describedby="input-group-1" name="stock" value="{{old('stock') ?? $product->stock}}">
                        <div id="input-group-1" class="input-group-text ">pcs</div>
                    </div>
                    <div class="text-danger mt-2">@error('stock'){{$message}}@enderror</div>
                </div>

                <div class="mt-3">
                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Price <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span>
                    </label>
                    <div class="input-group">
                        <input id="crud-form-4" type="number" class="form-control @error('price') border-danger @enderror" placeholder="Price" aria-describedby="input-group-2" name="price" value="{{old('price') ?? $product->price}}">
                        <div id="input-group-2" class="input-group-text">Unit</div>
                    </div>
                    <div class="text-danger mt-2">@error('price'){{$message}}@enderror</div>
                </div>
                <div class="mt-3">
                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Weight <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span>
                    </label>
                    <div class="input-group">
                        <input id="crud-form-4" type="number" class="form-control @error('weight') border-danger @enderror" placeholder="Weight" aria-describedby="input-group-2" name="weight" value="{{old('weight')  ?? $product->weight}}">
                        <div id="input-group-2" class="input-group-text">grams</div>
                    </div>
                    <div class="text-danger mt-2">@error('weight'){{$message}}@enderror</div>
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                        <div class="form-switch mt-2">
                            <input type="checkbox" class="form-check-input" name="status" id="status" value="1" {{old('status') || $product->status == 1 ? 'checked' : ''}} >
                        </div>
                        <div class="text-danger mt-2">@error('status'){{$message}}@enderror</div>
                </div>
                <div class="mt-3">
                    <label>Description</label>
                    <div class="mt-2">
                        <textarea id="editor" class="editor" name="description" >{{old('description') ?? $product->description}}</textarea>
                    </div>
                    <div class="text-danger mt-2">@error('description'){{$message}}@enderror</div>
                </div>
                    <div class="text-right mt-5">
                         <a href="{{Route('product.index')}}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                       <button type="submit" class="btn btn-primary w-24 mt-3">Edit</button>
                    </div>
            </form>
        </div>
        <div id="example-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-4-tab">
            <form action="">
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">Product Image</label>
                    <input type="file" name="images[]" placeholder="Choose files" multiple accept="image/*" >
                    <div class="text-danger mt-2">
                        @error('images'){{$message}}@enderror
                    </div>
                </div>
                      <div class="intro-y grid grid-cols-12 gap-6 mt-5">
                       @foreach ($images as $image)


                        @endforeach
                       </div>
            </form>
        </div>
     </div>
</div>

<script src="{{asset('dist/js/ckeditor-classic.js')}}"></script>
@endsection
