<div>  
 <div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="name">Name</option>
                    <option value="category">Category</option>
                    <option value="remaining_stock">Remaining Stock</option>
                </select>
            </div>
             <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                    <option value="like" selected>like</option>
                    <option value="=">=</option>
                    <option value="<">&lt;</option>
                    <option value="<=">&lt;=</option>
                    <option value=">">></option>
                    <option value=">=">>=</option>
                    <option value="!=">!=</option>
                </select>
            </div>

            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0"  placeholder="Search...">
            </div>

            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Go</button>
                <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
            </div>
        </form>
     
    </div>
    <div class="overflow-x-auto scrollbar-hidden">
        @if($products->count())
        <div class="overflow-x-auto"> 
            <table class="table table-striped mt-5" id="datatable"> 
                <thead> 
                    <tr> 
                        <th class="whitespace-nowrap ">Product Name</th> 
                        <th class="whitespace-nowrap text-center">Inventory</th> 
                        <th class="whitespace-nowrap text-center">Status</th> 
                        <th class="whitespace-nowrap text-center">Actions</th>     
                    </tr> 
                </thead> 
                <tbody> 
                @foreach($products as $product)
                    <tr> 
                        <td class="whitespace-nowrap ">
                            <a href="" class="font-medium whitespace-nowrap">{{$product->name}}</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$product->category->name}}</div>
                        </td> 
                        <td class="whitespace-nowrap text-center">{{$product->stock}}</td> 
                        <td class="whitespace-nowrap">
                            @if($product->status == 1)
                                <div class="flex items-center justify-center text-success"> <i class="fa-regular fa-square-check w-4 h-4 mr-1"></i> Active </div>
                            @elseif ($product->status == 0)
                                <div class="flex items-center justify-center text-danger"> <i class="fa-regular fa-circle-xmark w-4 h-4 mr-1"></i> Inactive </div>
                            @endif
                        </td> 
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <div class="flex justify-center items-center">
                                    <button wire:click="selectItem({{$product->id}},'restore')" class="flex items-center text-success"> 
                                        <i class="fa-regular fa-window-restore w-4 h-4 mr-1"></i>Restore
                                    </button>
                                    <button wire:click="selectItem({{$product->id}},'delete')" class="flex items-center text-danger"> 
                                        <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete
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
            No Results found <strong>{{{request()->query('search')}}}</strong>
        </h2>
        @endif
    </div>

    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-5">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {!! $products->onEachSide(1)->links() !!}  
        </nav>
        <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    </div>
    



</div>
