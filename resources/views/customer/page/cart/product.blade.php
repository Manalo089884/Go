@extends('customer.layout.base')
@section('content')
@section('title', 'Product')

<div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Product Filter -->
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2 flex lg:block flex-col-reverse">
            <div class="sticky top-10 right-10 box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Product Filters</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <input type="search" class="form-control" name="Search" placeholder="Search Product">
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="font-medium text-base p-2">Sort By Category:</div>
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
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="font-medium text-base p-2">Price:</div>
                    <div class="flex justify-between gap-2 ">
                        <input id="opt4" type="text" value="" name="r-option-4" class="form-control" placeholder="Min" class="w-1/3 h-5 mr-5 bg-white border-gray-400 rounded ">
                        <input id="opt4" type="text" value="" name="r-option-4" class="form-control" placeholder="Max" class="w-1/3 h-5 bg-white border-gray-400 rounded ">
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Product Filter sticky top-0 right-10 w-full flex justify-end -->
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: Product List -->
            <div class="intro-y lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        List of Products
                    </h2>
                </div>
                <div class="p-5">
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="grid grid-cols-12 gap-4 sm:gap-2  intro-y max-width place-items-center">
                        <!-- BEGIN: Product Layout -->
                        @forelse ($products as $product)
                            <div class="box col-span-12 max-w-xs  md:col-span-4 lg:col-span-4 xl:col-span-3 2xl:col-span-2 ">
=======
                    <div class="grid grid-cols-12 gap-6  intro-y">
                        <!-- BEGIN: Product Layout -->
                        @forelse ($products as $product)
                            <div class="box col-span-6 sm:col-span-4 lg:col-span-3 xl:col-span-3 2xl:col-span-2">
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                    <div class="grid grid-cols-12 gap-4 sm:gap-2  intro-y max-width place-items-center">
                        <!-- BEGIN: Product Layout -->
                        @forelse ($products as $product)
                            <div class="box col-span-12 max-w-xs  md:col-span-4 lg:col-span-4 xl:col-span-3 2xl:col-span-2 ">
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                                <div class="text-slate-500 p-1 flex justify-end">{{ $product->category->name }}</div>
                                <a href="{{ Route('productshow', $product) }}">
                                <div class="flex items-center  border-b border-slate-200/60 dark:border-darkmode-400"></div>
                                    <div class="p-5">
<<<<<<< HEAD
<<<<<<< HEAD
                                        <div class="h-48 2xl:h-48">
                                            @if(count($product->images) == 0)
                                                <img alt="Missing Image"  class="object-fill    h-48 rounded-md w-96" src="{{ asset('dist/images/logo.png') }}">
                                            @else
                                                @foreach ($product->images->take(1)  as $model)
                                                    <img alt="Missing Image"  class="object-fill    h-48 rounded-md w-96" src="/product_images/{{$model->images}}">
=======
                                        <div class="h-48 2xl:h-56">
=======
                                        <div class="h-48 2xl:h-48">
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                                            @if(count($product->images) == 0)
                                                <img alt="Missing Image"  class="object-fill    h-48 rounded-md w-96" src="{{ asset('dist/images/logo.png') }}">
                                            @else
                                                @foreach ($product->images->take(1)  as $model)
<<<<<<< HEAD
                                                    <img alt="Missing Image"  class="object-fill h-48 rounded-md w-96" src="/product_images/{{$model->images}}">
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                                                    <img alt="Missing Image"  class="object-fill    h-48 rounded-md w-96" src="/product_images/{{$model->images}}">
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Product Details Container -->
                                    <div class="ml-3 mr-auto">
                                        <div class="font-medium">{{ $product->name }}</div>
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
                            <div>No Products</div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="intro-y  mt-2 w-full">
                <div class="flex justify-end mt-4 w-full sm:w-96">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
<script>
</script>
@endpush

