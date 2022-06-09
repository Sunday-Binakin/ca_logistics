<header class="site-header header mo-left header-style-1">
    <!-- top bar -->
    {{-- <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="dlab-topbar-left"> </div>
                <div class="dlab-topbar-right">
                    <ul class="social-bx list-inline float-end">
                        <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                        <li><a class="fab fa-twitter" href="https://twitter.com/" target="blank"></a></li>
                        <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                        <li><a class="fab fa-google-plus-g" href="https://mail.google.com/" target="blank"></a></li>
                        <li class="user-account"><a href="javascript:void(0);" class="fas fa-user"></a>
                            <ul class="sub-menu">
                                <li><a href="shop-cart.html">Cart</a></li>
                                <li><a href="shop-cart-empty.html">Cart Empty</a></li>
                                <li><a href="shop-wishlist.html">Wishlist</a></li>
                                <li><a href="shop-checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="shop-cart"><a href="javascript:void(0);"
                                class="fas fa-shopping-cart cart-btn"></a>
                            <div class="shop-menu card cart-list">
                                <div class="card-header">
                                    <h5 class="title mb-0">Products in Cart</h5>
                                </div>
                                <div class="card-body px-3">
                                    <div class="media-list">
                                        <div class="media cart-item">
                                            <img class="me-3" width="75" src="images/product/thumb/item1.jpg"
                                                alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1 title"><a href="#">Checked Short Dress</a></h5>
                                                <div class="price">
                                                    <span class="text-primary">$192</span><del>$232</del>
                                                </div>
                                            </div>
                                            <a href="#" class="close item-close">&times;</a>
                                        </div>
                                        <div class="media cart-item">
                                            <img class="me-3" width="75" src="images/product/thumb/item2.jpg"
                                                alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1 title"><a href="#">Checked Short Dress</a></h5>
                                                <div class="price">
                                                    <span class="text-primary">$192</span><del>$232</del>
                                                </div>
                                            </div>
                                            <a href="#" class="close item-close">&times;</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="price-total">
                                        <label class="mb-2">Total:</label>
                                        <div class="price mb-2 text-primary">$29.84</div>
                                    </div>
                                    <a href="#" class="site-button w-100">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg ">
        {{--  sticky-header header-curve main-bar-wraper navbar-expand-lg --}}
        <div class="main-bar clearfix " style="background-color: #161446">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header logo-white mostion"><a href="{{ route('home') }}"><img
                            src="/images/logo_new.png" style="height: 60%; width: 40%;" alt=""></a></div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dlab-quik-search bg-primary">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="nav navbar-nav nav-style">
                        <li><a href="{{ route('home') }}" style="color: white">Home</a></li>
                        <li> <a href="" style="color: white">About Us<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('about') }}" style="color: #151345">ABOUT CA LOGISTICS</a></li>
                                <li><a href="{{ route('team') }}" style="color: #151345">OUR TEAM</a></li>
                                <li><a href="{{ route('gallery') }}" style="color: #151345">GALLERY</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ route('services') }}" style="color: white">Services</a>
                        </li>

                        <li> <a href="{{ route('blog') }}" style="color: white">News and Stories</a>
                        </li>
                        {{-- <li> <a href="{{ route('service.request') }}" style="color: white">Service Request</a>
                        </li> --}}
                        <li> <a href="{{ route('contact') }}" style="color: white">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
