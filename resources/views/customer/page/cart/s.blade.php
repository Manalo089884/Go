@extends('customer.layout.base')
@section('content')
@section('title', 'Product')

{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<style>
    .content.content--top-nav {
     border-radius: 0px 0px 0px 0px !important;
     margin-top: 2rem;
     margin-left: 0px;
     }
 .content.content--top-nav:after {
     width: 0%;
     border-radius: 0px 0px 0px 0px;
     left: 0px;
     right: 0px;
 }
 </style>

<!-- Container -->
<div class="flex justify-center intro-y">
    <div class="flex flex-col w-auto md:flex-row primary">
        <!-- Desktop Filter Box -->
        <div class="invisible h-0 bg-slate-50 md:h-auto md:visible sm:mr-5 md:w-1/2 lg:w-1/3">
            <!-- Sticky Container --Filter will follow-- -->
            <div class="sticky top-0 z-50 h-auto">

                <div class="flex flex-col ml-2 items-left mt-5">
                    <p class="text-xl">Category</p>
                    <div class="w-11/12 mt-2">
                        <select data-placeholder="Select Category" class="tom-select w-full" name="category">
                            @forelse($categories as $category)
                                @if(old('category') == $category->id )
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @empty
                                <option disabled>No Results Found Add a Category first</option>
                            @endforelse
                        </select>
                    </div>
                </div>

                <div class="flex py-2 mx-5 mb-3 border-b border-slate-200"></div>

                <div class="hidden search sm:block ml-2 w-11/12">
                   <input type="search" class="form-control" name="" id="">

                    <button class="btn btn-primary w-full mt-2 mr-1 mb-2">Search</button>
                </div>

                <div class="flex py-2 mx-5 mb-3 border-b border-slate-200"></div>

                <div class="flex flex-col mb-1 ml-2 items-left w-11/12">
                    <p class="text-xl">Price Range</p>
                    <div>
                        <div class="flex justify-between gap-2 ">
                            <input id="opt4" type="text" value="" name="r-option-4" class="form-control" placeholder="Min" class="w-1/3 h-5 mr-5 bg-white border-gray-400 rounded ">
                            <input id="opt4" type="text" value="" name="r-option-4" class="form-control" placeholder="Max" class="w-1/3 h-5 bg-white border-gray-400 rounded ">
                        </div>
                        <div>
                            <button class="btn btn-primary w-full mt-2 mr-1 mb-2">Apply</button>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-6 mt-5 intro-y">

            <!-- BEGIN: Product Layout -->
            @forelse ($products as $product)

                <!-- Product Container -->
                <div class="col-span-6 cursor-pointer sm:col-span-4 lg:col-span-3 xl:col-span-2 box intro-y">
                    <!-- Arranges Content and is a divider/line -->
                    <a href="{{ Route('productshow', $product) }}">
                        <div class="flex items-center px-5 py-4 border-b border-slate-200/60 dark:border-darkmode-400"></div>
                        <!-- Image Container -->
                        <div class="p-5">
                            <div class="h-48 2xl:h-56">
                                @if(count($product->images) == 0)
                                    <img alt="Missing Image"  class="object-fill h-48 rounded-md w-96" src="{{ asset('dist/images/logo.png') }}">
                                @else
                                    @foreach ($product->images->take(1)  as $model)
                                        <img alt="Missing Image"  class="object-fill h-48 rounded-md w-96" src="/product_images/{{$model->images}}">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- Product Details Container -->
                        <div class="ml-3 mr-auto">
                            <p class="font-medium">{{ $product->name }}</p>
                        </div>
                        <div class="px-2 pt-3 pb-2 border-t border-slate-200/60 dark:border-darkmode-400">
                            <div class="flex w-full text-xs text-slate-500">
                                <div class="mr-auto"> Price: <span class="">{{$product->sprice }}</span> </div>
                                <?php if ($product->stock <= 60) { ?>
                                    <div class="text-xs "><span class="text-red-300 ">{{$product->stock }}</span> Stocks Left!</div>
                                    <?php } ?>
                                <!--<div class="ml-auto"> Likes: <span class="font-medium">136k</span> </div>-->
                            </div>
                        </div>
                    </a>
                </div>
            @empty

            @endforelse
            <!-- END: Product Layout -->

            <!-- BEGIN: Pagination -->

            <!-- END: Pagination -->
        </div>

    </div>

</div>
<div class="w-full intro-y flex justify-end mt-2" style="width: 500px">
    {{$products->onEachSide(1)->links('pagination::simple-bootstrap-4')}}
</div>

<!-- Mobile Filter/Nav Bar -->
<div class="fixed bottom-0 left-0 z-50 flex w-full h-12 bg-white md:hidden">
    <!-- Mobile Filter Toggle-->
    <div class="flex items-center justify-center w-1/2 border cursor-pointer" id="filterBtn">
        <i class="text-xl fa fa-filter"></i>
    </div>
    <!-- Mobile Home Toggle-->
    <div class="flex items-center justify-center w-1/2 border cursor-pointer">
        <i class="text-xl fas fa-home"></i>
    </div>
</div>
{{-- <div class="fixed bottom-0 left-0 flex w-full h-12 bg-white z- md:hidden">


</div> --}}
{{-- <div class="fixed z-50 p-5 px-5 ml-0 bg-white rounded-full left-5 bottom-5">
    <i class="text-xl fa fa-filter"></i>
</div> --}}
<div class="fixed bottom-0 left-0 flex-col justify-end hidden w-full md:hidden" id="filtersModal" style="z-index: 1000; height:100vh;">
    <div class="w-full bg-white h-1/2">

        <div class="flex py-2 mx-5 mb-3 border-b border-slate-200"></div>

        <label class="mb-1 ml-2 text-xl">Category</label>
        <select class="w-full ml-2 border">
            <option>1</option>
            <option>2</option>
        </select>

        <div class="flex py-2 mx-5 mb-3 border-b border-slate-200"></div>

        <div class="hidden search sm:block">
            <input type="text" class="border-transparent search__input form-control" placeholder="Search...">
        </div>

        <div class="flex py-2 mx-5 mb-3 border-b border-slate-200"></div>

        <div class="flex flex-col my-2 mb-1 ml-2 items-left">
            <p class="text-xl">Price Range</p>
            <div>
                <input id="opt4" type="text" value="" name="r-option-4" placeholder="Min" class="w-1/3 h-5 mr-5 bg-white border-gray-400 rounded ">
                {{--  <div class="w-1/4 mx-1 border-b border-slate-200"></div> --}}
                <input id="opt4" type="text" value="" name="r-option-4" placeholder="Max" class="w-1/3 h-5 bg-white border-gray-400 rounded ">
            </div>
        </div>
    </div>
</div>
<script>


const filterModal = document.querySelector("#filtersModal")
document.querySelector("#filterBtn").addEventListener("click",()=>{

    filterModal.classList.remove("hidden")
    filterModal.classList.add("flex")
})
filterModal.addEventListener("click",(e)=>{
    if(e.target === filterModal){
        filterModal.classList.remove("flex")
         filterModal.classList.add("hidden")
    }
})
</script>
@endsection
@push('scripts')
<script>
</script>
@endpush

