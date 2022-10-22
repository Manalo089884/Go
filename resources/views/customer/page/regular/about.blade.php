@extends('customer.layout.base')
@section('content')
@section('title', 'About Us')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        About us
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: FAQ Menu -->
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10 border-2 border-primary dark:border-primary">
        <i data-lucide="shield" class="block w-12 h-12 text-primary mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Mission</div>
        <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-lucide="send" class="block w-12 h-12 text-primary mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Vision</div>
        <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-lucide="trending-up" class="block w-12 h-12 text-primary mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Core Values</div>
        <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <!-- END: FAQ Menu -->
    <!-- BEGIN: FAQ Content -->
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="box">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Working with Dropplets
                </h2>
            </div>
            <div id="faq-accordion-1" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-1" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1"> OpenSSL Essentials: Working with SSL Certificates, Private Keys </button>
                    </div>
                    <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-2" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2"> Understanding IP Addresses, Subnets, and CIDR Notation </button>
                    </div>
                    <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-3" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3"> How To Troubleshoot Common HTTP Error Codes </button>
                    </div>
                    <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-4" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4"> An Introduction to Securing your Linux VPS </button>
                    </div>
                    <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box col-span-12 lg:col-span-6 ">
        <div class="flex items-center justify-center">
            <img src="dist/images/logo.png" class="" style="max-width: 27.8rem " alt="..." />
        </div>
    </div>
</div>
<div class="box mt-5 p-3 border-b border-slate-200/60">
    <div id="map" style="" class="w-full h-96 "></div>
</div>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMPLUYUqR8R0YvltLkdenCqsCqH2v7kvQ&callback=initMap"></script>
<script>
    // Initialize and add the map
    function initMap() {
    // The location of Uluru
    const uluru = { lat: 14.869930304129703, lng: 120.81190889325947 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
    }

    initMap();
    window.initMap = initMap;
</script>

@endsection
@push('scripts')

@endpush
