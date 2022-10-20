<div>

    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Display Product Information -->
        <div class="intro-y box mt-2 lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Create Product
                </h2>
            </div>
            <div class="p-5">
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div>
                            <label for="Name" class="form-label">Product Name</label>
                            <input id="Name" wire:model.lazy="name" type="text" class="form-control" value="" >
                        </div>
                        <div class="mt-3">
                            <label for="Category" class="form-label">Category Name</label>
                            <select data-placeholder="Select Category" wire:model.lazy="category" class="tom-select w-full" name="category">
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
                        <div class="mt-3">
                            <label for="Brand" class="form-label">Brand Name</label>
                            <div class="input-group">
                                <input id="crud-form-4" type="number" class="form-control" placeholder="Weight" aria-describedby="input-group-2" name="weight" value="{{old('weight')}}">
                                <div id="input-group-2" class="input-group-text">
                                    PHP
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="Status" class="form-label">Weight</label>
                            <div class="input-group">
                                <input id="crud-form-4" type="number" wire:model.lazy="weight" class="form-control" placeholder="Weight" aria-describedby="input-group-2" name="weight" value="{{old('weight')}}">
                                <div id="input-group-2" class="input-group-text">
                                    grams
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-6">
                        <div>
                            <label for="Name" class="form-label">SKU</label>
                            <input id="Name" wire:model.lazy="name" type="text" class="form-control" value="" >
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
                            <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row"> Cost Price <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span> </label>
                            <div class="input-group">
                                <input id="crud-form-4" type="number" class="form-control" placeholder="Weight" aria-describedby="input-group-2" name="weight" value="{{old('weight')}}">
                                <div id="input-group-2" class="input-group-text">
                                    PHP
                                </div>
                            </div>

                        </div>
                        <div class="mt-3">
                            <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row"> Selling Price <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span> </label>
                            <div class="input-group">
                                <input id="crud-form-4" type="number" class="form-control" placeholder="Weight" aria-describedby="input-group-2" name="weight" value="{{old('weight')}}">
                                <div id="input-group-2" class="input-group-text">
                                    PHP
                                </div>
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
        </div>


        <!-- END: Display Product Information -->
        <!-- BEGIN: Product Image Information -->

        <!-- END: Product Image  -->
    </div>

















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
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <div class="intro-y box p-5">
            <form action="{{Route('product.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <!-- Product Name -->
                <div>
                    <div class="input-form">
                        <label  class="form-label w-full flex flex-col sm:flex-row">
                            Product Name
                        </label>
                        <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="Product Name" value="{{old('name')}}" >
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2 mt-2">
                    <!-- Category -->
                    <div class="item w-1/2 h-28 mr-5 sm:mr-0 w-full form">
                        <label  class="form-label w-full flex flex-col sm:flex-row">
                            Category
                        </label>
                        <div style="@error('brand')border: 1px solid red @enderror" class="form-control ">
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
                    </div>
                    <!-- Brand -->
                    <div class="item w-1/2 h-28 mr-2 sm:mr-1 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Brand
                        </label>
                        <div style="@error('brand')border: 1px solid red @enderror" class="form-control ">
                            <select data-placeholder="Select Brand"  class="tom-select w-full" name="brand" >
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
                    </div>
                </div>


                <div class="flex flex-col sm:flex-row items-center gap-2 mt-2">
                    <!-- Cost Price -->
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Cost Price
                        </label>
                        <div class="input-group">
                            <input id="cprice" type="number" class="form-control " placeholder="Purchase Price"  name="cprice" value="{{old('cprice')}}">
                            <div id="input-group-2" class="input-group-text">
                                PHP
                            </div>
                        </div>

                    </div>
                    <!-- Selling Price -->
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Selling Price
                        </label>
                        <div class="input-group">
                            <input id="sprice" type="number" class="form-control" placeholder="Selling Price"  name="sprice" value="{{old('sprice')}}">
                            <div id="input-group-2" class="input-group-text">
                                Unit
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form mt-1">
                        <div>Margin: <span id="margin"> </span>%</div>
                    </div>
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form mt-1">
                        <div>Mark-up:
                        <span id="profit">0 </span><span> PHP</span></div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2 ">
                    <!-- Inventory -->
                    <div class="item w-1/2 h-28 mr-5 sm:mr-0 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Inventory Stocks
                        </label>
                        <div class="input-group ">
                            <input id="crud-form-3" type="number" class="form-control" placeholder="Quantity" name="stock" value="{{old('stock')}}">
                            <div id="input-group-1" class="input-group-text ">pcs</div>
                        </div>
                    </div>
                    <!-- SKU -->
                    <div class="item w-1/2 h-28 mr-5 sm:mr-0 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            SKU
                        </label>
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="SKU" name="SKU" value="{{old('SKU')}}">
                            <div id="input-group-1" class="input-group-text ">pcs</div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Weight
                    </label>
                    <div class="input-group">
                        <input id="crud-form-4" type="number" class="form-control" placeholder="Weight" aria-describedby="input-group-2" name="weight" value="{{old('weight')}}">
                        <div id="input-group-2" class="input-group-text">
                            grams
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="form-switch mt-2">
                        <input type="checkbox" class="form-check-input" name="status" id="status" value="1" {{old('status') == 1 ? 'checked' : ''}} >
                    </div>
                </div>

                <div class="mt-3">
                    <label>Description</label>
                    <div class="mt-2">
                        <textarea id="editor" class="editor" name="description" >{{old('description')}}</textarea>
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">Product Image</label>
                    <input type="file" name="images[]" placeholder="Choose files" value="{{old('images')}}" multiple accept="image/*" >
                </div>

                <div class="text-right mt-5">
                    <a href="{{Route('product.index')}}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                    <button type="submit" class="btn btn-primary w-24 mt-3">Save</button>
                </div>
            </form>
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
        $('#margin').text(margin);
    });
</script>
</div>
