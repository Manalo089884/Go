<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="btn btn-primary shadow-md mr-2"  data-tw-toggle="modal" data-tw-target="#add-item-modal">Add New Category </button>

        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center"><i class="fa-regular fa-plus w-4 h-4"></i></span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
<<<<<<< HEAD
<<<<<<< HEAD
                        <a href="{{Route('exportcategoriesexcel')}}" class="dropdown-item"><i class="fa-solid fa-file-excel mr-1"></i>Export to Excel  </a>
                    </li>
                    <li>
                        <a href="{{Route('exportcategoriescsv')}}" class="dropdown-item"> <i class="fa-solid fa-file-csv mr-1"></i>  Export to CSV </a>
                    </li>
                    <li>
                        <a href="{{Route('exportcategoriespdf')}}" class="dropdown-item">  <i class="fa-solid fa-file-pdf mr-1"></i> Export to PDF </a>
                    </li>
                    <li>
                        <a href="{{Route('exportcategorieshtml')}}" class="dropdown-item">  <i class="fa-brands fa-html5 mr-1"></i> Export to HTML </a>
=======
                        <a href="{{Route('exportcategoriesexcel')}}" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Export to Excel  </a>
=======
                        <a href="{{Route('exportcategoriesexcel')}}" class="dropdown-item"><i class="fa-solid fa-file-excel mr-1"></i>Export to Excel  </a>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                    </li>
                    <li>
                        <a href="{{Route('exportcategoriescsv')}}" class="dropdown-item"> <i class="fa-solid fa-file-csv mr-1"></i>  Export to CSV </a>
                    </li>
                    <li>
                        <a href="{{Route('exportcategoriespdf')}}" class="dropdown-item">  <i class="fa-solid fa-file-pdf mr-1"></i> Export to PDF </a>
                    </li>
                    <li>
<<<<<<< HEAD
                        <a href="{{Route('exportcategorieshtml')}}" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to HTML </a>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <a href="{{Route('exportcategorieshtml')}}" class="dropdown-item">  <i class="fa-brands fa-html5 mr-1"></i> Export to HTML </a>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden md:block mx-auto text-slate-500">
            @if($category->count() == 0)
                Showing 0 to 0 of 0 entries
            @else
                Showing {{$category->firstItem()}} to {{$category->lastItem()}} of {{$category->total()}} entries
            @endif
        </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">
                <input wire:model.debounce.300ms="search" type="text" class="form-control w-56 box pr-10" name="search" id="search" placeholder="Search..." value="{{request()->query('search')}}">
            </div>
        </div>
    </div>

    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report mt-2" >
            <thead>
                <tr>
                    <th class="whitespace-nowrap">CATEGORY NAME</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            @forelse($category as $categories)
            <tr class="intro-x">
                <td>
                    <p class="font-medium whitespace-nowrap" >{{$categories->name}}</p>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <button  wire:click="selectItem({{$categories->id}},'update')" class="flex items-center mr-3" >
                            <i  class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit
                        </button>

                        <button wire:click="selectItem({{$categories->id}},'delete')"  class="flex items-center text-danger" >
                            <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i>  Delete
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
            {!! $category->onEachSide(1)->links() !!}
        </nav>
        <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
</div>
