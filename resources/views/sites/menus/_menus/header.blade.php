<!-- Start Header Area -->
<header class="header-section d-none d-xl-block" >
    <div class="header-wrapper">
        <div class="header-bottom header-bottom-color--black section-fluid sticky-header sticky-color--black" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Start Header Logo -->
                        <div class="header-logo">
                            <div class="logo">
                                <a href="{{url('./siteaccueils')}}"><img src="{{asset('glbal/jj.png')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- End Header Logo -->

                        <!-- Start Header Main Menu -->
                        <div class="main-menu menu-color--white menu-hover-color--pink">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{url('./siteaccueils')}}"  class="active fa fa-home ">&ensp;Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('./allmyproducts')}}"  class="fa fa-product-hunt">&ensp;Produits</a>
                                    </li>
                                    {{-- <li class="has-dropdown">
                                        <a class="active main-menu-link" href="index.html">Home <i
                                                class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="has-dropdown has-megaitem">
                                        <a href="product-details-default.html">Shop <i
                                                class="fa fa-angle-down"></i></a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <ul class="mega-menu-inner">
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Shop Layouts</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="shop-grid-sidebar-left.html">Grid Left
                                                                Sidebar</a></li>
                                                        <li><a href="shop-grid-sidebar-right.html">Grid Right
                                                                Sidebar</a></li>
                                                        <li><a href="shop-full-width.html">Full Width</a></li>
                                                        <li><a href="shop-list-sidebar-left.html">List Left
                                                                Sidebar</a></li>
                                                        <li><a href="shop-list-sidebar-right.html">List Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Other Pages</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="empty-cart.html">Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Product Types</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="product-details-default.html">Product
                                                                Default</a></li>
                                                        <li><a href="product-details-variable.html">Product
                                                                Variable</a></li>
                                                        <li><a href="product-details-affiliate.html">Product
                                                                Referral</a></li>
                                                        <li><a href="product-details-group.html">Product Group</a>
                                                        </li>
                                                        <li><a href="product-details-single-slide.html">Product
                                                                Slider</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Product Types</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="product-details-tab-left.html">Product Tab
                                                                Left</a></li>
                                                        <li><a href="product-details-tab-right.html">Product Tab
                                                                Right</a></li>
                                                        <li><a href="product-details-gallery-left.html">Product
                                                                Gallery Left</a></li>
                                                        <li><a href="product-details-gallery-right.html">Product
                                                                Gallery Right</a></li>
                                                        <li><a href="product-details-sticky-left.html">Product
                                                                Sticky Left</a></li>
                                                        <li><a href="product-details-sticky-right.html">Product
                                                                Sticky right</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="menu-banner">
                                                <a href="#" class="menu-banner-link">
                                                    <img class="menu-banner-img"
                                                        src="assets/images/banner/menu-banner.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li> --}}
                                    <li class="has-dropdown">
                                        <a href="blog-single-sidebar-left.html">Blog <i
                                                class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a>
                                            </li>
                                            <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a>
                                            </li>
                                            <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                            <li><a href="blog-list-sidebar-left.html">Blog List Sidebar Left</a>
                                            </li>
                                            <li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a>
                                            </li>
                                            <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a>
                                            </li>
                                            <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar
                                                    Right</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-us.html"><i class=" fas fa-headset"></i>&ensp;About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html"><i class="fa  fa-phone-volume"></i>&ensp;Contact Us</a>
                                    </li>
                                    @if (Route::has('login'))
                                        @auth
                                            <li class="has-dropdown">
                                                <a href="#" class="">{{Auth::user()->name}} {{Auth::user()->prenom}}&ensp;<i class="fa fa-angle-down"></i></a>
                                                <!-- Sub Menu -->
                                                <ul class="sub-menu ">
                                                    <li><a href="{{url('./leprofilclient')}}"  class="fa fa-user">&ensp;Profil</a></li>
                                                    <li><a href="#"  class="fa fa-question">&ensp;help</a></li>
                                                    <li>
                                                        <form action="{{route('logout')}}" method="POST">@csrf
                                                            <button type="submit" class=" ">
                                                                <i class="fa fa-power-off"></i>&ensp;logout
                                                            </button>
                                                        </form>

                                                    </li>
                                                    {{-- <li><a href="404.html">404 Page</a></li> --}}
                                                </ul>
                                            </li>

                                            @else
                                            <li>
                                                <a href="{{ route('login') }}"  class="fa fa-sign-in ">&ensp;login</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}"  class="fa fa-user-plus">&ensp;register</a>
                                            </li>
                                        @endauth
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        <!-- End Header Main Menu Start -->


                        <!-- Start Header Action Link -->
                        <ul class="header-action-link action-color--white action-hover-color--pink">
                            @if (Route::has('login'))
                                @auth
                                    <li>
                                        <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                            <i class="icon-heart"></i>
                                            <span class="item-count">{{$mesfavories}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                            <i class="icon-bag"></i>
                                            <span class="item-count">{{$monpanier->count()}}</span>
                                        </a>
                                    </li>
                            @else
                                    <li>
                                        <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                            <i class="icon-heart"></i>
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                            <i class="icon-bag"></i>
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                @endauth
                            @endif

                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Header Action Link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Start Header Area -->

<!-- Start Mobile Header -->
<div class="mobile-header  mobile-header-bg-color--black section-fluid d-lg-block d-xl-none" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <!-- Start Mobile Left Side -->
                <div class="mobile-header-left">
                    <ul class="mobile-menu-logo">
                        <li>
                            <a href="{{url('./siteaccueils')}}">
                                <div class="logo">
                                    <img src="{{asset('glbal/jj.png')}}" alt="">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Left Side -->

                <!-- Start Mobile Right Side -->
                <div class="mobile-right-side">
                    <ul class="header-action-link action-color--white action-hover-color--pink">
                        <li>
                            <a href="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">{{$mesfavories}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count">{{$monpanier->count()}}</span>
                                </a>
                            </li>
                        @else
                        <li>
                            <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                <i class="icon-heart"></i>
                                <span class="item-count">0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                <i class="icon-bag"></i>
                                <span class="item-count">0</span>
                            </a>
                        </li>
                        @endauth
                        @endif
                        <li>
                            <a href="#mobile-menu-offcanvas"
                                class="offcanvas-toggle offside-menu offside-menu-color--black">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Right Side -->
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Header -->
 <!--  Start Offcanvas Mobile Menu Section -->
 <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
        <!-- Start Mobile Menu  -->
        <div class="mobile-menu-bottom">
            <!-- Start Mobile Menu Nav -->
            <div class="offcanvas-menu">
                <ul>
                    <li>
                        <a href="{{url('./siteaccueils')}}"  class="active fa fa-home ">&ensp;Home</a>
                    </li>
                    <li>
                        <a href="{{url('./allmyproducts')}}"  class="fa fa-product-hunt">&ensp;Produits</a>
                    </li>
                    <li>
                        <a href="#"><span>Blogs</span></a>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="blog-full-width.html">Blog Full Width</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about-us.html"><i class=" fas fa-headset"></i>&ensp;About Us</a></li>
                    <li><a href="contact-us.html"><i class="fa  fa-phone-volume"></i>&ensp;Contact Us</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="#"><span style="color: #FF365D;">{{Auth::user()->name}} {{Auth::user()->prenom}}&ensp;</span></a>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="{{url('./leprofilclient')}}" class="fa fa-user">&ensp;Profil</a>
                                <a href="blog-full-width.html" class="fa fa-question">&ensp;help</a>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class=" " style="color:#fff; ">
                                        <i class="fa fa-power-off" ></i>&ensp;logout
                                    </button>
                                    {{-- <a href="blog-full-width.html">Blog Full Width</a> --}}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}"  class="fa fa-sign-in ">&ensp;login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}"  class="fa fa-user-plus">&ensp;register</a>
                        </li>
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>
            </div>

            <address class="address">
                <span>Address: Your address goes here.</span>
                <span>Call Us: 0123456789, 0123456789</span>
                <span>Email: demo@example.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="user-link">
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->

    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
</div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

<!-- Start Offcanvas Mobile Menu Section -->
<div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <!-- Start Mobile contact Info -->
    <div class="mobile-contact-info">
        <div class="logo">
            <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>
        </div>

        <address class="address">
            <span>Address: Your address goes here.</span>
            <span>Call Us: 0123456789, 0123456789</span>
            <span>Email: demo@example.com</span>
        </address>

        <ul class="social-link">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>

        <ul class="user-link">
            <li><a href="wishlist.html">Wishlist</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="checkout.html">Checkout</a></li>
        </ul>
    </div>
    <!-- End Mobile contact Info -->
</div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->
