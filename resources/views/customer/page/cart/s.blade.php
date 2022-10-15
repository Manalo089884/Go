@extends('customer.layout.base')
@section('content')
@section('title', 'Showing')
{{-- <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        {{$product->name}}
    </h2>
</div>

<h2>{{ $product->category->name }}</h2>
<h2>{{ $product->brand->name }}</h2>
<h2>{{ $product->stock }}</h2>
<h2>{{ $product->SKU }}</h2>
<h2>{{ $product->sprice }}</h2>
<h2>{{ $product->weight }}</h2>
<h2>{!! $product->description !!}</h2> --}}

<div class="items-center justify-center flex">
    <div style="width: 60rem">
        <div class="intro-y box px-5 pt-5 mt-7">
            <div class="flex  flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                    <div class="mx-6">
                            <div class="single-item">
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">1</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">5</h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                        <h3 class="h-full font-medium flex items-center justify-center text-2xl">6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- <div class="w-full h-full sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative ">
                        @if(count($product->images) == 0)
                            <img alt="Missing Image" class="object-fill  rounded-md h-48 w-96" src="{{ asset('dist/images/logo.png') }}">
                        @else
                            <div class="mx-6 pb-8">
                                <div class="fade-mode">
                                    @foreach ($product->images as $model)
                                        <div class="h-64 px-2">
                                            <div class="h-full image-fit rounded-md overflow-hidden">
                                                <img alt="Missing Image" data-action="zoom" class="object-fill  rounded-md h-48 w-96" src="/product_images/{{$model->images}}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif



                    </div> --}}

                </div>
                <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">

                    <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                        <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-bold text-xl flex items-center">{{$product->name}}</div>
                        <div class="text-slate-500 w-24 sm:w-40 truncate sm:whitespace-normal flex items-center">{{ $product->category->name }}</div>

                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> Sold:  </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3">Ratings: </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3">Stocks: {{ $product->stock }} </div>
                    </div>
                </div>
                <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-0 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                    <div class="text-center rounded-md w-40 py-3">
                        <div class=" flex-col justify-center items-center lg:items-start mt-4">
                            <div class="font-bold tracking-wide text-primary text-xl " >{{ $product->sprice }}</div>
                            <div class="text-slate-500">Selling Price</div>
                            <div class="flex flex-row h-8 w-50 justify-center items-center rounded-lg relative bg-transparent mt-1">
                                <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-7 rounded-l cursor-pointer outline-none">
                                    <span class="m-auto text-2xl font-thin">−</span>
                                </button>
                                <input type="text" class="h-8 outline-none focus:outline-none text-center w-14 bg-gray-300 font-medium text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
                                <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-7 rounded-r cursor-pointer">
                                    <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                            <div class="text-slate-500">Quantity</div>
                            <br>
                            @if(Auth::guard('customer')->check())
                                <button class="intro-x btn btn-primary mt-5 w-full">Add to Cart</button>
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
                    {{-- <div class="text-center rounded-md w-20 py-3">
                        <div class="font-medium text-primary text-xl">1k</div>
                        <div class="text-slate-500">Purchases</div>
                    </div>
                    <div class="text-center rounded-md w-20 py-3">
                        <div class="font-medium text-primary text-xl">492</div>
                        <div class="text-slate-500">Reviews</div>
                    </div> --}}
                </div>
            </div>
                {{-- <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
                    <li id="profile-tab" class="nav-item" role="presentation">
                        <a href="javascript:;" class="nav-link py-4 flex items-center active" data-tw-target="#profile" aria-controls="profile" aria-selected="true" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="user"></i> Product Details </a>
                    </li>
                    <li id="account-tab" class="nav-item" role="presentation">
                        <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#account" aria-selected="false" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="shield"></i> Ratings & Reviews </a>
                    </li>
                    <li id="change-password-tab" class="nav-item" role="presentation">
                        <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#change-password" aria-selected="false" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="lock"></i> Change Password </a>
                    </li>
                    <li id="settings-tab" class="nav-item" role="presentation">
                        <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#settings" aria-selected="false" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="settings"></i> Settings </a>
                    </li>
                </ul> --}}
            </div>
            <div class="tab-content mt-5">
                <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
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
                                        <h3 class="font-medium">SKU:</h3>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $product->SKU }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Latest Uploads -->
                        <!-- BEGIN: Work In Progress -->
                        <div class="intro-y box col-span-12 lg:col-span-6">
                            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Product Description
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="ml-4">

                                        <div class="text-slate-500 text-sm mt-0.5">{!! $product->description !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="items-center justify-center flex">
        <div class="intro-y box px-1 pt-1 mt-7 " style="width: 60rem">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Product Rating and Reviews
                </h2>
            </div>
        </div>
    </div>
</div>



@endsection
@push('scripts')
<script>
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>
@endpush

