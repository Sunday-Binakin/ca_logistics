@extends('website.master')
@section('header')
@include('website.other-pages-header')
@endsection
@section('page-content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/banner/2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Truck Rental</h1>
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
                    <li><a href="{{ route('truck_rental') }}" style="color:#151345">Truck Rental</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
				<div class="row">
					@include('website.services.side_bar_items')
					<div class="col-lg-9 col-md-8 col-sm-6">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="dlab-box">
									<div class="dlab-media"> <a href="#"><img src="images/our-services/img10.jpg" alt=""></a> </div>
									<div class="dlab-info m-t30 ">
										<h4 class="dlab-title m-t0"><a href="#">The Initial Planning </a></h4>
										<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
										<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
										<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p>
									</div>

								</div>

							</div>
							<div class="col-lg-6 col-md-6">
								<div class="dlab-box">
									<div class="dlab-media m-b30 p-b5"> <a href="#"><img src="images/our-services/img6.jpg" alt=""></a></div>
									{{-- <div class="dlab-media"> <a href="#"><img src="images/our-services/img5.jpg" alt=""></a></div> --}}
									<div class="dlab-info m-t30 ">
										<h4 class="dlab-title m-t0"><a href="#">From Start To finish</a></h4>
										<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
										<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
										<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				<!-- About Company END -->
			</div>
        <!-- contact area  END -->
		</div>
    <!-- Content END-->
@endsection
