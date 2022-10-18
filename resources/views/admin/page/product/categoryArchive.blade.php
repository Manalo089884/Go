@extends('admin.layout.admin')
@section('content')
@section('title', 'Archive Category')
<h2 class="intro-y text-lg font-medium mt-10">Archive Category
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a class="btn btn-primary shadow-md mr-2" href="{{Route('category.index')}}">Go Back </a>

        <div class="hidden md:block mx-auto text-slate-500">
            Showing {{$category->firstItem()}} to {{$category->lastItem()}} of {{$category->total()}} entries
        </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">

                <form action="{{Route('CategoryArchiveIndex')}}" method="GET">
                    <input type="text" class="form-control w-56 box pr-10" name="search" id="search" placeholder="Search..." value="{{request()->query('search')}}">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </form>
            </div>
        </div>
    </div>

     <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        @if(session('success'))
            <x-Alert.SuccessAlert message="{{session('success')}}"></x-Alert.SucessAlert>
        @endif
        @if(session('invalid'))
            <x-Alert.WarningAlert message="{{session('invalid')}}"/>
        @endif


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
                <td class="table-report__action w-60">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;"  id="restoreCategory" data-name="{{$categories->name}}" data-id="{{$categories->id}}">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Restore </a>

                        <a class="flex items-center text-danger" href="javascript:;" id="permadeletcategory" data-name="{{$categories->name}}"  data-id="{{$categories->id}}">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete Forever
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

    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {{$category->onEachSide(0)->appends(['search' => request()->query('search')])->links('pagination::bootstrap-4')}}
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
                      You want to permanently delete this brand <div id="delete_category"></div>
                </div>
        </div>
        <form action method="POST" id="permadeleteForm">
            @method('DELETE')
            @csrf
            <div class="px-5 pb-8 text-center">
                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                <button type="submit" class="btn btn-danger w-24">Delete</button>
            </div>
        </form>
    </x-Modal.DeleteModal>
    <x-Modal.RestoreModal>
        <div class="p-5 text-center">
            <i data-lucide="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
            <div class="text-3xl mt-5">
                Are you sure?
            </div>
            <div class="text-slate-500 mt-2">
                You want to restore this data <div id="restore_data"></div>
            </div>
        </div>
        <form action method="POST" id="restoreCategoryForm">
            @method('put')
            @csrf
            <div class="px-5 pb-8 text-center">
                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                <button type="submit" class="btn btn-primary  w-24">Restore</button>
            </div>
        </form>
    </x-Modal.RestoreModal>

<script src="{{asset('dist/js/categoryarchive.js')}}"></script>
@if(session('restoreSuccess'))
    <x-Notification.SuccessNotification title="Category Restored Successfully" message="{{session('restoreSuccess')}}"/>
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
