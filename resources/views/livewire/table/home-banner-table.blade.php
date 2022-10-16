<div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#add-item-modal">Add New Image</button>
            <div class="hidden md:block mx-auto text-slate-500">
                @if($banners->count() == 0)
                    Showing 0 to 0 of 0 entries
                @else
                    Showing {{$banners->firstItem()}} to {{$banners->lastItem()}} of {{$banners->total()}} entries
                @endif
            </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="search" wire:model.lazy="search" class="form-control w-56 box " placeholder="Search...">
                </div>
            </div>
        </div>
        <!-- BEGIN: Banner Layout -->
        @forelse($banners as $banner)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                <div class="box">
                    <div class="flex items-start px-5 pt-5">
                        <div class="w-full flex flex-col lg:flex-row items-center">
                            <div class="lg:ml-2 text-center lg:text-left mt-3 lg:mt-0">
                                <a href="" class="font-medium">{{ $banner->title }}</a>
                                <div class="text-slate-500 text-xs mt-0.5">{{ $banner->status }}</div>
                            </div>
                        </div>
                        <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical text-slate-500 w-5 h-5"></i>
                             </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-content">
                                    <button  class="dropdown-item w-full"> <i class="fa-solid fa-pen mr-1"></i></i> Edit </button>
                                    <button wire:click="selectItem({{$banner->id}},'delete')"  class="dropdown-item w-full"> <i class="fa-solid fa-trash mr-1"></i> Delete </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2"> </div>
                    <div class="flex justify-center text-center lg:text-left p-5">
                        @if(!empty($banner->featured_image))
                            <img src="{{ url('storage/banner/'.$banner->featured_image) }}" data-action="zoom" class="w-full h-96" alt="">
                        @else
                            <img alt="Missing Image" class="w-56 h-56" data-action="zoom" src="{{asset('dist/images/undraw_pic.svg')}}">
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="intro-y col-span-12 flex justify-center box p-10">
                <div class="flex justify-center flex-col">
                    <img alt="Missing Image" class="object-fill  rounded-md h-48 w-96" src="{{ asset('dist/images/NoResultFound.svg') }}">
                    <div class="flex justify-center mt-1">No Results found <strong class="ml-1"> {{ $search }}</strong>  </div>
                </div>
            </div>
        @endforelse
        <!-- END: banners Layout -->

        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                {!! $banners->onEachSide(1)->links() !!}
            </nav>
            <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
</div>
