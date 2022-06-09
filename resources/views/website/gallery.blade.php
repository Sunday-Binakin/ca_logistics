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
                <h1 class="text-white">Gallery</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->

    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Gallery </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="content-area">
        <!-- Left & right section start -->
        <div class="container">
            <!-- Gallery -->
            <!-- gallery head -->
            {{-- @include('website.gallery.gallery_head') --}}
            <div class="site-filters clearfix center  m-b40">
                <ul class="filters" data-bs-toggle="buttons">
                    <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Show All</span></a> </li>


                </ul>
            </div>

            <!-- end gallery head -->
            <!-- calling of images -->
            {{-- @include('website.gallery.images') --}}
            <div class="clearfix">
               
                <ul id="masonry" class="row dlab-gallery-listing gallery-grid-4 mfp-gallery">
                    @foreach($gallery as $galleries)
                    <li class="window card-container col-lg-6 col-md-6 col-sm-6 col-6">
                        
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow">
                                <a href="javascript:void(0);">
                                    <img src="gallery/{{ $galleries->name }}" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <a href="gallery/{{ $galleries->name }}" class="mfp-link" title="Image title come here">
                                            <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <!-- end calling of images -->

                    <!-- pagination -->
                    {{-- @include('website.gallery.pagination') --}}
                    <div class="pagination-bx clearfix m-b30">
                        <ul class="pagination">
                            <li class="previous"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>

                    <!-- end of pagination -->
                    <!-- Left & right section  END -->
            </div>
        </div>
        @endsection
        @section('scripts')
        @endsection
