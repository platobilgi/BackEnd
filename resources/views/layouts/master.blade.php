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
    <link href="{{URL::asset('assets/jquery-notifyjs/styles/metro/notify-metro.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

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
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body class="fixed-left">
<div class="md-modal md-just-me" id="logout-modal">
    <div class="md-content">
        <h3><strong>Ayrılma</strong> Onayı</h3>
        <div>
            <p class="text-center">Zeplin'den ayrılmak istediğinize emin misiniz?</p>
            <p class="text-center">
                <button class="btn btn-danger md-close">Hayır!</button>
                <a href="{{URL::route('logout')}}" class="btn btn-success md-close">Evet, eminim..</a>
            </p>
        </div>
    </div>
</div>
<div id="wrapper">
    <div class="left side-menu" style="margin-top: 0px;">
        <div class="sidebar-inner slimscrollleft">

            <div class="clearfix"></div>
            <!--- Profile -->
            <div class="profile-info" style="margin-top: 10px">

                <div class="col-xs-12">
                    <div class="profile-text" style="text-align: center"><b>{{Auth::user()->name}}</b><br>
                    Hoşgeldiniz</div>
                    <div class="profile-buttons" style="width: 30%;margin: 0 auto;">
                        <a href="javascript:void(0);" class="md-trigger" data-modal="logout-modal" title="Sign Out"><i class="fa fa-power-off text-red-1"></i><span>  Çıkış</span></a>
                    </div>
                </div>
            </div>
            <!--- Divider -->
            <div class="clearfix"></div>
            <hr class="divider" />
            <div class="clearfix"></div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul><li  ><a id="a1" href='{{URL::route('panel')}}'><i class='icon-home-3'></i><span>Güncel Durum</span> <span class="pull-right"></span></a>
                        </li><li class='has_sub'><a id="a11" href='javascript:void(0);'><i class='fa fa-fw fa-sign-in fa-rotate-90'></i><span>Satışlar</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                            <li><a id="a12" href='{{URL::route('satislar')}}'><span>Faturalar</span></a></li>
                            <li><a id="a13" href='{{URL::route('panel.musteriler')}}'><span>Müşteriler</span></a></li></ul></li>
                    <li class='has_sub'><a id="a2" href='javascript:void(0);'><i class='fa fa-fw fa-sign-in fa-rotate-270'></i><span>Giderler</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                            <li><a id="a21" href='{{URL::route('panel.giderler')}}'><span>Gider Listesi</span></a></li>
                            <li><a id="a22" href='{{URL::route('panel.tedarikciler')}}'><span>Tedarikçiler</span></a></li>
                            <li><a id="a23" href='{{URL::route('panel.calisanlar')}}'><span>Çalışanlar</span></a></li></ul></li>
                    <li class='has_sub'><a id="a3" href='javascript:void(0);'><i class='fa fa-money'></i><span>Nakit</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                            <li><a id="a31" href='{{URL::route('panel.kasavebankalar')}}'><span>Kasa ve Bankalar</span></a></li></ul></li>
                    <li class='has_sub'><a id="a4" href='javascript:void(0);'><i class='fa fa-truck'></i><span>Stok</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                            <li><a id="a41" href='{{URL::route('stok.hizmetveurunler')}}'><span>Hizmet ve Ürünler</span></a></li>
                            <li><a id="a42" href='{{URL::route('panel.stokhareketleri')}}'><span>Stok Hareketleri</span></a></li></ul></li>
                    <li class='has_sub'><a id="a5" href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Görselleştirme</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                            <li><a id="a51" href='{{URL::route('map')}}'><span>Harita</span></a></li>
                    <div class="clearfix"></div></ul>
            </div>

        </div>

    </div>
    <!-- Left Sidebar End -->
    <!-- Start right content -->
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->

    </div>
    <!-- End right content -->

</div>
<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
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
<script src="{{URL::asset('assets/jquery-notifyjs/notify.min.js')}}"></script>
<script src="{{URL::asset('assets/jquery-notifyjs/styles/metro/notify-metro.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/notifications.js')}}"></script>



</body>
</html>