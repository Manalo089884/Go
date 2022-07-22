<nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
                    <img alt="Go Dental" class="w-6" src="{{asset('dist/images/logo.svg')}}">
                    <span class="hidden xl:block text-white text-lg ml-3"> Go Dental </span> 
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <!--Dashboard-->
                    <li>
                        <a href="{{ route('dashboard') }}" class="side-menu {{ (request()->is('dashboard')) ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i  data-lucide="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <!--Product Attribute-->
                    <li>
                        <a href="javascript:;" class="side-menu {{ (request()->is('brand')) || (request()->is('category'))  ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                                <div class="side-menu__title">
                                    Product Attribute
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Brand </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Category </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Product-->
                    <li>
                        <a href="javascript:;" class="side-menu {{ (request()->is('product')) || (request()->is('inventory')) || (request()->is('addproduct')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                                <div class="side-menu__title">
                                    Product
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Product </div>
                                </a>
                            </li>
                             <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Inventory </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Add Product </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Orders-->
                    <li>
                        <a href="" class="side-menu {{ (request()->is('orders')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="side-menu__title"> Orders </div>
                        </a>
                    </li>
                    <!--Chat-->
                    <li>
                        <a href="" class="side-menu {{ (request()->is('chat')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                            <div class="side-menu__title"> Chat </div>
                        </a>
                    </li>
                    <!--Post-->
                    <li>
                        <a href="" class="side-menu {{ (request()->is('post')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Post </div>
                        </a>
                    </li>
                   <!--Divider-->
                    <li class="side-nav__devider my-6"></li>
                    <!--Customers-->
                    <li>
                        <a href="" class="side-menu {{ (request()->is('customer')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                            <div class="side-menu__title"> Customers </div>
                        </a>
                    </li>
                    <!--Users-->
                    <li>
                        <a href="" class="side-menu {{ (request()->is('user')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="contact"></i> </div>
                            <div class="side-menu__title"> Users </div>
                        </a>
                    </li>
                    <!--Roles-->
                    <li>
                        <a href="javascript:;" class="side-menu {{ (request()->is('role')) || (request()->is('permission')) ?  'side-menu--active ' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title">
                                Roles 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Role</div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                    <div class="side-menu__title">Permission</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Divider-->
                    <li class="side-nav__devider my-6"></li>
                    <!--Reports-->
                    <li>
                        <a href="" class="side-menu {{ (request()->is('reports')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Reports </div>
                        </a>
                    </li> 
                    <!--Analytics-->
                    <li>
                        <a href="" class="side-menu {{ (request()->is('analytics')) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Analytics </div>
                        </a>
                    </li>
                </ul>
            </nav>