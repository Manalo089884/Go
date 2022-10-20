<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Go Dental Logo" class="w-6" src="{{asset('icons/log.png')}}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
        <li>
            <a href="{{ route('dashboard.index') }}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-house p-1 fa-lg"></i></div>
=======
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"><i class="fa-solid fa-truck-ramp-box fa-lg p-1"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="box"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title">Product Attribute <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{Route('brand.index')}}" class="menu">
<<<<<<< HEAD
                        <div class="menu__icon"> <i class="fa-solid fa-b p-1 fa-lg"></i></div>
=======
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                        <div class="menu__title"> Brand </div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('category.index')}}" class="menu">
<<<<<<< HEAD
                        <div class="menu__icon"> <i class="fa-solid fa-c p-1 fa-lg"></i> </div>
                        <div class="menu__title"> Category </div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('supplier.index')}}" class="menu">
                        <div class="menu__icon"> <i class="fa-solid fa-boxes-packing p-1 fa-lg"></i> </div>
                        <div class="menu__title"> Supplier </div>
                    </a>
                </li>
=======
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Category </div>
                    </a>
                </li>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"><i class="fa-brands fa-product-hunt  fa-lg p-1"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="box"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title">Product <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{Route('product.index')}}" class="menu">
<<<<<<< HEAD
                        <div class="menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
=======
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                        <div class="menu__title"> Product </div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('inventory.index')}}" class="menu">
<<<<<<< HEAD
                        <div class="menu__icon"> <i class="fa-solid fa-warehouse fa-lg p-1"></i> </div>
=======
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                        <div class="menu__title"> Inventory </div>
                    </a>
                </li>
                    <li>
                    <a href="{{Route('product.create')}}" class="menu">
<<<<<<< HEAD
                        <div class="menu__icon"> <i class="fa-solid fa-plus mr-1 fa-lg p-1"></i> </div>
=======
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                        <div class="menu__title"> Add Product </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{Route('orders.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-cart-plus fa-lg p-1"></i></div>
=======
                <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Orders </div>
            </a>
        </li>
        <li>
            <a href="{{Route('chat.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-message fa-lg p-1"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Chat </div>
            </a>
        </li>
        <li>
            <a href="{{Route('post.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-signs-post fa-lg p-1"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Post </div>
            </a>
        </li>

        <li class="menu__devider my-6"></li>
        <li>
            <a href="{{Route('customer.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-user-doctor fa-lg p-1"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Customers </div>
            </a>
        </li>
        <li>
            <a href="{{Route('user.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"><i class="fa-solid fa-user fa-lg p-1"></i></div>
=======
                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Users </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-users-gear fa-lg p-1"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="edit"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Roles <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{Route('role.index')}}" class="menu">
<<<<<<< HEAD
                        <div class="menu__icon">  <i class="fa-solid fa-r fa-lg p-1"></i> </div>
=======
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                        <div class="menu__title"> Roles </div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('permission.index')}}" class="menu">
<<<<<<< HEAD
                        <div class="menu__icon"> <i class="fa-solid fa-p fa-lg p-1"></i> </div>
=======
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                        <div class="menu__title"> Permission </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="{{Route('report.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-chart-pie fa-lg p-1"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Reports </div>
            </a>
        </li>
        <li>
            <a href="{{Route('analytics.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon">  <i class="fa-solid fa-chart-simple fa-lg p-1"></i></div>
=======
                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Analytics </div>
            </a>
        </li>
    </ul>
</div>
