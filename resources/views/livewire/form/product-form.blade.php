<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <div class="intro-y box p-5">
            <form wire:submit.prevent="StoreProductData" >
                @csrf
                <div>
                    <div class="input-form">
                        <label  class="form-label w-full flex flex-col sm:flex-row">
                            Product Name
                        </label>
                        <input type="text" name="name" wire:model.lazy="name" class="form-control @error('name') border-danger @enderror" placeholder="Product Name" value="{{old('name')}}" >
                        <div class="text-danger mt-2">@error('name'){{$message}}@enderror</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form">
                        <label  class="form-label w-full flex flex-col sm:flex-row">
                            Category
                        </label>
                        <div style="@error('brand')border: 1px solid red @enderror" class="form-control ">
                            <select name="category" wire:model="category" >
                                <option value="" >Select Category</option>


                                @foreach($categories as $category)
                                        <option value="{{$category->id}}" >{{$category->name}}</option>


                                @endforeach
                            </select>
                        </div>
                        <div class="text-danger mt-2">@error('category'){{$message}}@enderror</div>
                    </div>

                    <div class="item w-1/2 h-28 mr-2 sm:mr-1 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Brand
                        </label>
                        <div style="@error('brand')border: 1px solid red @enderror" class="form-control ">
                            <select data-placeholder="Select Brand"  class="tom-select w-full" name="brand" wire:model.lazy="brand" >
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
                        <div class="text-danger mt-2">@error('brand'){{$message}}@enderror</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Cost Price
                        </label>
                        <div class="input-group">
                            <input id="cprice" type="number" class="form-control @error('cprice') border-danger @enderror" name="cprice" wire:model.lazy="cprice" value="{{old('cprice')}}">
                            <div id="input-group-2" class="input-group-text">
                                Unit
                            </div>
                        </div>
                         <div class="text-danger mt-2">@error('cprice'){{$message}}@enderror</div>
                    </div>

                <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form">
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            Selling Price
                        </label>
                        <div class="input-group">
                            <input id="sprice" type="number" class="form-control @error('sprice') border-danger @enderror" name="sprice" wire:model.lazy="sprice" value="{{old('sprice')}}">
                            <div id="input-group-2" class="input-group-text">
                                Unit
                            </div>
                        </div>
                         <div class="text-danger mt-2">@error('sprice'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form">
                        <div>Margin: <span id="margin"> </span>%</div>
                    </div>
                    <div class="item w-1/2 h-28 mr-2 sm:mr-0 w-full form">
                        <div>Mark-up:
                        <span id="profit">0 </span><span> PHP</span></div>
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
            <!--Inventory -->
            <div class="mt-3">
                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                    Inventory Stocks
                </label>
                <div class="input-group ">
                    <input id="crud-form-3" type="number" class="form-control @error('stock') border-danger @enderror" name="stock" wire:model.lazy="stock" value="{{old('stock')}}">
                    <div id="input-group-1" class="input-group-text ">pcs</div>

                </div><div class="text-danger mt-2">@error('stock'){{$message}}@enderror</div>
            </div>
            <div class="mt-3">
                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                    Weight
                </label>
                <div class="input-group">
                    <input id="crud-form-4" type="number" class="form-control @error('weight') border-danger @enderror" name="weight" wire:model.lazy="weight" value="{{old('weight')}}">
                    <div id="input-group-2" class="input-group-text">
                        grams
                    </div>
                </div>
                <div class="text-danger mt-2">@error('weight'){{$message}}@enderror</div>
             </div>

            <div class="mt-3">
                <label>Active Status</label>
                <div class="form-switch mt-2">
                    <input type="checkbox" class="form-check-input" name="status" wire:model.lazy="status" id="status" value="1" {{old('status') == 1 ? 'checked' : ''}} >
                </div>
                <div class="text-danger mt-2">@error('status'){{$message}}@enderror</div>
            </div>

            <div class="mt-3">
                <label>Description</label>
                <div class="mt-2">
                    <textarea id="editor" class="editor" name="description" wire:model.lazy="description" >{{old('description')}}</textarea>
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

<script src="{{asset('dist/js/ckeditor-classic.js')}}"></script>
