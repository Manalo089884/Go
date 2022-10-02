<nav class="top-nav lg:hidden">
    <ul>
        <li>
            <a href="/" class="top-menu">
                <div class="top-menu__title"> Home</div>
            </a>
        </li>
        <li>
            <a href="{{Route('productcatalog.index')}}" class="top-menu {{ (request()->is('product')) ? 'top-menu--active' : '' }}">
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
                <div class="top-menu__title"> Register</div>
            </a>
        </li>
        @endif

    </ul>
</nav>
