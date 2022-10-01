<nav class="top-nav">
    <ul>
        <li>
            <a href="/" class="top-menu">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> Home</div>
            </a>
        </li>
        <li>
            <a href="{{Route('productcatalog.index')}}" class="top-menu {{ (request()->is('product')) ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> Product</div>
            </a>
        </li>
        <li>
            <a href="{{Route('about')}}" class="top-menu {{ (request()->is('about')) ? 'top-menu--active' : '' }}" >
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> About</div>
            </a>
        </li>
        <li>
            <a href="{{Route('contact')}}" class="top-menu {{ (request()->is('contact')) ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> Contact</div>
            </a>
        </li>
        <li>
            <a href="{{Route('terms')}}" class="top-menu {{ (request()->is('terms')) ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> Terms</div>
            </a>
        </li>
        @guest
        <li>
            <a href="{{Route('CRegister.index')}}" class="top-menu {{ (request()->is('CRegister')) ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> Register</div>
            </a>
        </li>
        <li>
            <a href="{{Route('CLogin.index')}}" class="top-menu {{ (request()->is('CLogin')) ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> Login</div>
            </a>
        </li>
        @endguest

        <li>
            <a href="{{Route('faq')}}" class="top-menu {{ (request()->is('faq')) ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> FAQ</div>
            </a>
        </li>
        <li>
            <a href="{{Route('privacy')}}" class="top-menu {{ (request()->is('privacy')) ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="top-menu__title"> Privacy</div>
            </a>
        </li>
    </ul>
</nav>
