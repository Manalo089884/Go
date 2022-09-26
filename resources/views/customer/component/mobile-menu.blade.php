<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Go Dental Logo" class="w-6" src="{{asset('icons/log.png')}}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
        
        <li>
            <a href="/" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Home  </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Product  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('about')}}:;" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> About  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('contact')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Contact  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('terms')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Term  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('CRegister.index')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Register  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('CLogin.index')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Login  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('faq')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> FAQ  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('privacy')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Privacy  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('cart.index')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Cart  </div>
            </a>
        </li>
        <li>
            <a href="{{Route('wishlist.index')}}" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Wishlist  </div>
            </a>
        </li>
    </ul>
</div>