@extends('customer.layout.base')
@section('content')
@section('title', 'Products')


{{-- MANALO TINANGGAL KO YUNG BORDER RADIUS DITO INOVERIDE KO YUNG CSS. CHECK MO NALANG KUNG BAKIT KO TINANGGAL SA TINGIN KO DI BABAGAY YUNG BORDER RADIUS DITO --}}
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

<div class="w-100">
    <div class="flex w-100 mt-7 gap-5  rounded-md">
        <div class="w-1/5 hidden lg:block">
            <div class="h-72 border-b-2">
                {{-- Filters here --}}
            </div>
            <div class="h-72 border-b-2">
                {{-- Filters here --}}
            </div>
        </div>
        <div class="w-full grid grid-cols-2 gap-x-6 gap-y-6 lg:gap-y-10  md:grid-cols-3 lg:w-3/4 xl:grid-cols-4">
                <div class="h-80 rounded-sm  flex lg:h-80 xl:h-96  flex-col">
                    <div>
                        <img src="https://cdn.shopify.com/s/files/1/0257/1884/9583/products/60072_8850006320518_COLGATETPFRESHGRF50ML_74GTUBE_01.jpg?v=1640158639" class="w-full h-80 alt="flask">
                    </div>
                    {{-- <div class="flex flex-col items-center">
                        <div class="w-11/12">
                            <span class="text-base">Colgate Great Regular 74g</span>
                        </div>
                        <div class="w-11/12">
                            <span class="font-bold">750</span>
                        </div>
                    </div> --}}
                </div>
                <div class="h-80 rounded-sm  flex lg:h-80 xl:h-96  flex-col">
                <div class="h-80 rounded-sm shadow-sm flex lg:h-80 xl:h-96  flex-col">
                    <div>
                        <img src="https://cdn.shopify.com/s/files/1/0257/1884/9583/products/60072_8850006320518_COLGATETPFRESHGRF50ML_74GTUBE_01.jpg?v=1640158639" class="w-full h-80 alt="flask">
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-11/12">
                            <span class="text-base">Colgate Great Regular 74g</span>
                        </div>
                        <div class="w-11/12">
                            <span class="font-bold">750</span>
                        </div>
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
