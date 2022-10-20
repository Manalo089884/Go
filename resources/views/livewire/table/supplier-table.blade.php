<div>
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <div class="xl:flex sm:mr-auto" >
                <div class="sm:flex items-center sm:mr-4">
                    <label class="flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                    <select wire:model="sorting" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                        <option value="nameaz" >Supplier Name A-Z</option>
                        <option value="nameza">Supplier Name Z-A</option>
                        <option value="createdold">Created (oldest first)</option>
                        <option value="creatednew">Created (newest first)</option>
                        <option value="updatedatold">Updated (oldest first)</option>
                        <option value="updatedat">Updated (newest first)</option>
                    </select>
                </div>

                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                    <input type="search" wire:model.lazy="search" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                </div>
                <div class="mt-2 xl:mt-0">
                    <a href="{{Route('supplier.create')}}">
                        <button  type="button" class="btn btn-primary w-full sm:w-32" > </i> Add Supplier</button>
                    </a>
                    <a href="{{Route('SupplierArchiveIndex')}}">
                        <button  type="button" class="btn btn-secondary w-full sm:w-32 mt-2 sm:mt-0 sm:ml-1" >  <i class="fa-solid fa-file-zipper w-4 h-4 mr-2"></i>Archive</button>
                    </a>
                </div>
            </div>
            <div class="flex mt-5 sm:mt-0">
                <div class="dropdown w-1/2 sm:w-auto">
                    <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i class="fa-regular fa-newspaper w-4 h-4 mr-2"></i> Export <i class="fa-solid fa-chevron-down w-4 h-4 ml-auto sm:ml-2"></i> </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="{{Route('exportsupplierexcel')}}" class="dropdown-item">  <i class="fa-solid fa-file-excel mr-1"></i>  Export Excel </a>
                            </li>
                            <li>
                                <a  href="{{Route('exportsuppliercsv')}}" class="dropdown-item">  <i class="fa-solid fa-file-csv mr-1"></i>Export CSV </a>
                            </li>
                            <li>
                                <a href="{{Route('exportsupplierpdf')}}" class="dropdown-item"> <i class="fa-solid fa-file-pdf mr-1"></i> Export PDF </a>
                            </li>
                            <li>
                                <a  href="{{Route('exportsupplierhtml')}}" class="dropdown-item"> <i class="fa-brands fa-html5 mr-1"></i> Export HTML </a>
                            </li>
                        </ul>
                    </div>
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
                           <th class="whitespace-nowrap text-center">Email</th>
                           <th class="whitespace-nowrap text-center">Contact Number</th>
                           <th class="whitespace-nowrap text-center">Address</th>
                           <th class="whitespace-nowrap text-center">Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                   @foreach($suppliers as $supplier)
                       <tr class="intro-x">
                           <td class="whitespace-nowrap font-medium"><a href="">{{$supplier->name}}</td>
                            <td class="whitespace-nowrap text-center">{{$supplier->email}}</td>
                           <td class="whitespace-nowrap text-center">{{$supplier->contact}}</td>
                           <td class="whitespace-nowrap text-center">
                           {{ $supplier->address }}
                        </td>

                           <td class="table-report__action w-56">
                               <div class="flex justify-center items-center">
                                   <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href="{{ Route('supplier.show',$supplier) }}"> <i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show </a>
                                        <a class="flex items-center mr-3" href="{{ Route('supplier.edit',$supplier) }}" > <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit </a>
                                        <button wire:click="selectItem({{$supplier->id}},'archive')" class="flex items-center ">
                                            <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Archive
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
