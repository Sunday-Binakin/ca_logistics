@extends('website.master')
@section('css')
@endsection
@section('header')
@include('website.other-pages-header')
@endsection
@section('page-content')
{{-- @include('website.services.all_service'); --}}
{{-- #f99b1d --}}
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/main-slider/slide1.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white ">All Services</h1>
                <div class="dlab-separator bg-primary"></div>
                <p class="text-white max-w800">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('home') }}" style="color:#f99b1d">Home</a></li>
                <li><a href="{{ route('services') }}" style="color:#151345">All Services</a></li>
            </ul>
        </div>
    </div>

    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="section-full bg-white content-inner">
        <!--  Company Service -->
        <div class="container">
            <div class="row">
                {{--
                @include('website.services.side_bar_items') --}}
                {{-- side bar --}}
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget_services style-2 m-b40">
                        <ul>
                            <li><a href="{{ route('services') }}">ALL SERVICES</a> </li>
                            <li><a href="{{ route('equipment_rental_internal') }}">EQUIPMENT RENTAL-INTERNAL</a> </li>
                            <li><a href="{{ route('truck_rental') }}">TRUCK RENTAL</a> </li>
                            <li><a href="{{ route('equipment_rental_external') }}">EQUIPMENT RENTAL-EXTERNAL</a> </li>

                        </ul>
                    </div>

                    <div class="widget  widget_getintuch">
                        <h4 class="widget-title">Contact us</h4>
                        <ul>
                            <li><i class="ti-location-pin"></i><strong>address</strong> P.O.Box M388, Ministries - Accra </li>
                            <li><i class="ti-mobile"></i><strong>phone</strong>+233 50 130 4693
                            </li>
                            <li><i class="fa fa-phone"></i><strong>mobile</strong>+233 20 000 0831
                            </li>
                            <li><i class="ti-email"></i><strong>email</strong>info@demo.com</li>
                        </ul>
                    </div>
                </div>

                {{-- side bar end --}}
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="row">
                        @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="dlab-box">
                                <div class="dlab-media"> <a href="#"><img src="services/{{ $service->image }}" alt=""></a> </div>
                                <div class="dlab-info">
                                    <h4 class="dlab-title m-t20"><a href="{{ route('equipment_rental_internal') }}">{{ $service->title }}</a></h4>
                                    <p>{!! $service->summary !!}</p>
                                    <div class="row">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"> <a href="{{ route('equipment_rental_internal') }}" class="site-button">More</a></li>
                                        </ul>
                                </div>
                            </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
    </div>
    <!-- contact area  END -->
</div>

@endsection
@section('scripts')
@endsection
