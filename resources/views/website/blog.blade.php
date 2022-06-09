@extends('website.master')
@section('css')
@endsection
@section('header')
    @include('website.other-pages-header')
@endsection
@section('page-content')
    {{-- <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg); ">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">News And Stories</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="">Home</a></li>
                    <li>News And Stories</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-9 col-md-7 col-sm-6">
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                        src="images/blog/grid/pic1.jpg" alt=""></a> </div>

                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">The Rank Of Autocare In Consumer's Market.</a>
                                    </h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a>
                                        </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                         <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                        src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">How Will Autocare Be In The Future.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a>
                                        </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                        src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">The Hidden Agenda Of Autocare.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a>
                                        </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                        src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">Ten Gigantic Influences Of Autocare.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a>
                                        </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                        src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">Seven Reasons Why You Should Invest In
                                            Autocare.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a>
                                        </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                        src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">The Rank Of Autocare In Consumer's Market.</a>
                                    </h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a
                                                href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img
                                        src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">Important Things To Remember About Autocare.</a>
                                    </h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a
                                                href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"><a href="#"><img
                                        src="images/blog/grid/pic1.jpg" alt=""></a></div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">Benefits Of Autocare That May Change Your
                                            Perspective.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong>
                                            <span> 2022</span>
                                        </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a
                                                href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark"
                                        class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a
                                            href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination start -->
                        <div class="pagination-bx clearfix m-b30">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a> </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination END -->
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">News & Stories</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blog') }}">News & Stories</a></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-9 col-md-7 col-sm-6">
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">The Rank Of Autocare In Consumer's Market.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a> </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>



                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">Seven Reasons Why You Should Invest In Autocare.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a> </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">The Rank Of Autocare In Consumer's Market.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a> </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">Important Things To Remember About Autocare.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a> </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dlab-post-media dlab-img-effect zoom-slow"><a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a></div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-title ">
                                    <h3 class="post-title"><a href="#">Benefits Of Autocare That May Change Your Perspective.</a></h3>
                                </div>
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                        <li class="post-author"><i class="fas fa-user"></i>By <a href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fas fa-comments"></i> <a href="#">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                                <div class="dlab-post-readmore"> <a href="{{ route('read_more') }}" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a> </div>
                                <div class="dlab-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination start -->
                        <div class="pagination-bx clearfix m-b30">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a> </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <aside  class="side-bar">
                            <div class="widget">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fas fa-search"></i></button>
                                            </span> </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
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
                                        <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
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
                                        <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
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
                            <div class="widget widget_categories">
                                <h4 class="widget-title">Categories List</h4>
                                <ul>
                                    <li><a href="#">aciform</a> (1)</li>
                                    <li><a href="#">championship</a> (1) </li>
                                    <li><a href="#">chastening</a> (1) </li>
                                    <li><a href="#">clerkship</a> (1) </li>
                                    <li><a href="#">disinclination</a> (1) </li>
                                    <li><a href="#">disinfection</a> (1) </li>
                                    <li><a href="#">dispatch</a> (1) </li>
                                    <li><a href="#">echappee</a> (1) </li>
                                    <li><a href="#">Edge Case</a> (6) </li>
                                    <li><a href="#">enphagy</a> (1) </li>
                                </ul>
                            </div>
                            <div class="widget widget_gallery">
                                <h5 class="widget-title">Our services</h5>
                                <ul>
                                    <li><a href="#">
										<div class="dlab-post-thum dlab-img-overlay1 dlab-img-effect zoom-slow">
										<img src="images/gallery/pic2.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="#">
										<div class="dlab-post-thum dlab-img-overlay1 dlab-img-effect zoom-slow">
										<img src="images/gallery/pic1.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="dlab-post-thum dlab-img-overlay1 dlab-img-effect zoom-slow">
										<img src="images/gallery/pic5.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="dlab-post-thum dlab-img-overlay1 dlab-img-effect zoom-slow">
										<img src="images/gallery/pic7.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="dlab-post-thum dlab-img-overlay1 dlab-img-effect zoom-slow">
										<img src="images/gallery/pic8.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="dlab-post-thum dlab-img-overlay1 dlab-img-effect zoom-slow">
										<img src="images/gallery/pic9.jpg" alt=""></div></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_tag_cloud">
                                <h4 class="tagcloud">Tags</h4>
                                <div class="tagcloud"> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
