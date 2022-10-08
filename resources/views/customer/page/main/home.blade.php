@extends('customer.layout.base')
@section('content')
@section('title', 'Home')

<div class="mt-5" >
    <div class="mx-6 pb-8 mt-5 h-full " autowidth  >
        <div class="fade-mode" style="height: 700px;">
            <div class="h-64 px-2">
                <div class="object-fill h-full w-full" style="height: 700px;">
                    <img alt="" src="{{ asset('dist/images/slide.jpg')}}" style="height: 700px;" class=" object-fill h-48 w-full"/>
                </div>
            </div>
            <div class="h-64 px-2">
                <div class="object-fill h-full w-full" style="height: 700px;">
                    <img alt="" src="{{ asset('dist/images/slide_2.png')}}" style="height: 700px;" class=" object-fill h-48 w-full"/>
                </div>
            </div>
            <div class="h-64 px-2">
                <div class="object-fill h-full w-full" style="height: 700px;">
                    <img alt="" src="{{ asset('dist/images/slide_3.jpg')}}" style="height: 700px;" class=" object-fill h-48 w-full"/>
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
