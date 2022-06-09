<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 11:07:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/img/favicon.png')}}">
    <title>Admin | CA LOGISTICS</title>

    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/node_modules/summernote/dist/summernote-bs4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">

    <link href="{{asset('admin/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('admin/dist/css/pages/dashboard1.css')}}" rel="stylesheet">
    <link href="{{asset('admin/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    @yield('page-css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



    <![endif]-->
</head>

<body class="skin-default fixed-layout">
    <div id="app">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">CA LOGISTICS</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/adm">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src=" {{asset('images/logo/japplogo-admin.jpg')}}" alt="homepage"
                                    class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src=" {{asset('images/logo/japplogo-admin.jpg')}}" alt="homepage"
                                    class="light-logo" />
                            </b></a>

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a
                                    class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item"> <a
                                    class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item">
                                <form class="app-search d-none d-md-block d-lg-block">
                                    <input type="text" class="form-control" placeholder="Search & enter">
                                </form>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->

                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- User Profile-->
                    <div class="user-profile">
                        <div class="user-pro-body">
                            <div>
                                <img src="{{asset('admin/images/user.png')}}" alt="user-img" class="img-circle">
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{--{{Auth::user()->name}}--}}
                                    <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu animated flipInY">
                                    <!-- text-->
                                    <div class="dropdown-divider"></div>
                                    <!-- text-->
                                    <a href="{{url('/logout')}}" class="dropdown-item">
                                        <i class="fa fa-power-off"></i> Logout</a>
                                    <!-- text-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">

                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <i class="icon-speedometer"></i>
                                    <span class="hide-menu">Menus
                                    </span>
                                </a>
                                <ul aria-expanded="false" class="collapse">
                                    <li>
                                        <a href="{{url('admin/about')}}">About</a>
                                    </li>

                                    {{-- <li>
                                        <a href="{{url('admin/sliders')}}">Sliders </a>
                                    </li> --}}
                                    <li>
                                        <a href="{{url('admin/service')}}">Services </a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{url('admin/category')}}">Product Categories</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{url('admin/product')}}">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/blog')}}">Blogs </a>

                                    </li>
                                    <li>
                                        <a href="{{url('admin/gallery')}}">Gallery</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{url('admin/repairs')}}">Repair Requests </a>
                                    </li> --}}
                                    <li>
                                        <a href="{{url('admin/team')}}">Team Members </a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{url('admin/testies')}}">Testimonials </a>
                                    </li> --}}

                                    <li>
                                        <a href="{{url('admin/message')}}">Messages </a>
                                    </li>

                                </ul>
                            </li>
                            {{--<li>--}}
                            {{--<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">--}}
                            {{--<i class="ti-layout-grid2"></i>--}}
                            {{--<span class="hide-menu">Pages</span>--}}
                            {{--</a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li>--}}
                            {{--<a href="/adm/courses/add">Courses</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="/adm/news/add">News</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="/adm/events/add">Upcoming Events</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="/adm/stories/add">Stories</a>--}}
                            {{--</li>--}}

                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">--}}
                            {{--<i class="ti-layout-grid2"></i>--}}
                            {{--<span class="hide-menu">Tables</span>--}}
                            {{--</a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li>--}}
                            {{--<a href="/adm/courses">Courses Table</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="/adm/news">News Table</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="/adm/events">Upcoming Events Table</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="/adm/stories">Stories Table</a>--}}
                            {{--</li>--}}

                            {{--</ul>--}}
                            {{--</li>--}}

                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    @yield('content')

                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                </div> -->
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <div class="right-sidebar">
                        <div class="slimscrollright">
                            <div class="rpanel-title"> Service Panel <span><i
                                        class="ti-close right-side-toggle"></i></span> </div>
                            <div class="r-panel-body">
                                <ul id="themecolors" class="m-t-20">
                                    <li><b>With Light sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-default"
                                            class="default-theme working">1</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a>
                                    </li>
                                    <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a>
                                    </li>
                                    <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a>
                                    </li>
                                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                            class="default-dark-theme ">7</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-green-dark"
                                            class="green-dark-theme">8</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-red-dark"
                                            class="red-dark-theme">9</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-blue-dark"
                                            class="blue-dark-theme">10</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-purple-dark"
                                            class="purple-dark-theme">11</a></li>
                                    <li><a href="javascript:void(0)" data-skin="skin-megna-dark"
                                            class="megna-dark-theme ">12</a></li>
                                </ul>
                                <ul class="m-t-20 chatonline">
                                    <li><b>Chat option</b></li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/1.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>Varun Dhavan <small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/2.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>Genelia Deshmukh <small
                                                    class="text-warning">Away</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/3.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>Ritesh Deshmukh <small
                                                    class="text-danger">Busy</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/4.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>Arijit Sinh <small
                                                    class="text-muted">Offline</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/5.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>Govinda Star <small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/6.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>John Abraham<small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/7.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>Hritik Roshan<small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('admin/images/users/8.jpg')}}" alt="user-img"
                                                class="img-circle"> <span>Pwandeep rajan <small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © {{now()->year}} JAPP
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- <script src="/js/app.js"></script> -->
    <script src="{{asset('admin/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('admin/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/summernote/dist/summernote-bs4.min.js')}}"></script>

    <script src="{{asset('admin/dist/js/axios.min.js')}}"></script>
    {{--<script src="{{asset('admin/dist/js/sweetalert2.js"></script>--}}
    <script src="{{asset('admin/dist/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/skycons/skycons.js')}}"></script>
    <!--morris JavaScript -->
    <script src="{{asset('admin/node_modules/raphael/raphael-min.js')}}"></script>
    {{--<script src="/admin/node_modules/morrisjs/morris.min.js"></script>--}}
    <script src="{{asset('admin/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/decoupled-document/ckeditor.js"></script>--}}
    <!-- Chart JS -->
    <!-- <script src="/admin/dist/js/dashboard4.js"></script> -->
    <!-- <script src="/admin/dist/js/dashboard1.js"></script> -->
    <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
    {{--<script src="admin/dist/js/ckeditor.js"></script>--}}
    {{--<script src="/admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>--}}
    {{--<script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>--}}

    {{--<script src="{{asset('js/sweetalert.min.js')}}"></script>--}}
    @include('sweet::alert')
    @yield('scripts')

    <script>
        $(function () {
        $('#myTable').DataTable();
        $(function () {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>


</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 11:07:37 GMT -->

</html>
