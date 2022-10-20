<div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
    <div class="intro-y box mt-5">
        <div class="relative flex items-center p-5">
            <div class="w-12 h-12 image-fit">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                @if(!empty(Auth::guard('web')->user()->photo))
                    <img src="{{ url('storage/photos/'.Auth::guard('web')->user()->photo) }}" data-action="zoom" class="rounded-full"  alt="Missing Image">
                @else
                    <img alt="Missing Image" class="rounded-full" src="{{asset('dist/images/undraw_pic.svg')}}">
                @endif
<<<<<<< HEAD
=======
                <img class="rounded-full" src="{{ asset('dist/images/profile-15.jpg') }}">
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            </div>
            <div class="ml-4 mr-auto">
                <div class="font-medium text-base">{{Auth::guard('web')->user()->name}}</div>
                <div class="text-slate-500">Admin</div>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <a class="flex items-center {{ (request()->is('admin/profile')) ? 'text-primary font-medium' : '' }}  " href="{{ Route('profile.index') }}"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
            <a class="flex items-center mt-5" href="{{ Route('AdminChangePass') }}"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Edit Information </a>
            <a class="flex items-center mt-5" href="{{ Route('AdminChangePass') }}"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
        </div>
    </div>
</div>
