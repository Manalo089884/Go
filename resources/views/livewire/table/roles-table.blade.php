
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- Roles Tables -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#add-item-modal">
<<<<<<< HEAD
<<<<<<< HEAD
            Add New Roles
        </button>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center"><i class="fa-regular fa-plus w-4 h-4"></i></span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="{{Route('exportroleexcel')}}" class="dropdown-item"> <i class="fa-solid fa-file-excel mr-1"></i> Export to Excel  </a>
                    </li>
                    <li>
                        <a href="{{Route('exportrolecsv')}}" class="dropdown-item"> <i class="fa-solid fa-file-csv mr-1"></i> Export to CSV </a>
                    </li>
                    <li>
                        <a href="{{Route('exportrolepdf')}}" class="dropdown-item"> <i class="fa-solid fa-file-pdf mr-1"></i>Export to PDF </a>
                    </li>
                    <li>
                        <a href="{{Route('exportrolehtml')}}" class="dropdown-item"> <i class="fa-brands fa-html5 mr-1"></i> Export to HTML </a>
                    </li>
                </ul>
            </div>
        </div>


=======
            Add New Roles    
        </button>
      
    
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            Add New Roles
        </button>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center"><i class="fa-regular fa-plus w-4 h-4"></i></span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="{{Route('exportroleexcel')}}" class="dropdown-item"> <i class="fa-solid fa-file-excel mr-1"></i> Export to Excel  </a>
                    </li>
                    <li>
                        <a href="{{Route('exportrolecsv')}}" class="dropdown-item"> <i class="fa-solid fa-file-csv mr-1"></i> Export to CSV </a>
                    </li>
                    <li>
                        <a href="{{Route('exportrolepdf')}}" class="dropdown-item"> <i class="fa-solid fa-file-pdf mr-1"></i>Export to PDF </a>
                    </li>
                    <li>
                        <a href="{{Route('exportrolehtml')}}" class="dropdown-item"> <i class="fa-brands fa-html5 mr-1"></i> Export to HTML </a>
                    </li>
                </ul>
            </div>
        </div>


>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        <div class="hidden md:block mx-auto text-slate-500">
            Showing {{$roles->firstItem()}} to {{$roles->lastItem()}} of {{$roles->total()}} entries
        </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">
                    <input wire:model.debounce.300ms="search" type="text" class="form-control w-56 box pr-10"  placeholder="Search...">
            </div>
        </div>
    </div>

    <!-- Roles Table -->
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
=======
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">  
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        <table class="table table-report mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">ROLE NAME</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            @forelse($roles as $role)
            <tr class="intro-x">
                <td>
<<<<<<< HEAD
<<<<<<< HEAD
                    <p class="font-medium whitespace-nowrap" >{{$role->name}}</p>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <button  wire:click="selectItem({{$role->id}},'manage')" class="flex items-center mr-3" >
                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i>  Permission
                         </button>
                        <button  wire:click="selectItem({{$role->id}},'update')" class="flex items-center mr-3" >
                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit
                         </button>

                        <button wire:click="selectItem({{$role->id}},'delete')" class="flex items-center text-danger">
=======
                    <p class="font-medium whitespace-nowrap" >{{$role->name}}</p> 
=======
                    <p class="font-medium whitespace-nowrap" >{{$role->name}}</p>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <button  wire:click="selectItem({{$role->id}},'manage')" class="flex items-center mr-3" >
                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i>  Permission
                         </button>
                        <button  wire:click="selectItem({{$role->id}},'update')" class="flex items-center mr-3" >
                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit
                         </button>
<<<<<<< HEAD
                      
                        <button wire:click="selectItem({{$role->id}},'delete')" class="flex items-center text-danger"> 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======

                        <button wire:click="selectItem({{$role->id}},'delete')" class="flex items-center text-danger">
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
<<<<<<< HEAD
            {!! $roles->onEachSide(1)->links() !!}
=======
            {!! $roles->onEachSide(1)->links() !!}   
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            {!! $roles->onEachSide(1)->links() !!}
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        </nav>
        <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
</div>


