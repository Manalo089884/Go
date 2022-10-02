@extends('customer.layout.base')
@section('content')
@section('title', 'Product')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Product List
    </h2>
</div>
<div class="intro-y grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Blog Layout -->

    @forelse ($products as $product)
    <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
        <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
            <div class="ml-3 mr-auto">
                <a href="" class="font-medium">{{ $product->name }}</a>
                <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="">{{ $product->category->name }}</a></div>
            </div>

        </div>
        <div class="p-5">
            <div class="h-40 2xl:h-56 image-fit">
                <img alt="Midone - HTML Admin Template" class="rounded-md" src="{{ asset('dist/images/preview-13.jpg') }}">
            </div>
            <a href="" class="block font-medium text-base mt-5">Dummy text of the printing and typesetting industry</a>
            <div class="text-slate-600 dark:text-slate-500 mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
        </div>
        <div class="flex items-center px-5 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
            <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto tooltip" title="Cart"> <i data-lucide="share-2" class="w-3 h-3"></i> </a>
            <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="Wishlist"> <i data-lucide="share" class="w-3 h-3"></i> </a>
        </div>
        <div class="px-5 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="w-full flex text-slate-500 text-xs sm:text-sm">
                <div class="mr-2"> Comments: <span class="font-medium">77</span> </div>
                <div class="mr-2"> Views: <span class="font-medium">23k</span> </div>
                <div class="ml-auto"> Likes: <span class="font-medium">136k</span> </div>
            </div>

        </div>
    </div>
    @empty

    @endforelse


    <!-- END: Blog Layout -->
    <!-- BEGIN: Pagination -->

    <!-- END: Pagination -->
</div>
@endsection
@push('scripts')
<script>
</script>
@endpush
