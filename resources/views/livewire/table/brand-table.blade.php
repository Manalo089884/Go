
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- Brand Tables -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="btn btn-primary shadow-md mr-2" href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal">
            Add New Brand    
        </button>
    
        <div class="hidden md:block mx-auto text-slate-500">
            Showing {{$brands->firstItem()}} to {{$brands->lastItem()}} of {{$brands->total()}} entries
        </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">
                    <input wire:model.debounce.300ms="search" type="text" class="form-control w-56 box pr-10"  placeholder="Search...">
            </div>
        </div>
    </div>

    <!-- Brand Table -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">  
        <table class="table table-report mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">BRAND NAME</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            @forelse($brands as $brand)
            <tr class="intro-x">
                <td>
                    <p class="font-medium whitespace-nowrap" >{{$brand->name}}</p> 
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <button  wire:click="selectItem({{$brand->id}},'update')" class="flex items-center mr-3" > 
                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit
                         </button>
                      
                        <button wire:click="selectItem({{$brand->id}},'delete')" class="flex items-center text-danger"> 
                            <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete
                        </button>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2">No Result Found</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {!! $brands->onEachSide(1)->links() !!}   
        </nav>
        <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
</div>


