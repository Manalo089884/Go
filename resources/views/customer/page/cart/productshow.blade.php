@extends('customer.layout.base')
@section('content')
@section('title', 'Displaying Product Info')
<div class="items-center justify-center flex" id="ProductShowVue">
    <div style="width: 60rem">
        <!-- Begin Header of Product -->
        <div class="intro-y box px-5 pt-5 mt-7">
            <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                    <div class="ml-5">
                        <div class="w-24 sm:w-40 sm:whitespace-normal font-medium text-xl">{{$product->name}}</div>
                        <div class="text-slate-500">{{ $product->category->name }}</div>
                    </div>
                </div>
                <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                    <div class="font-medium text-center lg:text-left lg:mt-3">Product Details</div>
                    <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                        <div class="truncate sm:whitespace-normal flex items-center"> Sold:  </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3">Ratings: </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3">Stocks: {{ $product->stock }} </div>
                    </div>
                </div>
                <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-0 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                    <div class="text-center rounded-md w-40 py-3">
                        <div class=" flex-col justify-center items-center lg:items-start mt-4">
                            <div class="font-bold tracking-wide text-primary text-xl " >{{ $product->sprice }}</div>
                            <div class="text-slate-500">Selling Price</div>
                            <div class="flex  flex-row   h-8 w-50 justify-center items-center rounded-lg relative bg-transparent mt-1">
                                <form action="" class="flex flex-row ">
                                    <button type="button" @click="decrementQuantity" class="btn-secondary text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-7 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">−</span>
                                    </button>
                                    <input type="text" class="h-8 outline-none focus:outline-none text-center w-14 bg-gray-300 font-medium text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" :value="product.quantity" />
        
                                    <button type="button" @click="incrementQuantity" class="btn-secondary text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-7 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </form>
                            </div>
                            <div class="text-slate-500">Quantity</div>
                            <br>
                            @if(Auth::guard('customer')->check())
                                <button class="intro-x btn btn-primary mt-5 w-full" @click="addToCart">Add to Cart</button>
                            @else
                            <!-- BEGIN: Modal Toggle -->
                                <div class="text-center">
                                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#warning-modal-preview" class="btn btn-primary">Add to Cart</a>
                                </div> <!-- END: Modal Toggle --> <!-- BEGIN: Modal Content -->
                                <div id="warning-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="p-5 text-center">
                                                    <i data-lucide="x-circle" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Hi Customer</div>
                                                    <div class="text-slate-500 mt-2">Before Ordering Create Account First</div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button  data-tw-dismiss="modal" class="btn w-24 btn-primary">Ok</button>
                                                </div>
                                                <div class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400">
                                                    <a href="{{ Route('CLogin.index') }}" class="text-primary">Please Login your Go Dental Account First Before Ordering</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- END: Modal Content -->
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-content mt-5">
            <div>
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Product Details -->
                    <div class="intro-y box col-span-12 lg:col-span-6">
                        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Product Details
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <h3 class="font-medium">Brand Name:</h3>
                                    <div class="text-slate-500 text-xs mt-0.5">{{ $product->brand->name }}</div>
                                </div>
                            </div>
                            <br>
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <h3 class="font-medium">Category Name:</h3>
                                    <div class="text-slate-500 text-xs mt-0.5">{{ $product->category->name }}</div>
                                </div>
                            </div>
                            <br>
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <h3 class="font-medium">Stocks:</h3>
                                    <div class="text-slate-500 text-xs mt-0.5">{{ $product->stock }}</div>
                                </div>
                            </div>
                            <div class="flex items-center mt-5">
                                <div class="ml-4">
                                    <h3 class="font-medium">Weight:</h3>
                                    <div class="text-slate-500 text-xs mt-0.5">{{ $product->weight }}</div>
                                </div>
                            </div>
                            <div class="flex items-center mt-5">
                                <div class="ml-4">
                                    <h3 class="font-medium">Product Description</h3>
                                    <div class="text-slate-500 text-xs mt-0.5">{!! $product->description !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Product Details -->
                    <!-- BEGIN: Product Image -->
                    <div class="intro-y box col-span-12 lg:col-span-6">
                        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Product Image
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="flex justify-center">
                                @if(count($product->images) == 0)
                                    <!-- Begin: Product Image if there is no image -->
                                    <div>
                                        <img alt="Missing Image" class="object-fill h-full w-full" src="{{ asset('dist/images/logo.png') }}">
                                    </div>
                                    <!-- END: Product Image if there is no image -->
                                @elseif(count($product->images) == 1)
                                    <!-- Begin: Product Image if there is one image -->
                                    @foreach ($product->images as $model)
                                        <div>
                                            <img alt="Missing Image" data-action="zoom" class="object-fill h-full w-full " src="/product_images/{{$model->images}}">
                                        </div>
                                    @endforeach
                                    <!-- END: Product Image if there is one image -->
                                @else
                                    <!-- Begin: Product Image Slider -->
                                    <div class="mx-6 pb-8 mt-5 "  >
                                        <div class="fade-mode" style="height: 100%;">
                                            @foreach ($product->images as $model)
                                            <div class="h-64 px-2">
                                                <div class="object-fill h-full w-full" style="height: 100%;">
                                                    <img alt="" src="/product_images/{{$model->images}}" data-action="zoom" style="height: 100%;" class=""/>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- END: Begin Product Image Slider -->
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- END: Product Image -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Begin Product Review -->
<div class="items-center justify-center flex">
    <div class="intro-y box px-1 pt-1 mt-7 " style="width: 60rem">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Product Rating and Reviews
            </h2>
        </div>
    </div>
</div>
<!-- END Product Review -->




@endsection
@push('scripts')
<script>
        window.productId = "{{$product->id}}"
</script>
<script src="{{ asset('dist/js/product-show.js') }}"></script>
@endpush

