@extends('customer.layout.base')
@section('content')
@section('title', 'Home')
<div style="padding: 25px 50px 75px 50px;">
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

    {{-- FLash Sale --}}
    <div style="padding: 25px 50px 25px 50px;">
        <div style="background: white">
            <div style="padding: 30px 50px 30px 50px;">
                <div class="border-b-2 py-5 border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="text-lg font-medium mr-auto">Flash Sale</h2>
                </div>

                <br>
                <div class="mx-6 pb-8">
                    <div class="responsive-mode">
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Top Products --}}
    <div style="padding: 25px 50px 25px 50px;">
        <div style="background: white">
            <div style="padding: 30px 50px 30px 50px;">
            <div class="border-b-2 py-5 border-slate-200/60 dark:border-darkmode-400">
                <h2 class="text-lg font-medium mr-auto">Top Product</h2>
            </div>
                <br>
                <div class="mx-6 pb-8">
                    <div class="responsive-mode">
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Categories --}}
    <div style="padding: 25px 50px 25px 50px;">
        <div style="background: white">
            <div style="padding: 30px 50px 30px 50px;">
            <div class="border-b-2 py-5 border-slate-200/60 dark:border-darkmode-400">
                <h2 class="text-lg font-medium mr-auto">Categories</h2>
            </div>
                <br>
                    <div class="mx-6 pb-8">
                        <div class="responsive-mode">
                            <div class="h-32 px-2">
                                <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                    <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                    <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                    <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" />
                                </div>
                            </div>
                            <div class="h-32 px-2">
                                <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                    <img class="h-full font-medium flex items-center justify-center text-2xl" alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" />
                                </div>
                            </div>
                        </div>
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
