<header class="site-header header header-creative-two mo-left">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container-fluid">
                <!-- website logo -->
                <div class="logo-header logo-ac mostion">
                    <a href="{{ url('/') }}">
                        <img src="images/logo_new.png" height="100" width="100" alt="">
                    </a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav" >
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="search-btn site-button-link"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>

                <!-- Quik search -->
                <div class="dlab-quik-search" >
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span id="quik-search-remove"><i class="ti-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end navbar" id="navbarNavDropdown" style="background-color: #f99b1d">
                    <ul class="nav navbar-nav nav-style nav-black-text">
                        <li> <a href="{{ route('blog') }}">News and Stories</a>
                        </li>
                        <li> <a href="">About Us<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                
                                <li><a href="{{ route('about') }}">About JAPP</a></li>
                                <li><a href="{{ route('team') }}">Our Team</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ route('services') }}">Services</a>
                        </li>
                        <li> <a href="{{ route('blog') }}">News and Stories</a>
                        </li>
                        
                        <li> <a href="{{ route('service.request') }}">Service Request</a>
                        </li>
                        <li> <a href="{{ route('contact') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
