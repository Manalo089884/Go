<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
        <img alt="Go Dental" class="w-6" src="{{asset('icons/log.png')}}">
<<<<<<< HEAD
<<<<<<< HEAD
        <span class="hidden xl:block text-white text-lg ml-3"> Go Dental </span>
=======
        <span class="hidden xl:block text-white text-lg ml-3"> Go Dental </span> 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        <span class="hidden xl:block text-white text-lg ml-3"> Go Dental </span>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <!--Dashboard-->
        <li>
            <a href="{{ route('dashboard.index') }}" class="side-menu {{ (request()->is('admin/dashboard')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-house p-1 fa-lg"></i> </div>
=======
                <div class="side-menu__icon"> <i  data-lucide="home"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-house p-1 fa-lg"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <!--Product Attribute-->
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->is('admin/brand')) || (request()->is('admin/category'))  ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-truck-ramp-box fa-lg p-1"></i> </div>
=======
                <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-truck-ramp-box fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                    <div class="side-menu__title">
                        Product Attribute
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('brand.index') }}" class="side-menu">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="side-menu__icon"> <i class="fa-solid fa-b p-1 fa-lg"></i> </div>
=======
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <div class="side-menu__icon"> <i class="fa-solid fa-b p-1 fa-lg"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                        <div class="side-menu__title"> Brand </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" class="side-menu">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="side-menu__icon"> <i class="fa-solid fa-c p-1 fa-lg"></i> </div>
                        <div class="side-menu__title"> Category </div>
                    </a>
                    <li>
                        <a href="{{ route('supplier.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i class="fa-solid fa-boxes-packing p-1 fa-lg"></i> </div>
                            <div class="side-menu__title"> Supplier </div>
                        </a>
                    </li>
=======
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Category </div>
                    </a>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <div class="side-menu__icon"> <i class="fa-solid fa-c p-1 fa-lg"></i> </div>
                        <div class="side-menu__title"> Category </div>
                    </a>
                    <li>
                        <a href="{{ route('supplier.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i class="fa-solid fa-boxes-packing p-1 fa-lg"></i> </div>
                            <div class="side-menu__title"> Supplier </div>
                        </a>
                    </li>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                </li>
            </ul>
        </li>
        <!--Product-->
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->is('admin/product')) || (request()->is('admin/inventory')) || (request()->is('admin/addproduct')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"><i class="fa-brands fa-product-hunt  fa-lg p-1"></i></div>
=======
                <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"><i class="fa-brands fa-product-hunt  fa-lg p-1"></i></div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                    <div class="side-menu__title">
                        Product
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{Route('product.index')}}" class="side-menu">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="side-menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
=======
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <div class="side-menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                        <div class="side-menu__title"> Product </div>
                    </a>
                </li>
                    <li>
                    <a href="{{Route('inventory.index')}}" class="side-menu">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="side-menu__icon"> <i class="fa-solid fa-warehouse fa-lg p-1"></i> </div>
=======
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <div class="side-menu__icon"> <i class="fa-solid fa-warehouse fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                        <div class="side-menu__title"> Inventory </div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('product.create')}}" class="side-menu">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="side-menu__icon"> <i class="fa-solid fa-plus mr-1 fa-lg p-1"></i> </div>
=======
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <div class="side-menu__icon"> <i class="fa-solid fa-plus mr-1 fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                        <div class="side-menu__title"> Add Product </div>
                    </a>
                </li>
            </ul>
        </li>
        <!--Orders-->
        <li>
            <a href="{{Route('orders.index')}}" class="side-menu {{ (request()->is('admin/orders')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-cart-plus fa-lg p-1"></i> </div>
=======
                <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-cart-plus fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="side-menu__title"> Orders </div>
            </a>
        </li>
        <!--Chat-->
        <li>
            <a href="{{Route('chat.index')}}" class="side-menu {{ (request()->is('admin/chat')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-message fa-lg p-1"></i></div>
=======
                <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-message fa-lg p-1"></i></div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="side-menu__title"> Chat </div>
            </a>
        </li>
        <!--Post-->
        <li>
            <a href="{{Route('post.index')}}" class="side-menu {{ (request()->is('admin/post')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-signs-post fa-lg p-1"></i> </div>
=======
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-signs-post fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="side-menu__title"> Post </div>
            </a>
        </li>
        <!--Divider-->
        <li class="side-nav__devider my-6"></li>
        <!--Customers-->
        <li>
            <a href="{{Route('customer.index')}}" class="side-menu {{ (request()->is('admin/customer')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-user-doctor fa-lg p-1"></i> </div>
=======
                <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-user-doctor fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="side-menu__title"> Customers </div>
            </a>
        </li>
        <!--Users-->
        <li>
            <a href="{{Route('user.index')}}" class="side-menu {{ (request()->is('admin/user')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-user fa-lg p-1"></i></div>
                <div class="side-menu__title"> Users </div>
            </a>
=======
                <div class="side-menu__icon"> <i data-lucide="contact"></i> </div>
                <div class="side-menu__title"> Users </div>
            </a>    
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-user fa-lg p-1"></i></div>
                <div class="side-menu__title"> Users </div>
            </a>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        </li>
        <!--Roles-->
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->is('admin/role')) || (request()->is('admin/permission')) ?  'side-menu--active ' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-users-gear fa-lg p-1"></i> </div>
                <div class="side-menu__title">
                    Roles
=======
                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                <div class="side-menu__title">
                    Roles 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-users-gear fa-lg p-1"></i> </div>
                <div class="side-menu__title">
                    Roles
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{Route('role.index')}}" class="side-menu">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="side-menu__icon"> <i class="fa-solid fa-r fa-lg p-1"></i> </div>
=======
                        <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <div class="side-menu__icon"> <i class="fa-solid fa-r fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                        <div class="side-menu__title">Role</div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('permission.index')}}" class="side-menu">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="side-menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
=======
                        <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                        <div class="side-menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                        <div class="side-menu__title">Permission</div>
                    </a>
                </li>
            </ul>
        </li>
        <!--Divider-->
        <li class="side-nav__devider my-6"></li>
        <!--Reports-->
        <li>
            <a href="{{Route('report.index')}}" class="side-menu {{ (request()->is('admin/report')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="side-menu__icon"> <i class="fa-solid fa-chart-pie fa-lg p-1"></i> </div>
                <div class="side-menu__title"> Reports </div>
            </a>
        </li>
        <!--Analytics-->
        <li>
            <a href="{{Route('analytics.index')}}" class="side-menu {{ (request()->is('admin/analytics')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-chart-simple fa-lg p-1"></i> </div>
=======
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-chart-pie fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="side-menu__title"> Reports </div>
            </a>
        </li>
        <!--Analytics-->
        <li>
            <a href="{{Route('analytics.index')}}" class="side-menu {{ (request()->is('admin/analytics')) ? 'side-menu--active' : '' }}">
<<<<<<< HEAD
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
                <div class="side-menu__icon"> <i class="fa-solid fa-chart-simple fa-lg p-1"></i> </div>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="side-menu__title"> Analytics </div>
            </a>
        </li>
    </ul>
<<<<<<< HEAD
<<<<<<< HEAD
</nav>
=======
</nav>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
</nav>
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
