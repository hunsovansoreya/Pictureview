<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{ URL::asset('images/icon/logo.png')}}" alt="Picture View" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">


                    <li>
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <div class="header-button">
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="{{ URL::asset('images/icon/avatar-01.jpg')}}" alt=" {{ Auth::user()->name }}" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#"> {{ Auth::user()->name }}</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('images/icon/avatar-01.jpg')}}" alt=" {{ Auth::user()->name }}" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"> {{ Auth::user()->name }}</a>
                                                        </h5>
                                                        <span class="email">{{ Auth::user()->email }}<</span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        <i class="zmdi zmdi-power"></i>  {{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-table"></i>Add Image</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-table"></i>List Image</a>
                    </li>
                    <li>
                        <a href="/userroles">
                            <i class="far fa-check-square"></i>User Roles</a>
                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Account</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{ URL::asset('images/icon/logo.png')}}" alt="Picture View" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="{{'dashboard'== request()->path()?'active has-sub': ''}}">
                        <a class="js-arrow" href="/dashboard">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="{{'addimage'== request()->path()?'active has-sub': ''}}">
                        <a href="/addimage">
                            <i class="fas fa-copy"></i>Add Image</a>
                    </li>
                    <li class="{{'listimage'== request()->path()?'active has-sub': ''}}">
                        <a href="/listimage">
                            <i class="fas fa-table"></i>List Image</a>
                    </li>
                    <li class="{{'userroles'== request()->path()?'active has-sub': ''}}">
                        <a href="/userroles">
                            <i class="far fa-check-square"></i>User Roles</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        @yield('content')
    </div>
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="#">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ URL::asset('images/icon/avatar-01.jpg')}}" alt=" {{ Auth::user()->name }}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"> {{ Auth::user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ URL::asset('images/icon/avatar-01.jpg')}}" alt=" {{ Auth::user()->name }}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"> {{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">

                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>  {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
