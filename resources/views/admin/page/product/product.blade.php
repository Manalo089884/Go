@extends('admin.layout.admin')
@section('content')  
@section('title', 'Product')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
<h2 class="text-lg font-medium mr-auto">Product</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="{{Route('product.create')}}"> <button class="btn btn-primary shadow-md mr-2">Add New Product</button></a>
        <div class="dropdown ml-auto sm:ml-0">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-lucide="plus"></i>
                </span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="{{Route('archives.index')}}" class="dropdown-item">
                            <i data-lucide="file-plus" class="w-3 h-3 mr-2"></i> Archive Products
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="users" class="w-3 h-3 mr-2"></i> New Group
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
 <div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="name">Name</option>
                    <option value="category">Category</option>
                    <option value="remaining_stock">Remaining Stock</option>
                </select>
            </div>
             <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                    <option value="like" selected>like</option>
                    <option value="=">=</option>
                    <option value="<">&lt;</option>
                    <option value="<=">&lt;=</option>
                    <option value=">">></option>
                    <option value=">=">>=</option>
                    <option value="!=">!=</option>
                </select>
            </div>

            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0"  placeholder="Search...">
            </div>

            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Go</button>
                <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
            </div>
        </form>
        <div class="flex mt-5 sm:mt-0">
            <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
            </button>
            <div class="dropdown w-1/2 sm:w-auto">
                <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV
                            </a>
                        </li>
                        <li>
                            <a id="tabulator-export-json" href="javascript:;" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON
                            </a>
                        </li>
                        <li>
                            <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                            </a>
                        </li>
                        <li>
                            <a id="tabulator-export-html" href="javascript:;" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto scrollbar-hidden">

    @if($products->count())
    <div class="overflow-x-auto"> 
        <table class="table table-striped mt-5" id="datatable"> 
            <thead> 
                <tr> 
                    <th class="whitespace-nowrap ">#</th> 
                    <th class="whitespace-nowrap ">Product Name</th> 
                    <th class="whitespace-nowrap text-center">Inventory</th> 
                    <th class="whitespace-nowrap text-center">Status</th> 
                    <th class="whitespace-nowrap text-center">Actions</th>     
                </tr> 
            </thead> 
            <tbody> 
            @foreach($products as $product)
                <tr> 
                    <td class="whitespace-nowrap ">{{$loop->iteration}}</td> 
                    <td class="whitespace-nowrap ">
                        <a href="" class="font-medium whitespace-nowrap">{{$product->name}}</a> 
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$product->category->name}}</div>
                    </td> 
                    <td class="whitespace-nowrap text-center">{{$product->stock}}</td> 
                    <td class="whitespace-nowrap">
                        @if($product->status == 1)
                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        @elseif ($product->status == 0)
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        @endif
                    </td> 
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">

                            <a class="flex items-center mr-3" href="{{url('product/'.$product->id.'/edit')}}"  id="editBrand" > 
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit 
                            </a>
                            <a class="flex items-center text-danger" href="javascript:;"  id="deleteProduct" data-name="{{$product->name}}"  data-id="{{$product->id}}"> 
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                         </a>
                        </div>
                    </td>
                </tr> 
            @endforeach 
            </tbody> 
        </table> 
    </div>
    @else
    <h2 class="intro-y text-lg font-medium mt-10"> 
         No Results found <strong>{{{request()->query('search')}}}</strong>
    </h2>
    @endif
    </div>

        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto mt-5">
                {{$products->onEachSide(0)->appends(['search' => request()->query('search')])->links('pagination::bootstrap-4')}}
            </nav>  
        </div>
    </div>
    
<x-Modal.DeleteModal>
    <div class="p-5 text-center">
        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
        <div class="text-3xl mt-5">
            Are you sure?
        </div>
        <div class="text-slate-500 mt-2">
            Do you really want to delete this Product 
            <div id="delete_product"></div>
        </div>
    </div> 
    <form action method="POST" id="deleteProductForm">
        @method('DELETE')
        @csrf
        <div class="px-5 pb-8 text-center">
            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
            <button type="submit" class="btn btn-danger w-24">Delete</button>
        </div>  
    </form> 
</x-Modal.DeleteModal>

@if(session('success'))
    <x-Notification.SuccessNotification title="Product Saved" message="{{session('success')}}"/>
@endif
@if(session('ProductEditSuccess'))
    <x-Notification.SuccessNotification title="Edit Success" message="{{session('ProductEditSuccess')}}"/>
@endif
@if(session('ProductArchiveSuccess'))
    <x-Notification.SuccessNotification title="Product Delete Success" message="{{session('ProductArchiveSuccess')}}"/>
@endif


<script>
   $(document).ready(function () {
    $("#datatable").on("click", "#deleteProduct", function () {
        var id = $(this).data("id");
        var name = $(this).data("name");
        $("#deleteProductForm").attr("action", "/product/" + id);
        $("#delete_product").text(name);
        const myModal = tailwind.Modal.getInstance(
            document.querySelector("#delete-confirmation-modal")
        );
        myModal.show();
    });  
});
</script>
@endsection