@extends('customer.layout.base')
@section('content')  
@section('title', 'Contact')


<!-- BEGIN: Wizard Layout -->
<div class="md:flex justify-center lg:flex justify-center">
<div class="intro-y box py-10 sm:py-20 mt-5 w-full   ">
    <div class="px-5 mt-10">
        <div class="font-medium text-center text-5xl">Contact</div>
        <div class="text-slate-500 text-center mt-2">To start off, please enter your username, email address and password.</div>
    </div>
    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
    
        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
            <div class="intro-y col-span-12 sm:col-span-6">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <label  class="form-label">Last Name</label>
                <input  type="text" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <label  class="form-label">Email</label>
                <input  type="text" class="form-control" placeholder="Important Meeting">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <label class="form-label">Phone number</label>
                <input type="text" class="form-control" placeholder="Job, Work, Documentation">
            </div>
          
        </div>
        <div class="mt-5">
            <label class="form-label mb-3">Message</label>
            <textarea id="editor" class="editor" name="description" ></textarea>
        </div>
            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <button class="btn btn-primary w-24 ml-2">Send</button>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{asset('dist/js/ckeditor-classic.js')}}"></script>

@endsection 
@push('scripts')
<script>
</script>
@endpush