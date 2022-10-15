<div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a class="btn btn-primary shadow-md mr-2" href="{{ Route('user.create') }}">Add New User</a>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="fa-solid fa-plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> Add Group </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="message-circle" class="w-4 h-4 mr-2"></i> Send Message </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">
                @if($users->count() == 0)
                Showing 0 to 0 of 0 entries
                @else
                    Showing {{$users->firstItem()}} to {{$users->lastItem()}} of {{$users->total()}} entries
                @endif
            </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" wire:model.lazy="search" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @forelse($users as $user)
        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
            <div class="box">
                <div class="flex items-start px-5 pt-5">
                    <div class="w-full flex flex-col lg:flex-row items-center">
                        <div class="w-16 h-16 image-fit">
                            @if(!empty($user->photo))
                                <img src="{{ url('storage/photos/'.$user->photo) }}" data-action="zoom" class="" alt="">
                            @else
                                <img alt="Missing Image" class="rounded-full" data-action="zoom" src="{{asset('dist/images/undraw_pic.svg')}}">
                            @endif
                        </div>
                        <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{ $user->name }}</a>
                            <div class="text-slate-500 text-xs mt-0.5">{{ $user->roles->name }}</div>
                        </div>
                    </div>
                    <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-content">
                                <a href="" class="dropdown-item"> <i class="fa-solid fa-pen mr-1"></i> Edit </a>
                                <a href="" class="dropdown-item"> <i class="fa-solid fa-trash mr-1"></i> Delete </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center lg:text-left p-5">
                    <div>Address: {{ $user->address }}</div>
                    <div class="flex items-center justify-center lg:justify-start text-slate-500 mt-5"><i class="fa-regular fa-envelope mr-1"></i>{{ $user->email }} </div>
                    <div class="flex items-center justify-center lg:justify-start text-slate-500 mt-1"> <i class="fa-solid fa-phone mr-1"></i> {{ $user->phone_number }} </div>
                </div>
                <div class="text-center lg:text-right p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
                    <button class="btn btn-outline-secondary py-1 px-2">Profile</button>
                </div>
            </div>
        </div>
        @empty
            <h1 class="intro-y flex justify-center">No Users Found</h1>
        @endforelse


        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                {!! $users->onEachSide(1)->links() !!}
            </nav>
            <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
</div>
