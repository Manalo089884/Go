<div>
    <div>
        <div class="intro-y box p-5 mt-5">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <div class="xl:flex sm:mr-auto" >
                    <div class="sm:flex items-center sm:mr-4">
                        <label class="flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                        <select wire:model="sorting" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                            <option value="deletednew">Deleted (newest first)</option>
                            <option value="deletedold">Deleted (oldest first)</option>
                            <option value="nameaz" >Supplier Name A-Z</option>
                            <option value="nameza">Supplier Name Z-A</option>
                        </select>
                    </div>

                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                        <input type="search" wire:model.lazy="search" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                    </div>
                    <div class="mt-2 xl:mt-0">
                        <a href="{{Route('supplier.index')}}">
                            <button  type="button" class="btn btn-secondary w-full sm:w-32 mt-2 sm:mt-0 sm:ml-1" >  <i class="fa-solid fa-arrow-left w-4 h-4 mr-2"></i>Return</button>
                        </a>
                    </div>
                </div>

            </div>
           <div class="overflow-x-auto scrollbar-hidden">
               @if($suppliers->count())
               <div class="overflow-x-auto">
                   <table class="table table-striped mt-5" id="datatable">
                       <thead>
                           <tr>
                               <th class="whitespace-nowrap ">Supplier Name</th>
                               <th class="whitespace-nowrap text-center">Deleted At</th>
                               <th class="whitespace-nowrap text-center">Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                       @foreach($suppliers as $supplier)
                           <tr class="intro-x">
                                <td class="whitespace-nowrap font-medium"><a href="">{{$supplier->name}}</td>
                                <td class="whitespace-nowrap text-center">{{ $supplier->deleted_at->diffForHumans()}}</td>
                                <td class="table-report__action w-56">
                                   <div class="flex justify-center items-center">
                                       <div class="flex justify-center items-center">
                                            <button wire:click="selectItem({{$supplier->id}},'show')" class="flex items-center  w-full mr-2">
                                                <i class="fa-solid fa-eye w-4 h-4 mr-1"></i>Show
                                            </button>
                                            <button wire:click="selectItem({{$supplier->id}},'restore')" class="flex items-center text-success mr-2">
                                                <i class="fa-regular fa-window-restore w-4 h-4 mr-1"></i>Restore
                                            </button>
                                            <button wire:click="selectItem({{$supplier->id}},'delete')" class="flex items-center text-danger">
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
                    <div class="flex justify-center flex-col">
                        <img alt="Missing Image" class="object-fill  rounded-md h-48 w-96" src="{{ asset('dist/images/NoResultFound.svg') }}">
                        <div class="flex justify-center">No Results found <strong class="ml-1"> {{ $search }}</strong>  </div>
                    </div>
                </h2>
               @endif
           </div>

           <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-5">
               <nav class="w-full sm:w-auto sm:mr-auto">
                   {!! $suppliers->onEachSide(1)->links() !!}
               </nav>
               <div class="mx-auto text-slate-500">
                    @if($suppliers->count() == 0)
                        Showing 0 to 0 of 0 entries
                    @else
                        Showing {{$suppliers->firstItem()}} to {{$suppliers->lastItem()}} of {{$suppliers->total()}} entries
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

</div>
