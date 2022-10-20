<div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
    <div class="intro-y box mt-5">
        <div class="relative flex items-center p-5">
<<<<<<< HEAD
          <div class="w-12 h-12 image-fit">
            <img alt="Profile Picture" class="rounded-full" data-action="zoom" src="{{asset('dist/images/undraw_pic.svg')}}">
        </div>
            <div class="ml-4 mr-auto">
                <div class="font-medium text-base">Hi! {{Auth::guard('customer')->user()->name}}</div>
                @if(empty(Auth::guard('customer')->user()->email_verified_at))
                    <div class="text-danger">  Unverified User   </div>
                @else
                    <div class="text-success">  Verified User   </div>
                @endif
            </div>
        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <a class="flex items-center {{ (request()->is('user/profile')) ? 'text-primary font-medium' : '' }} " href="{{ Route('customer.profile') }}" >
                <i class="fa-regular fa-user mr-2 w-4 h-4"></i> Personal Information
            </a>
            <a class="flex items-center mt-5 {{ (request()->is('user/address')) ? 'text-primary font-medium' : ''  }} {{ (request()->is('user/address/create')) ? 'text-primary font-medium' : ''  }} {{ (request()->is('user/address/edit')) ? 'text-primary font-medium' : ''  }}"  href="{{ Route('customer.address') }}">
                <i class="fa-regular fa-address-book w-4 h-4 mr-2"></i> Address Book
            </a>
            <a class="flex items-center mt-5 {{ (request()->is('user/changepassword')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.change.pass') }}">
                <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password
            </a>

        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <a class="flex items-center {{ (request()->is('customer/orders')) ? 'text-primary font-medium' : '' }} " href="{{ Route('customer.orders') }}">
                <i data-lucide="activity" class="w-4 h-4 mr-2"></i> My Orders
            </a>
            <a class="flex items-center mt-5 {{ (request()->is('customer/returns')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.returns') }}">
                 <i data-lucide="box" class="w-4 h-4 mr-2"></i> My Returns
            </a>
            <a class="flex items-center mt-5 {{ (request()->is('customer/reviews')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.reviews') }}">
                <i data-lucide="box" class="w-4 h-4 mr-2"></i> My Reviews
            </a>
            <a class="flex items-center mt-5 {{ (request()->is('customer/cancellations')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.cancellations') }}">
                <i data-lucide="box" class="w-4 h-4 mr-2"></i> My Cancellations
            </a>
=======
            <div class="ml-4 mr-auto">
                <div class="font-medium text-base">Hi! {{Auth::guard('customer')->user()->name}}</div>
            </div>
        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <a class="flex items-center {{ (request()->is('user/profile')) ? 'text-primary font-medium' : '' }} " href="{{ Route('customer.profile') }}" > <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
            <a class="flex items-center mt-5 {{ (request()->is('user/address')) ? 'text-primary font-medium' : ''  }} {{ (request()->is('user/address/create')) ? 'text-primary font-medium' : ''  }} {{ (request()->is('user/address/edit')) ? 'text-primary font-medium' : ''  }}"  href="{{ Route('customer.address') }}"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Address Book </a>
            <a class="flex items-center mt-5 {{ (request()->is('user/changepassword')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.change.pass') }}"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>

        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <a class="flex items-center {{ (request()->is('customer/orders')) ? 'text-primary font-medium' : '' }} " href="{{ Route('customer.orders') }}"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> My Orders </a>
            <a class="flex items-center mt-5 {{ (request()->is('customer/returns')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.returns') }}"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> My Returns </a>
            <a class="flex items-center mt-5 {{ (request()->is('customer/reviews')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.reviews') }}"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> My Reviews </a>
            <a class="flex items-center mt-5 {{ (request()->is('customer/cancellations')) ? 'text-primary font-medium' : '' }}" href="{{ Route('customer.cancellations') }}"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> My Cancellations </a>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        </div>
    </div>
</div>
