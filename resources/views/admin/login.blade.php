
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 11:04:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="admin/asset/image/png" sizes="16x16" href="{{asset('admin/images/favicon.png')}}">
    <title>Admin Login | UPPR</title>

    <!-- page css -->
    <link href="{{asset('admin/dist/css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">UPPR</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url('admin/images/background/login-register.jpg');">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginForm" method="Post">
                    {{csrf_field()}}
                    <h3 class="text-center m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" type="email" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                    </div>

                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info btn-rounded" id="sendButton" type="submit">Log In</button>
                        </div>
                    </div>

                </form>
                <div class="alert alert-success alert-rounded text-center" id="alert-success">  Login Successful Redirecting......
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
                <div class="alert alert-danger alert-rounded text-center" id="alert-danger">  Error Wrong Credentials.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('admin/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin/node_modules/popper/popper.min.js')}}"></script>
<script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>

<script type="text/javascript">
    // alert("hi");

    $('#alert-success').hide();
    $('#alert-danger').hide();



    $('#loginForm').submit(function(e){
        e.preventDefault();

        var jqxhr = $.ajax({
            type: "POST",
            url: 'login',
            data:$('#loginForm').serialize(),
            cache: false,
            beforeSend: function(){
                $('#sendButton').prop('disabled', true);
            }

        })
            .done(function(data) {
                if (data.status =='success'){

                    $('#alert-danger').hide();
                    $('#alert-success').show();

                    window.location.replace("admin/about");
                }

                else{
                    $('#alert-danger').show();
                    $('#alert-success').hide();
                    $('#sendButton').prop('disabled', false);
                }



            })
            .fail(function() {
                $('#alert-danger').show();
                    $('#alert-success').hide();
                    $('#sendButton').prop('disabled', false);

            })
            .always(function() {
                // alert( "finished" );
            });



    });
</script>

</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 11:04:52 GMT -->
</html>
