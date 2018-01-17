<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lineicons.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/style2.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/style-responsive2.css')}}" rel="stylesheet">

    <script src="{{ URL::asset('js/Chart.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script>
        window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="{{URL::route('admin')}}" class="logo"><b>Zeplin Yönetim Paneli</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{URL::route('ana')}}/logout">Logout</a></li>
            </ul>
        </div>
    </header>
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a  href="{{URL::route('admin.menuler')}}" >
                        <i class="fa fa-desktop"></i>
                        <span>Menüler</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{URL::route('admin.sliderlar')}}" >
                        <i class="fa fa-cogs"></i>
                        <span>Sliderlar</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{URL::route('admin.ayarlar')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Üst Bar Ayarlar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>



    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">

        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('js/jquery.js')}}"></script>
<script src="{{ URL::asset('js/jquery-1.8.3.min.js')}}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{ URL::asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ URL::asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.sparkline.js')}}"></script>
<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>



<!--common script for all pages-->
<script src="{{ URL::asset('js/common-scripts.js')}}"></script>

<script type="text/javascript" src="{{ URL::asset('js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/gritter-conf.js')}}"></script>

<!--script for this page-->
<script src="{{ URL::asset('js/sparkline-chart.js')}}"></script>
<script src="{{ URL::asset('js/zabuto_calendar.js')}}"></script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>

@yield('content')

</body>
</html>
