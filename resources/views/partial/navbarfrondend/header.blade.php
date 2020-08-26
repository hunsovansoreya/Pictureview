<!-- Header Section -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-md-3 order-2 order-sm-1">
                <div class="header__social">

                </div>
            </div>
            <div class="col-sm-4 col-md-6 order-1 order-md-2 text-center">
                <a href="./index.html" class="site-logo">
                    <img src="img/logo.png" alt="" />
                </a>
            </div>
            <div class="col-sm-4 col-md-3 order-3 order-sm-3">
					<div class="header__switches">
                        <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
                       <a href="https://web.facebook.com/%E1%9E%8F%E1%9F%92%E1%9E%9A%E1%9E%B9%E1%9E%98%E1%9E%87%E1%9E%B6%E1%9E%82%E1%9F%86%E1%9E%93%E1%9E%B7%E1%9E%8F-102741504833627/"><i class="fa fa-facebook"></i></a>
                       <a href="#"><i class="fa fa-instagram"></i></a>
					</div>
                </div>

        </div>
        <nav class="main__menu">
            <ul class="nav__menu">
                <li class="{{'/'== request()->path()?'menu--active': ''}}"><a href="/">Home</a></li>
                <li class="{{'/about'== request()->path()?'menu--active': ''}}"><a href="/about">About</a></li>
                <li class="{{'/gallery'== request()->path()?'menu--active': ''}}"><a href="/gallery">Gallery</a></li>
                <li class="{{'/contact'== request()->path()?'menu--active': ''}}"><a href="/contact">Contact</a></li>
                @guest
                <li class="{{'/gallery'== request()->path()?'menu--active': ''}}"><a href="{{ route('login') }}">Log in</a></li>
                <li class="{{'/contact'== request()->path()?'menu--active': ''}}"><a href="{{ route('register') }}">Regitser</a></li>
                @else
                <li class="{{'/contact'== request()->path()?'menu--active': ''}}">
                    <a
                        href="{{ route('logout') }} "
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    >
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>;
                    @endguest
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header Section end -->

