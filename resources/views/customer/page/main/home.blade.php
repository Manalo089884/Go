@extends('customer.layout.base')
@section('content')  
@section('title', 'Home')

<div class="mx-6 pb-8 mt-5 h-full"  > 
    <div class="fade-mode"> 
        <div class="h-64 px-2"> 
            <div class="h-full image-fit rounded-md overflow-hidden"> 
                <img alt="Midone - HTML Admin Template" src="{{'dist/images/slide_2.png'}}" /> 
            </div> 
        </div> 
        <div class="h-64 px-2"> 
            <div class="h-full image-fit rounded-md overflow-hidden"> 
                <img alt="Midone - HTML Admin Template" src="dist/images/slide.jpg" /> 
            </div> 
        </div> 
        <div class="h-64 px-2">
            <div class="h-full image-fit rounded-md overflow-hidden"> 
                <img alt="Midone - HTML Admin Template" src="dist/images/slide_3.jpg" /> 
            </div> 
        </div> 
    </div>
</div> 

@endsection 
@push('scripts')
<script>
</script>
@endpush