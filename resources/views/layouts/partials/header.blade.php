<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0}">
    <div class="header-body">

        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-logo">
                        <a href="{{route('anasayfa')}}">

                            <img alt="EZ" width="180"  src="/frontend/img/anasayfa/logo-1.png">
                        </a>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-nav">
                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav flex-column flex-lg-row" id="mainNav">
                                    <li class="dropdown ">
                                        <a href="{{route('anasayfa')}}" class="dropdown-item dropdown-toggle " >
                                            Home
                                        </a>
                                    </li>
                                    <li class="dropdown ">
                                        <a href="{{route('about-us')}}" class="dropdown-item dropdown-toggle " >
                                            About us
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-mega">
                                        <a class="dropdown-item dropdown-toggle " data-hash data-hash-offset="70" href="#products" >
                                            Products
                                        </a>

                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle " >
                                            Documents
                                        </a>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle " >
                                            Product development center
                                        </a>
                                    </li>

                                    <li class="dropdown ">
                                        <a href="" class="dropdown-item dropdown-toggle " >
                                            Contact us
                                        </a>
                                    </li>
                                    @guest
                                        <li class="dropdown dropdown-mega dropdown-mega-signin signin ml-lg-3" id="headerAccount">
                                            <a href="{{route('login')}}" class="dropdown-item pl-lg-4" >Sign In</a>

                                        </li>
                                    @else
                                        <li class="dropdown dropdown-mega dropdown-mega-signin signin logged ml-lg-3" id="headerAccount">
                                            <a  class="dropdown-item pl-lg-4" href="{{route('home')}}">My Account</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row align-items-center mb-4">
                                                                    <div class="col">
                                                                        <span class="top-sub-title text-color-light-3">SIGNED IN AS</span>
                                                                        <h2 class="font-weight-bold text-4 mb-0">{{ Auth::user()->name }} {{ Auth::user()->surname }}  </h2>
                                                                    </div>
                                                                    <div class="col text-right">
                                                                        <img src="/frontend/uploads/profile/{{Auth::user()->urun_resmi}}" class="img-fluid rounded-circle" alt="" width="48" />
                                                                    </div>
                                                                </div>

                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a href="{{route('user.profile')}}" class="nav-link border border-left-0 border-top-0 border-right-0">Your Profile</a>
                                                                    </li>

                                                                    <li class="nav-item">
                                                                        <a href="{{route('user.email')}}" class="nav-link">Change Email</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="{{route('user.password')}}" class="nav-link">Change Password</a>
                                                                    </li>

                                                                    <li class="nav-item">
                                                                        <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                @csrf
                                                                            </form>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                        <div style="margin-left: 50px;" class="header-button d-none d-sm-flex ">
                            <div class="mini-cart-icon">
                                <a href="{{'cart'}}"><img src="/frontend/img/icons/cart-bag.svg" class="img-fluid" alt="" /></a>
                                <span class="badge oem-button text-light  rounded-circle">{{Cart::count()}}</span>
                            </div>
                        </div>
                        <button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<span class="hamburguer">
											<span></span>
											<span></span>
											<span></span>
										</span>
                            <span class="close">
											<span></span>
											<span></span>
										</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
