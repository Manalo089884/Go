<div>
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <div class="xl:flex sm:mr-auto" >
                <div class="sm:flex items-center sm:mr-4">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                    <select  wire:model="sorting" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                        <option value="nameaz" >Product Title A-Z</option>
                        <option value="nameza">Product Title Z-A</option>
                        <option value="createdold">Created (oldest first)</option>
                        <option value="creatednew">Created (newest first)</option>
                        <option value="updatedatold">Updated (oldest first)</option>
                        <option value="updatedat">Updated (newest first)</option>
                        <option value="lowinventory">Low inventory</option>
                        <option value="highinventory">High inventory</option>
                        <option value="cataz">Category A-Z</option>
                        <option value="catza">Category Z-A</option>
                    </select>
                </div>

                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                    <input wire:model="search" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                </div>
            </div>
        </div>
        <div class="overflow-x-auto scrollbar-hidden">
            @if($products->count())
            <div class="overflow-x-auto">
                <table class="table table-striped mt-5" id="datatable">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap ">Product Name</th>
                            <th class="whitespace-nowrap text-center">Category</th>
                            <th class="whitespace-nowrap text-center">Inventory</th>
                            <th class="whitespace-nowrap text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="whitespace-nowrap font-medium"><a href="{{Route('product.show',$product->id)}}">{{$product->name}}
                             <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$product->brand->name}}</div></a>
                             </td>
                            <td class="whitespace-nowrap text-center">{{$product->category->name}}</td>
                            <td class="whitespace-nowrap text-center">
                             @if($product->stock <= 10)
                             <div class="text-danger">{{$product->stock}} in stock</div>
                             @else
                                 {{$product->stock}} in stock
                             @endif
                         </td>

                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <button  wire:click="selectItem({{$product->id}},'edit')" class="flex items-center mr-3" >
                                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit
                                        </button>

                                        <button wire:click="selectItem({{$product->id}},'adjust')" class="flex items-center text-danger">
                                            <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Adjust
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h2 class="intro-y text-lg font-medium mt-10">
                No Results found <strong>{{$search}}</strong>
            </h2>
            @endif
        </div>


       <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-5">
           <nav class="w-full sm:w-auto sm:mr-auto">
               {!! $products->onEachSide(1)->links() !!}
           </nav>
           <div class="mx-auto text-slate-500">
                @if($products->count() == 0)
                    Showing 0 to 0 of 0 entries
                @else
                    Showing {{$products->firstItem()}} to {{$products->lastItem()}} of {{$products->total()}} entries
                @endif
            </div>
           <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
               <option>10</option>
               <option>25</option>
               <option>35</option>
               <option>50</option>
           </select>
       </div>
    </div>
</div>
