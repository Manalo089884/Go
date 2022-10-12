@extends('customer.layout.base')
@section('content')
@section('title', 'Cart')
@if(count($cart) == 0)
<div class="flex items-center justify-center mt-48 intro-y 	">
    <div>
        <div>
            <img alt="Missing Image" class="object-fill  rounded-md h-48 w-96" src="{{ asset('dist/images/NoResultFound.svg') }}">
        </div>
        <div class="flex justify-center mt-2 text-lg text-slate-600 font-medium leading-none mt-3">There are no items in this cart</div>
        <div class="flex justify-center mt-2">
            <a href="{{ Route('product') }}" class="btn btn-primary mt-3">Continue Shopping</a>
        </div>

    </div>
</div>
@else
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Cart
    </h2>
</div>



<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <div class="relative flex items-center p-5">
                <div class="w-12 h-12 object-fill">

                    <img alt="Location Icon" class="rounded-full object-fill w-full h-full" src="{{ asset('icons/location.svg') }}">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium text-base">Shipping Adress</div>
                    <div class="text-slate-500">Baesa, Quezon City, Metro Manila</div>
                </div>
            </div>
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <h1 class="font-medium leading-none mt-1">Order Summary</h1>
                <div class="flex justify-between mt-3">
                    <div>
                        <h1>Subtotal (15 items)</h1>
                    </div>
                    <div>
                        <h1>₱1,200</h1>
                    </div>
                </div>
                <div class="flex justify-between mt-3 ">
                    <div>
                        <h1>Shipping Fee</h1>
                    </div>
                    <div>
                        <h1>₱120</h1>
                    </div>
                </div>

            </div>
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <h1 class="font-medium leading-none mt-1 mb-2">Voucher Code:</h1>
                <div class="flex justify-between gap-1">
                    <div class="w-full">
                        <input type="text" class="w-full form-control">
                    </div>
                    <div>
                        <button class="btn btn-primary w-24">Apply</button>
                    </div>
                </div>

            </div>
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <div class="flex justify-between mt-3 ">
                    <div>
                        <h1 class="font-medium leading-none mt-1 mb-2">Subtotal</h1>
                    </div>
                    <div>
                        <h1>₱1,320</h1>
                    </div>
                </div>

                <form action="">
                    <button class="btn btn-primary w-full mr-1 mb-1">Proceed to Checkout</button>
                </form>
            </div>

        </div>
    </div>
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Cart
                </h2>
            </div>
            <div class="p-5">



                <div class="overflow-x-auto">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">#</th>
                                <th class="whitespace-nowrap text-center">Product Name</th>
                                <th class="whitespace-nowrap text-center">Category</th>
                                <th class="whitespace-nowrap text-center">Quantity</th>
                                <th class="whitespace-nowrap text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $cart)
                                <tr>
                                    @foreach ($cart->getProduct as $model)
                                    <td class="w-20"><input type="checkbox" class="form-control" name="" id=""></td>
                                    <td class="whitespace-nowrap text-center"> {{   $model->name }}</td>
                                    <td class="whitespace-nowrap text-center"> {{   $model->category->name }}</td>
                                    <td class="whitespace-nowrap text-center">{{ $cart->quantity }}</td>
                                    <td class="whitespace-nowrap flex justify-center items-center">
                                        <button  wire:click="selectItem({{$cart->id}},'update')" class="flex items-center mr-3" >
                                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Adjust
                                        </button>
                                        <button wire:click="selectItem({{$cart->id}},'delete')" class="flex items-center text-danger">
                                            <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete
                                        </button>
                                    </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                     </table>
                    </div>

            </div>
        </div>
        <!-- END: Display Information -->
    </div>
</div>
@endif
@endsection
@push('scripts')
<script>
</script>
@endpush
