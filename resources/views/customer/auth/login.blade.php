@extends('customer.layout.base')
@section('content')  
@section('title', 'Login')

<div class="intro-y box mt-10">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">
            Go Dental Login 
        </h2>
    </div>
    <div id="vertical-form" class="p-5">
        <div class="preview">
            <div>
                <label for="vertical-form-1" class="form-label">Email</label>
                <input id="vertical-form-1" type="text" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="mt-3">
                <label for="vertical-form-2" class="form-label">Password</label>
                <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
            </div>
            <div class="form-check mt-5">
                <input id="vertical-form-3" class="form-check-input" type="checkbox" value="">
                <label class="form-check-label" for="vertical-form-3">Remember me</label>
            </div>
            <button class="btn btn-primary mt-5">Login</button>
        </div>
        <div class="source-code hidden">
            <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
            <div class="overflow-y-auto mt-3 rounded-md">
                <pre id="copy-vertical-form" class="source-preview"> <code class="html"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;vertical-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag </code> </pre>
            </div>
        </div>
    </div>
</div>
@endsection 
@push('scripts')
<script>
</script>
@endpush