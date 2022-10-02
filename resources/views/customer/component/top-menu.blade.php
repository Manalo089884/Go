<div class="top-bar-boxed border-b border-white/[0.08] -mt-7 md:mt-0 -mx-3 sm:-mx-8 md:mx-0 px-4 sm:px-8 md:px-6 mb-14 md:mb-8">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="-intro-x hidden md:flex md:w-40">
            <img alt="Go Dental" class="w-6" src="{{asset('icons/log.png')}}">
            <span class="hidden xl:block text-white text-lg ml-3 "> Go Dental </span>
        </a>
        <!-- END: Logo -->
        <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item "><p>Go Dental</p></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
        </nav>
        <!-- BEGIN: Breadcrumb -->
        <nav class=" top-nav h-full mr-auto mt-2 w-1/2 sm:invisible lg:visible  ">
            <ul>
                <li>
                    <a href="/" class="top-menu {{ (request()->is('/')) ? 'top-menu--active' : '' }}">
                        <div class="top-menu__title"> Home</div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('productcatalog.index')}}" class="top-menu {{ (request()->is('productcatalog')) ? 'top-menu--active' : '' }}">
                        <div class="top-menu__title"> Product</div>
                    </a>
                </li>
                @if(!Auth::guard('customer')->check())
                <li>
                    <a href="{{Route('CLogin.index')}}" class="top-menu {{ (request()->is('CLogin')) ? 'top-menu--active' : '' }}">
                        <div class="top-menu__title"> Login</div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('CRegister.index')}}" class="top-menu {{ (request()->is('CRegister')) ? 'top-menu--active' : '' }}">
                        <div class="top-menu__title"> Sign Up</div>
                    </a>
                </li>
                @endif

            </ul>
        </nav>
        <!-- END: Breadcrumb -->

        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6 flex justify-end	">
            <div class="search hidden sm:block">
                <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
            </div>
            <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
            <div class="search-result mt-10">
                <div class="search-result__content">
                    <div class="search-result__content__title">Pages</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center">
                            <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                            <div class="ml-3">Users & Permissions</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Users</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                            </div>
                            <div class="ml-3">Al Pacino</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">alpacino@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                            </div>
                            <div class="ml-3">Arnold Schwarzenegger</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">arnoldschwarzenegger@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                            </div>
                            <div class="ml-3">Denzel Washington</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">denzelwashington@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                            </div>
                            <div class="ml-3">Al Pacino</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">alpacino@left4code.com</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Products</div>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                        </div>
                        <div class="ml-3">Oppo Find X2 Pro</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                        </div>
                        <div class="ml-3">Nike Tanjun</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                        </div>
                        <div class="ml-3">Apple MacBook Pro 13</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                        </div>
                        <div class="ml-3">Apple MacBook Pro 13</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Search -->

        @if(Auth::guard('customer')->check())
        <!-- BEGIN: Notifications -->
        <a href="{{ Route('cart.index') }}">
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="notification notification--light notification--bullet cursor-pointer" role="button" aria-expanded="false">
                    <i data-lucide="shopping-cart" class="notification__icon dark:text-slate-500"></i>
                </div>
            </div>
        </a>
        <!-- END: Notifications -->

        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Go Dental Profile" src="{{ asset('dist/images/profile-2.jpg') }}">
            </div>
            <div class="dropdown-menu w-56 nt0">
                <ul class="dropdown-content bg-primary/70 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{Auth::guard('customer')->user()->name}}  </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="{{ Route('customer.profile') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Manage Account </a>
                    </li>
                    <li>
                        <a href="{{ Route('customer.orders') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> My Orders </a>
                    </li>
                    <li>
                        <a href="{{ Route('customer.returns') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> My Returns </a>
                    </li>
                    <li>
                        <a href="{{ Route('customer.reviews') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> My Reviews </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="{{ Route('CLogout') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </li>
                </ul>
            </div>
        </div>
        @endif
        <!-- END: Account Menu -->
    </div>
</div>
