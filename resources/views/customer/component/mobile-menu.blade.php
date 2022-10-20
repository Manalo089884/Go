<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Go Dental Logo" class="w-6" src="{{asset('icons/log.png')}}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
<<<<<<< HEAD
        <!-- -->
        <li>
            <a href="{{ Route('home') }}" class="menu">
                <div class="menu__icon"> <i class="fa-solid fa-house"></i> </div>
=======

        <li>
            <a href="/" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Home  </div>
            </a>
        </li>
        <li>
<<<<<<< HEAD
            <a href="{{Route('product')}}" class="menu">
                <div class="menu__icon"> <i class="fa-brands fa-product-hunt"></i> </div>
=======
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Product  </div>
            </a>
        </li>
        @if(!Auth::guard('customer')->check())
        <li>
            <a href="{{Route('CLogin.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-right-to-bracket"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Login  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('CRegister.index')}}" class="menu">
<<<<<<< HEAD
                <div class="menu__icon"> <i class="fa-solid fa-user-plus"></i> </div>
=======
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
                <div class="menu__title"> Sign Up  </div>
            </a>
        </li>
        @endif
<<<<<<< HEAD
=======

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    </ul>
</div>
