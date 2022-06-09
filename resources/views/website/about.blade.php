@extends('website.master')
@section('css')
@endsection
@section('header')
@include('website.other-pages-header')
@endsection
@section('page-content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">About us </h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="content">
        <!-- About Company -->
        <div class="section-full bg-white content-inner" style="background-image: url(images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-7">
                            <h2 class="text-uppercase"> About Company</h2>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-secondry style-skew"></div>
                            </div>
                            <div class="clear"></div>
                            <p><strong>
                                    {{-- CA Logistics is an Equipment Rental Company headquartered in Accra, Ghana - a
                                        subsidiary of the Technical and Logistics Group (T&L) of the Jospong Group of
                                        Companies (JGC). The company was formed four years ago but started operations two
                                        years later. --}}
                                    {{-- { !!$about->summary!!} --}}
                                    {!! $about->summary !!}
                                </strong></p>
                            <p class="m-b50">
                               {!! $about->about !!}
                            </p>


                            {{-- <p>It primarily offers earthmoving equipment, garbage compaction trucks, tipper trucks and
                                    low beds & material handling equipment. Earthmoving equipment include excavators, wheel
                                    loaders, & track bulldozers and backhoes whereas garbage compaction trucks include
                                    compactors, skips and roll-on roll-off trucks. It owns the largest and most
                                    comprehensive rental fleet in the JGC and stands tall with major competitors. As at
                                    Y2022, it has a fleet of approximately 200 machinery, which are made up of 100
                                    heavy-duty equipment and 100 waste compaction trucks traded.</p> --}}




                        </div>
                        <div class="col-lg-5">
                            <div class="dlab-thu m"><img src="images/worker.jpg" alt="" height="200px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Counter -->
        <div class="section-full bg-gray bg-img-fix content-inner overlay-black-middle" style="background-image:url(images/background/bg12.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="m-b30 text-white text-center">
                            <div class="icon-bx-lg radius  border-2 m-b20">
                                <div class="icon-cell text-white"> <i class="ti-home"></i> </div>
                            </div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">1035</div>
                            <div class="aon-separator" style=" background-color: #151345"></div>
                            <p>Completed Project</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="m-b30 text-white text-center">
                            <div class="icon-bx-lg radius  border-2 m-b20">
                                <div class="icon-cell text-white"> <i class="ti-user"></i> </div>
                            </div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">1124</div>
                            <div class="aon-separator" style=" background-color: #151345"></div>
                            <p>Active Experts</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class=" m-b30 text-white text-center">
                            <div class="icon-bx-lg radius  border-2 m-b20">
                                <div class="icon-cell text-white"> <i class="ti-user"></i> </div>
                            </div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">834</div>
                            <div class="aon-separator " style=" background-color: #151345"></div>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="m-b10 text-white text-center">
                            <div class="icon-bx-lg radius  border-2 m-b20">
                                <div class="icon-cell text-white"> <i class="ti-pie-chart"></i> </div>
                            </div>
                            <div class="counter font-26 font-weight-800 text-primary m-b5">538</div>
                            <div class="aon-separator " style=" background-color: #151345"></div>
                            <p>Developer Hand</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->
        <!-- Architecture -->
        <div class="section-full text-center aon-our-team bg-white content-inner">
            <div class="container">
                <div class="section-head">
                    <h2 class="text-uppercase"> OUR SERVICES</h2>
                    <span class="title-small">Best Equipment Services</span>
                    <div class="after-titile-line"></div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius  m-b20" style="background-color: #151345"> <a href="#" class="icon-cell"><i class="ti-reload"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">{{ $service->title }}
                                    </h5>
                                    <p>{!! $service->summary !!} </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        {{-- <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius  m-b20" style="background-color: #151345"> <a href="#" class="icon-cell"><i class="ti-car"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">TRUCK RENTAL – INTERNAL(Fleet Management –
                                        Distribution & Recovery)</h5>
                                    <p>


                                        In this case, the company receives specialised garbage machines that comprises
                                        Garbage Compactors, Skips and Roll-on Roll-off Trucks from the Group.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius  m-b20" style="background-color: #151345"> <a href="#" class="icon-cell"><i class="ti-thumb-up"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">EQUIPMENT RENTAL – EXTERNAL
                                        (Smart Hiring - Hiring of reliable assets to customers outside of JGC)</h5>
                                    <p>

                                        CA logistics will provide hiring /or rental services to well-structured
                                        organizations or companies, contractors and individuals who need rental services
                                        for specific projects.

                                    </p>
                                </div>
                            </div>
                        </div> --}}



                    </div>
                </div>
            </div>
        </div>
        <!-- Architecture End -->
        <!-- What peolpe are saying -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url(images/background/bg6.jpg);">
            <div class="container">
                <div class="section-head text-center text-white">
                    <h2 class="text-uppercase">What peolpe are saying</h2>
                    <span class="title-small">Best Cleaning Deals</span>
                    <div class="after-titile-line"></div>
                </div>
                <div class="section-content">
                    <div class="testimonial-one owl-carousel owl-dots-none owl-theme">
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>They are good</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong>
                                    <span class="testimonial-position">Satisfied Client</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. a</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong>
                                    <span class="testimonial-position">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p> It was popularised in the 1960s with the
                                        release of Letraset sheets conta</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong>
                                    <span class="testimonial-position">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What peolpe are saying END -->
    </div>
    <!-- contact area END -->
</div>
@endsection
@section('scripts')
@endsection

