<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
        <img alt="Go Dental" class="w-6" src="{{asset('icons/log.png')}}">
        <span class="hidden xl:block text-white text-lg ml-3"> Go Dental </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <!--Dashboard-->
        <li>
            <a href="{{ route('dashboard.index') }}" class="side-menu {{ (request()->is('admin/dashboard')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-house p-1 fa-lg"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <!--Product Attribute-->
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->is('admin/brand')) || (request()->is('admin/category'))  ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-truck-ramp-box fa-lg p-1"></i> </div>
                    <div class="side-menu__title">
                        Product Attribute
                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('brand.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-b p-1 fa-lg"></i> </div>
                        <div class="side-menu__title"> Brand </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-c p-1 fa-lg"></i> </div>
                        <div class="side-menu__title"> Category </div>
                    </a>
                    <li>
                        <a href="{{ route('supplier.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i class="fa-solid fa-boxes-packing p-1 fa-lg"></i> </div>
                            <div class="side-menu__title"> Supplier </div>
                        </a>
                    </li>
                </li>
            </ul>
        </li>
        <!--Product-->
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->is('admin/product')) || (request()->is('admin/inventory')) || (request()->is('admin/addproduct')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"><i class="fa-brands fa-product-hunt  fa-lg p-1"></i></div>
                    <div class="side-menu__title">
                        Product
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{Route('product.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
                        <div class="side-menu__title"> Product </div>
                    </a>
                </li>
                    <li>
                    <a href="{{Route('inventory.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-warehouse fa-lg p-1"></i> </div>
                        <div class="side-menu__title"> Inventory </div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('product.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-plus mr-1 fa-lg p-1"></i> </div>
                        <div class="side-menu__title"> Add Product </div>
                    </a>
                </li>
            </ul>
        </li>
        <!--Orders-->
        <li>
            <a href="{{Route('orders.index')}}" class="side-menu {{ (request()->is('admin/orders')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-cart-plus fa-lg p-1"></i> </div>
                <div class="side-menu__title"> Orders </div>
            </a>
        </li>
        <!--Chat-->
        <li>
            <a href="{{Route('chat.index')}}" class="side-menu {{ (request()->is('admin/chat')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-message fa-lg p-1"></i></div>
                <div class="side-menu__title"> Chat </div>
            </a>
        </li>
        <!--Post-->
        <li>
            <a href="{{Route('post.index')}}" class="side-menu {{ (request()->is('admin/post')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-signs-post fa-lg p-1"></i> </div>
                <div class="side-menu__title"> Post </div>
            </a>
        </li>
        <!--Divider-->
        <li class="side-nav__devider my-6"></li>
        <!--Customers-->
        <li>
            <a href="{{Route('customer.index')}}" class="side-menu {{ (request()->is('admin/customer')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-user-doctor fa-lg p-1"></i> </div>
                <div class="side-menu__title"> Customers </div>
            </a>
        </li>
        <!--Users-->
        <li>
            <a href="{{Route('user.index')}}" class="side-menu {{ (request()->is('admin/user')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-user fa-lg p-1"></i></div>
                <div class="side-menu__title"> Users </div>
            </a>
        </li>
        <!--Roles-->
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->is('admin/role')) || (request()->is('admin/permission')) ?  'side-menu--active ' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-users-gear fa-lg p-1"></i> </div>
                <div class="side-menu__title">
                    Roles
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{Route('role.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-r fa-lg p-1"></i> </div>
                        <div class="side-menu__title">Role</div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('permission.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
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
                <div class="side-menu__icon"> <i class="fa-solid fa-chart-pie fa-lg p-1"></i> </div>
                <div class="side-menu__title"> Reports </div>
            </a>
        </li>
        <!--Analytics-->
        <li>
            <a href="{{Route('analytics.index')}}" class="side-menu {{ (request()->is('admin/analytics')) ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa-solid fa-chart-simple fa-lg p-1"></i> </div>
                <div class="side-menu__title"> Analytics </div>
            </a>
        </li>
    </ul>
</nav>
