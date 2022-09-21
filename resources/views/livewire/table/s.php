<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="{{Route('product.create')}}" class="btn btn-primary shadow-md mr-2">Add New Product</a>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="fa fa-plus" aria-hidden="true"></i></span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="{{Route('ProductArchiveIndex')}}" class="dropdown-item">
                            <i class="fa-solid fa-folder-minus w-4 h-4 mr-2"></i>Archive </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden md:block mx-auto text-slate-500"> Showing {{$products->firstItem()}} to {{$products->lastItem()}} of {{$products->total()}} entries</div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
            </div>
        </div>
    </div>
 
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">PRODUCT IMAGE</th>
                    <th class="text-center whitespace-nowrap">PRODUCT NAME</th>
                    <th class="text-center whitespace-nowrap">STOCK</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
          
                @forelse($products as $product)
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            @foreach($product->images->take(1) as $model)
                            <div class="w-10 h-10 image-fit zoom-in mr-1 ">    
                                <img alt="Product Image" src="/product_images/{{$model->images}}" data-action="zoom"  title="Uploaded {{$model->created_at->diffForHumans()}}">
                            </div>
                            @endforeach
                        </div>
                    </td>
                    <td>
                        <p  class="font-medium text-center whitespace-nowrap">{{$product->name}}</p> 
                        <div class=" text-center text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$product->category->name}}</div>
                    </td>
                    <td class="text-center">{{$product->stock}}</td>
                    <td class="w-40">
                        @if($product->status == 1)
                            <div class="flex items-center justify-center text-success"> <i class="fa-regular fa-square-check w-4 h-4 mr-1"></i> Active </div>
                        @elseif ($product->status == 0)
                            <div class="flex items-center justify-center text-danger"><i class="fa-regular fa-circle-xmark w-4 h-4 mr-1"></i>Inactive </div>
                        @endif
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="{{Route('product.edit',$product->id)}}"> <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit </a>
                            <button wire:click="selectItem({{$product->id}},'delete')" class="flex items-center text-danger"> 
                                <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>No Results Found</td>
                </tr>
            @endforelse
             
            </tbody>
        </table>
    </div>
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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