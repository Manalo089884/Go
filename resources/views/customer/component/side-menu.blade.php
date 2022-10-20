<nav class="top-nav lg:hidden">
    <ul>
        <li>
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="{{ Route('home') }}" class="top-menu">
=======
            <a href="/" class="top-menu">
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            <a href="{{ Route('home') }}" class="top-menu">
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
                <div class="top-menu__title"> Home</div>
            </a>
        </li>
        <li>
            <a href="{{Route('product')}}" class="top-menu {{ (request()->is('product')) ? 'top-menu--active' : '' }}">
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
