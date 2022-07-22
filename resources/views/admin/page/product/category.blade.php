@extends('admin.layout.admin')
@section('content')  
@section('title', 'Category')
<h2 class="intro-y text-lg font-medium mt-10">Category</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a class="btn btn-primary shadow-md mr-2" href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal">Add New Category </a>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="{{Route('CategoryArchiveIndex')}}" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i>Archive </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden md:block mx-auto text-slate-500">
            Showing {{$category->firstItem()}} to {{$category->lastItem()}} of {{$category->total()}} entries
        </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">
                
                <form action="" method="GET">
                    <input type="text" class="form-control w-56 box pr-10" name="search" id="search" placeholder="Search..." value="{{request()->query('search')}}">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 

                </form>
                
            </div>
        </div>
    </div>

    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        @if(session('success'))
             <x-Alert.SuccessAlert message="{{session('success')}}"></x-Alert.SucessAlert>
        @endif
        @error('name')
            <x-Alert.WarningAlert message="{{$message}}"/>
        @enderror

    @if($category->count())          
        <table class="table table-report -mt-2" id="datatable">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">CATEGORY NAME</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            @foreach($category as $categories)
            <tr class="intro-x">
                <td>
                    <p class="font-medium whitespace-nowrap" id="brandname">{{$categories->name}}</p> 
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;" id="editCategory" data-name="{{$categories->name}}" data-id="{{$categories->id}}"> 
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                      
                        <a class="flex items-center text-danger" href="javascript:;"  id="deleteCategory" data-name="{{$categories->name}}"  data-id="{{$categories->id}}"> 
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                         </a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
     <h2 class="intro-y text-lg font-medium mt-10"> 
         No Results found <strong>{{{request()->query('search')}}}</strong>
    </h2>
     @endif
    </div>
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {{$category->onEachSide(0)->appends(['search' => request()->query('search')])->links('pagination::bootstrap-4')}}
        </nav>  
    </div>
</div>
<x-Modal.InsertModal message="Category">
    <form action="{{route('category.store')}}" method="POST">
        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
            <div class="col-span-12">
                @csrf
                <label for="pos-form-1" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control flex-1" placeholder="Category name" >
            </div>
        </div>
        <div class="modal-footer text-right">
            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1">Cancel</button>
            <input type="submit" class="btn btn-primary w-32" value="Submit">
        </div>
    </form>
</x-Modal.InsertModal>
<x-Modal.EditModal message="Category">
    <form  action method="POST" id="editCategoryForm">
        @method('put')
        @csrf
        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
            <div class="col-span-12">   
                <label for="pos-form-1" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control flex-1" placeholder="Category name" value="" required>
            </div>
        </div>
        <div class="modal-footer text-right">
            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1">Cancel</button>
            <input type="submit" class="btn btn-primary w-32" value="Edit">
        </div>
    </form>
</x-Modal.EditModal>
<x-Modal.DeleteModal>
    <div class="p-5 text-center">
        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
        <div class="text-3xl mt-5">
            Are you sure?
        </div>
        <div class="text-slate-500 mt-2">
            Do you really want to delete this category <div id="delete_category"></div>
        </div>
    </div> 
    <form action method="POST" id="deleteCategoryForm">
        @method('DELETE')
        @csrf
        <div class="px-5 pb-8 text-center">
            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
            <button type="submit" class="btn btn-danger w-24">Delete</button>
        </div>  
    </form>
</x-Modal.DeleteModal>

<script src="{{asset('dist/js/category.js')}}"></script>
@if(session('success'))
    <x-Notification.SuccessNotification title="Category Saved" message="{{session('success')}}"/>
@endif
@if(session('editSuccess'))
    <x-Notification.SuccessNotification title="Category Edit Saved" message="{{session('editSuccess')}}"/>
@endif
@if(session('deleteSuccess'))
    <x-Notification.SuccessNotification title="Category Deleted Successfully" message="{{session('deleteSuccess')}}"/>
@endif
@if(session('invalid'))
    <x-Notification.InvalidNotification title="Category Cannot be Deleted" message="{{session('invalid')}}"/>
@endif
@error('name')
    <x-Notification.InvalidNotification title="Invalid Input" message="{{$message}}"/>
@enderror
@endsection