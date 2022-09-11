<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <div class="intro-y box p-5">
        <form action="{{Route('product.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div>
                <div class="input-form"> 
                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Product Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span> 
                    </label> 
                    <input id="validation-form-1" type="text" name="name" class="form-control @error('name') border-danger @enderror" placeholder="Product Name" value="{{old('name')}}" > 
                    <div class="text-danger mt-2">@error('name'){{$message}}@enderror</div>
                </div>
            </div>
            <div class="mt-3">
                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                    Category <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span> 
                </label> 
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
                <div class="text-danger mt-2">@error('category'){{$message}}@enderror</div>
            </div>

             <div class="mt-3">
                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                    Brand <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span> 
                </label>
                <div style="@error('brand')border: 1px solid red @enderror" class="form-control ">
                    <select data-placeholder="Select Brand"  class="tom-select w-full" name="brand" >
                        @forelse($brand as $brand)
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
                     
                <div class="text-danger mt-2">@error('brand'){{$message}}@enderror</div>
            </div>
        
            <div class="mt-3">
                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                    Stock <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span> 
                </label>
                <div class="input-group ">
                    <input id="crud-form-3" type="number" class="form-control @error('stock') border-danger @enderror" placeholder="Quantity" aria-describedby="input-group-1" name="stock" value="{{old('stock')}}">
                    <div id="input-group-1" class="input-group-text ">pcs</div>
                    
                </div><div class="text-danger mt-2">@error('stock'){{$message}}@enderror</div>
            </div>
            
            <div class="mt-3">
                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                    Price <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span> 
                </label>
                <div class="input-group">
                    <input id="crud-form-4" type="number" class="form-control @error('price') border-danger @enderror" placeholder="Price" aria-describedby="input-group-2" name="price" value="{{old('price')}}">
                    <div id="input-group-2" class="input-group-text">
                        Unit
                    </div>
                </div>
                 <div class="text-danger mt-2">@error('price'){{$message}}@enderror</div>
            </div>

            <div class="mt-3">
                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                    Weight <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required</span> 
                </label>
                <div class="input-group">
                    <input id="crud-form-4" type="number" class="form-control @error('weight') border-danger @enderror" placeholder="Weight" aria-describedby="input-group-2" name="weight" value="{{old('weight')}}">
                    <div id="input-group-2" class="input-group-text">
                        grams
                    </div>
                </div>
                <div class="text-danger mt-2">@error('weight'){{$message}}@enderror</div>
             </div>

            <div class="mt-3">
                <label>Active Status</label>
                <div class="form-switch mt-2">
                    <input type="checkbox" class="form-check-input" name="status" id="status" value="1" {{old('status') == 1 ? 'checked' : ''}} >
                </div>
                <div class="text-danger mt-2">@error('status'){{$message}}@enderror</div>
            </div>
            
            <div class="mt-3">
                <label>Description</label>
                <div class="mt-2">
                    <textarea id="editor" class="editor" name="description" >{{old('description')}}</textarea>
                </div>
                <div class="text-danger mt-2">@error('description'){{$message}}@enderror</div>
            </div>

            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">Product Image</label>
                <input type="file" name="images[]" placeholder="Choose files" multiple accept="image/*" >
                <div class="text-danger mt-2">@error('images'){{$message}}@enderror</div>
            </div>
                   
            <div class="text-right mt-5">
                <a href="{{Route('product.index')}}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                <button type="submit" class="btn btn-primary w-24 mt-3">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
