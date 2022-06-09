@extends('website.master')
@section('css')
@endsection
@section('header')
    @include('website.other-pages-header')
@endsection
@section('page-content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Meet Our Team</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Meet Our Team</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content bg-white">
            <!-- Team member -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-content text-center ">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="dlab-box m-b30">
                                    <div class="dlab-media"> <a href="javascript:;"> <img width="358" height="460"
                                                alt="" src="images/our-team/pic4.jpg"> </a>
                                        <div class="dlab-info-has skew-has  bg-primary">
                                            <ul class="dlab-social-icon dez-border">
                                                <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                                <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                                                <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a10">
                                        <h4 class="dlab-title text-uppercase m-b5">Nashid Marti</h4>
                                        <span class="dlab-member-position">Director</span>
                                    </div>
                                </div>
                            </div>
                            




                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Team member END -->
    </div>
    <!-- contact area  END -->
    </div>
@endsection
@section('scripts')
@endsection
