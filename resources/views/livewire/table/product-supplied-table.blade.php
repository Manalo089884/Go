<div>
    <div class="intro-y box  mt-5">
        <div class="flex items-center p-5 border-b mb-2 border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Product Supplied List
            </h2>
        </div>
        <div class="p-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <div class="xl:flex sm:mr-auto" >
                        <div class="sm:flex items-center sm:mr-4">
                            <label class="flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                            <select wire:model="sorting" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                <option value="nameaz" >Product Name A-Z</option>
                                <option value="nameza">Product Name Z-A</option>
                                <option value="lowinventory">Low inventory</option>
                                <option value="highinventory">High inventory</option>

                            </select>
                        </div>

                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                            <input type="search" wire:model.lazy="search" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
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
                                <th class="whitespace-nowrap text-center">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr class="intro-x">
                                    <td class="whitespace-nowrap"><a href="{{ Route('product.show',$product) }}">{{ $product->name }}</a></td>
                                    <td class="whitespace-nowrap text-center">{{ $product->category->name}}</td>
                                    <td class="whitespace-nowrap text-center">
                                     @if($product->stock_warning <= $product->stock)
                                        <p class="text-danger"> {{ $product->stock }}</td></p>
                                    @elseif($product->stock_warning >= $product->stock)
                                        {{ $product->stock }}</td>
                                    @endif
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
</div>
