 
 <div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start   ">
        <div class="xl:flex sm:mr-auto" >
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Search</label>
                <input wire:model.debounce.300ms="search" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                <select wire:model="orderBy" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="name">Name</option>
                    <option value="status">Status</Samp></option>
                    <option value="stock">Remaining Stock</option>
                    <option value="created_at">Created At</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                <select wire:model="orderAsc" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                    <option value="1" selected>Ascending</option>
                    <option value="0">Descending</option>
                </select>
            </div>
        </div> 
    </div>

    <div class=" scrollbar-hidden">
        <table class="table table-striped mt-5 mb-5"> 
            <thead> 
                <tr> 
                    <th class="whitespace-nowrap ">Product Name</th> 
                    <th class="whitespace-nowrap text-center">Inventory</th> 
                    <th class="whitespace-nowrap text-center">Status</th> 
                    <th class="whitespace-nowrap text-center">Actions</th>     
                </tr> 
            </thead> 
            <tbody> 
            @forelse($products as $product)
                <tr> 
                    <td class="whitespace-nowrap ">
                        <p class="font-medium whitespace-nowrap">{{$product->name}}</p> 
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$product->category->name}}</div>
                    </td> 
                    <td class="whitespace-nowrap text-center">{{$product->stock}}</td> 
                    <td class="whitespace-nowrap">
                        @if($product->status == 1)
                            <div class="flex items-center justify-center text-success"> <i class="fa-regular fa-square-check w-4 h-4 mr-1"></i></i> Active </div>
                        @elseif ($product->status == 0)
                            <div class="flex items-center justify-center text-danger"><i class="fa-regular fa-circle-xmark w-4 h-4 mr-1"></i>Inactive </div>
                        @endif
                    </td> 
                    <td class="whitespace-nowrap">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3"> 
                                <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i>Edit 
                            </a>
                            <a class="flex items-center text-danger"> 
                                <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i>  Delete
                         </a>
                        </div>
                    </td>
                </tr> 
               @empty
               <tr>
                <td class="whitespace-nowrap " colspan="4"><div class="flex justify-center items-center">No Results</div></td>
               </tr>
                @endforelse
        
            </tbody> 
        </table> 
  
   
    </div>
    
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {!! $products->links() !!}
        </nav>
        <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
            <option>2</option>
            <option>4</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
</div>
