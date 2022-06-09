<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description"
        content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
    <meta property="og:title" content="Auto Care - Car Services Template" />
    <meta property="og:description"
        content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
    <meta property="og:image" content="http://autocare.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>CA Logisitcs</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
 <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-1.css') }}">
    <link class="skin" rel="stylesheet" type="text/css"
        href="{{ asset('plugins/rangeslider/rangeslider.css') }}">
    @yield('css')

</head>

<body id="bg">
    <div id="loading-area" class="loader1"></div>
    <div class="page-wraper  @yield('pager-style')">
        <!-- Header -->
        @yield('header')

        <!-- Header END -->
        <!-- Content -->
        @yield('page-content')

        <!-- Content END-->
        <!-- Footer -->
        <footer class="site-footer">
            <!-- newsletter part -->
            <div class=" dlab-newsletter wow fadeIn" style="background-color: #161446" data-wow-duration="2s"
                data-wow-delay="0.2s">     
                <div class="container equal-wraper">
                    <form class="dzSubscribe" action="" method="">
                        <div class="row position-relative">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
                                    <div class="icon-lg text-white radius">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="icon-content"> <strong
                                            class="text-black text-uppercase font-18">Subscribe</strong>
                                        <h2 class="dlab-tilte text-uppercase">Our Newsletter</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="dzSubscribeMsg"></div>
                                <div class="input-group equal-col p-t40  p-b10">
                                    <input name="dzEmail" required placeholder="Email address" required="required"
                                        class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
                                <div class="equal-col p-t40 p-b10 skew-subscribe">
                                    <button name="submit" value="Submit" type="submit"
                                        class="site-button-secondry button-skew z-index1"> <span>Subscribe</span><i
                                            class="fas fa-angle-right"></i> </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- footer top part -->
            <div class="footer-top" style="background-color: #161446">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.2s">
                            <div class="widget widget_about">
                                <div class="logo-footer logo-white"><img src="/images/logo_new.jpg" style="border-radius: 7px;" alt=""></div>
                                <p><strong>CA Logistics</strong> is an Equipment Rental Company headquartered in Accra,
                                    Ghana - a subsidiary of the Technical and Logistics Group (T&L) of the Jospong Group
                                    of Companies (JGC).

                                    </p>
                                {{-- <ul class="dlab-social-icon dlab-border">
                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                            target="blank"></a></li>
                                    <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a>
                                    </li>
                                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"
                                            target="blank"></a></li>
                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"
                                            target="blank"></a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.4s">
                            <div class="widget recent-posts-entry">
                                <h4 class="m-b15 text-uppercase">Recent Post</h4>
                                <div class="dlab-separator-outer m-b10">
                                    <div class="dlab-separator bg-white style-skew"></div>
                                </div>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="gallery/7.jpg" alt="" width="200"
                                                height="143"> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title text-uppercase"><a href="blog-single.html">Fact
                                                        that you know</a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fas fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="gallery/2.jpg" alt="" width="200"
                                                height="160"> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title text-uppercase"><a
                                                        href="blog-single.html">Autocare industry</a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fas fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="gallery/3.jpg" alt="" width="200"
                                                height="160"> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title  text-uppercase"><a href="blog-single.html">Easy
                                                        things of </a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fas fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.6s">
                            <div class="widget widget_services">
                                <h4 class="m-b15 text-uppercase">Our services</h4>
                                <div class="dlab-separator-outer m-b10">
                                    <div class="dlab-separator bg-white style-skew"></div>
                                </div>
                                <ul>
                                    <li><a href="{{ route('equipment_rental_internal') }}">EQUPMENT RENTAL-INTERNAL</a></li>
                                    <li><a href="{{ route('truck_rental') }}">TRUCK RENTAL</a></li>
                                    <li><a href="{{ route('equipment_rental_external') }}">EQUPMENT RENTAL-EXTERNAL</a></li>

                                </ul>
                            </div>
                        </div>
                        {{-- a bit while --}}
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.8s">
                            <div class="widget widget_getintuch">
                                <h4 class="m-b15 text-uppercase">Contact us</h4>
                                <div class="dlab-separator-outer m-b10">
                                    <div class="dlab-separator bg-white style-skew"></div>
                                </div>
                                <ul>
                                    <li><i class="ti-location-pin"></i><strong>address</strong>P.O.Box
                                        M388,Ministries-Accra</li>

                                    <li><i
                                            class="ti-mobile"></i><strong>phone</strong>+233 50 130 4693
                                    </li>
                                    <li><i
                                        class="fa fa-phone"></i><strong>mobile</strong>+233 20 000 0831
                                </li>



                                    <li><i class="ti-email"></i><strong>email</strong>sales@calogistics.com

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bottom part -->

        </footer>
        <!-- Footer END-->
        <!-- scroll top button -->
        <button class="scroltop fas fa-arrow-up style2"></button>
    </div>
    <!-- JavaScript  files ========================================= -->
    <script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('plugins/wow/wow.js') }}"></script><!-- WOW JS -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('plugins/rangeslider/rangeslider.js') }}"></script><!-- Rangeslider -->
    <script src="{{ asset('plugins/lightgallery/js/lightgallery-all.js') }}"></script><!-- LIGHT GALLERY -->
    <script src="{{ asset('js/custom.min.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS -->
    {{-- <script src="{{ asset('plugins/switcher/js/switcher.js') }}"></script><!-- SWITCHER --> --}}
    <script src="{{ asset('js/swiper.js') }}"></script>
    {{-- swiper --}}


    @yield('scripts')

    <script>
        var appendNumber = 2;
        var prependNumber = 1;
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            speed: 2000,
            parallax: true,
            centeredSlides: true,
            spaceBetween: 0,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            virtual: {
                slides: (function() {
                    var slides = [];
                    for (var i = 0; i < 2; i += 1) {
                        slides.push('Slide ' + (i + 1));
                    }
                    return slides;
                }()),
            },
        });
    </script>
</body>

</html>
