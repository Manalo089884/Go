@extends('customer.layout.base')
@section('content')
@section('title', 'Home')
<div class="mt-5 ">
    <div class="mx-6 pb-8 mt-5 h-full "  >
        <div class="fade-mode">
            <div class="h-64 px-2">
                <div class="h-full image-fit rounded-md overflow-hidden">
                    <img alt="" src="{{ asset('dist/images/food-beverage-19.jpg')}}" />
                </div>
            </div>
            <div class="h-64 px-2">
                <div class="h-full image-fit rounded-md overflow-hidden">
                    <img alt="" src="{{ asset('dist/images/food-beverage-10.jpg') }}" />
                </div>
            </div>
            <div class="h-64 px-2">
                <div class="h-full image-fit rounded-md overflow-hidden">
                    <img alt="" src=" {{ asset('dist/images/food-beverage-13.jpg') }}" />
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
