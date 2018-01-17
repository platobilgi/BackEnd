<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zeplin - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <meta name="theme-color" content="#68C39F">
    <link href="{{URL::asset('assets/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/fontello/css/fontello.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/animate-css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/nifty-modal/css/component.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/ios7-switch/ios7-switch.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/pace/pace.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/search.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/jquery-easypiechart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{URL::asset('assets/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/semantic.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/prettify/github.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/style-responsive.css')}}" rel="stylesheet" />

    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<body class="fixed-left lock-page">

<div class="container animated fadeInDownBig">
    <div class="full-content-center">
        <div class="login-wrap">
            <div class="login-block">
                <h3 style="color: white">Sisteme erişiminiz engellendi engelinizin açılması için beklemeniz gereken süre;<br>
                {{\App\Models\Back\Config\users::find(Auth::id())->ban_date}}</h3>
                <form role="form" action="index.html">
                    <div class="form-group login-input">
                        <i class="fa fa-key overlay"></i>
                        <input type="password" class="form-control text-input" placeholder="********" autocomplete=off><button type="submit" class="btn btn-success btn-block">UNLOCK</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div class="md-overlay"></div>
<script>
    var resizefunc = [];
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('assets/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::asset('assets/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>

<script src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{URL::asset('assets/jquery-detectmobile/detect.js')}}"></script>
<script src="{{URL::asset('assets/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
<script src="{{URL::asset('assets/ios7-switch/ios7.switch.js')}}"></script>
<script src="{{URL::asset('assets/fastclick/fastclick.js')}}"></script>
<script src="{{URL::asset('assets/jquery-blockui/jquery.blockUI.js')}}"></script>
<script src="{{URL::asset('assets/bootstrap-bootbox/bootbox.min.js')}}"></script>
<script src="{{URL::asset('assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{URL::asset('assets/jquery-sparkline/jquery-sparkline.js')}}"></script>
<script src="{{URL::asset('assets/nifty-modal/js/classie.js')}}"></script>
<script src="{{URL::asset('assets/nifty-modal/js/modalEffects.js')}}"></script>
<script src="{{URL::asset('assets/sortable/sortable.min.js')}}"></script>
<script src="{{URL::asset('assets/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
<script src="{{URL::asset('assets/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{URL::asset('assets/bootstrap-select2/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('assets/pace/pace.min.js')}}"></script>
<script src="{{URL::asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('assets/jquery-icheck/icheck.min.js')}}"></script>
<script src="{{URL::asset('assets/search.js')}}" ></script>
<script src="{{URL::asset('assets/semantic.min.js')}}"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<script src="{{URL::asset('assets/js/apps/calculator.js')}}"></script>
<script src="{{URL::asset('assets/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
<script src="{{URL::asset('assets/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/other-charts.js')}}"></script>



<!-- Demo Specific JS Libraries -->
<script src="{{URL::asset('assets/prettify/prettify.js')}}"></script>

<script src="{{URL::asset('assets/init.js')}}"></script>
<script src="{{URL::asset('assets/bootstrap-validator/js/bootstrapValidator.min.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/form-validation.js')}}"></script>
</body>
</html>