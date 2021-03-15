<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{{ asset('/') }}admin/images/favicon_1.ico">

@yield('title');


    <!-- Base Css Files -->
    <link href="{{ asset('/') }}admin/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Font Icons -->
    <link href="{{ asset('/') }}admin/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}admin/css/ionicons.min.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}admin/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('/') }}admin/css/animate.css" rel="stylesheet"/>

    <!-- Waves-effect -->
    <link href="{{ asset('/') }}admin/css/waves-effect.css" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('/') }}admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Files -->
    <link href="{{ asset('/') }}admin/css/helper.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}admin/css/style.css" rel="stylesheet" type="text/css"/>


    <script src="{{ asset('/') }}admin/js/modernizr.min.js"></script>

</head>


<body class="fixed-left" >

<!-- Begin page -->
<div id="wrapper" >

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="{{ route('admin-successlogin') }}" class="logo"><i class="md md-terrain"></i>
                    <span>Id Approval </span></a>
            </div>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">

                    <ul class="nav navbar-nav navbar-right pull-right">

                        <li class="hidden-xs">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i
                                    class="md md-crop-free"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                <button class="btn btn-success"> Admin</button>
                            </a>
                            <ul class="dropdown-menu">

                                @if(isset(Auth::user()->email))
                                    <div class="alert alert-danger success-block">
                                        <strong>{{ Auth::user()->email }}</strong>
                                        <br/>
                                        <a href="{{ route('admin-logout') }}">Logout</a>
                                    </div>
                                @else
                                    <script>window.location = "/admin-login";</script>
                                @endif

                                <br/>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


</div>


@yield('body')

<script>
    var buttonClick = false;
    function Click() {
        if (buttonClick) {
            return;
        }
        else {
            buttonClick = true;
            //todo
            alert("ok");
            //buttonClick = false;
        }
    }
</script>


<script>
    function change()
    {
        document.getElementById("myButton1").value="Close Curtain";
    }
</script>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('/') }}admin/js/jquery.min.js"></script>
<script src="{{ asset('/') }}admin/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}admin/js/waves.js"></script>
<script src="{{ asset('/') }}admin/js/wow.min.js"></script>
<script src="{{ asset('/') }}admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{ asset('/') }}admin/js/jquery.scrollTo.min.js"></script>
<script src="{{ asset('/') }}admin/assets/chat/moment-2.2.1.js"></script>
<script src="{{ asset('/') }}admin/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{{ asset('/') }}admin/assets/jquery-detectmobile/detect.js"></script>
<script src="{{ asset('/') }}admin/assets/fastclick/fastclick.js"></script>
<script src="{{ asset('/') }}admin/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="{{ asset('/') }}admin/assets/jquery-blockui/jquery.blockUI.js"></script>

<!-- sweet alerts -->
<script src="{{ asset('/') }}admin/assets/sweet-alert/sweet-alert.min.js"></script>
<script src="{{ asset('/') }}admin/assets/sweet-alert/sweet-alert.init.js"></script>


<!-- Counter-up -->
<script src="{{ asset('/') }}admin/assets/counterup/waypoints.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}admin/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}admin/js/jquery.app.js"></script>

<!-- Dashboard -->
<script src="{{ asset('/') }}admin/js/jquery.dashboard.js"></script>

<!-- Chat -->
<script src="{{ asset('/') }}admin/js/jquery.chat.js"></script>

<!-- Todo -->
<script src="{{ asset('/') }}admin/js/jquery.todo.js"></script>
<script src="{{ asset('/') }}admin/js/jquery.app.js"></script>

<script src="{{ asset('/') }}admin/assets/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/datatables/dataTables.bootstrap.js"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
    });
</script>
<script type="text/javascript">
    /* ==============================================
    Counter Up
    =============================================== */
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>


</body>
</html>

