@extends('customer.layout.base')
@section('content')
@section('title', 'Home')

<div class="items-center justify-center flex mt-5" >
    <div class="py-5 px-5">
        <div class="mx-6 pb-8 mt-5 " autowidth>
            <div class="fade-mode" >
                @foreach ($banners as $banner)
                <div class="px-2">
                    <div class="object-fill  w-full" >
                        <img alt="" src="{{ url('storage/banner/'.$banner->featured_image) }}" class=" object-fill w-full"/>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

    {{-- FLash Sale --}}
<div class="items-center justify-center flex px-5">
    <div class=" mt-5 py-12 px-6 intro-y box ">
        <div class="px-6">
            <div class="border-b-2 border-slate-200/60 dark:border-darkmode-400">
                <h2 class="text-lg font-medium mr-auto">Flash Sales</h2>
            </div>
            <div class="pt-5 responsive-mode">
                <div class=" px-2" >
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill  w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    {{-- Top Products --}}
<div class="items-center justify-center flex px-5">
    <div class=" mt-5 py-12 px-6 intro-y box mx-7">
        <div class="px-6">
            <div class="border-b-2 border-slate-200/60 dark:border-darkmode-400">
                <h2 class="text-lg font-medium mr-auto">Top Product</h2>
            </div>
            <div class="pt-5 responsive-mode">
                <div class=" px-2" >
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill  w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Categories --}}
<div class="items-center justify-center flex px-5">
    <div class=" mt-5 py-12 px-6 intro-y box mx-7">
        <div class="px-6">
            <div class="border-b-2 border-slate-200/60 dark:border-darkmode-400">
                <h2 class="text-lg font-medium mr-auto">Categories</h2>
            </div>
            <div class="pt-5 responsive-mode">
                <div class=" px-2" >
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                    </div>
                </div>
                <div class=" px-2">
                    <div class="object-fill  w-full">
                        <img class="" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
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
