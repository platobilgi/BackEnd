<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#68dff0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('/js/html5shiv.js')}}"></script>
    <script src="{{ URL::asset('/js/respond.min.js')}}"></script>
    <script>
        window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <![endif]-->
    <link rel="shortcut icon" href="{{URL::asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body class="homepage">

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> {{$statics->phone_number}}</p></div>
                </div>

                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            @if($statics->facebook)
                            <li><a href="{{$statics->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if($statics->twitter)
                            <li><a href="{{$statics->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @if($statics->linkedin)
                            <li><a href="{{$statics->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                @endif
                                @if($statics->skype)
                            <li><a href="{{$statics->skype}}"><i class="fa fa-skype"></i></a></li>
                                @endif
                        </ul>
                        <div class="search">
                            <form role="form" method="POST" action="{{URL::route('search')}}">
                                <input id="arama" name="arama" type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="fa fa-search" style="background-color: transparent; border: hidden; color: white"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::route('ana')}}"><img src="{{URL::asset('images/logo.png')}}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                    @foreach($menus as $menu)
                        @if($menu->has_dropdown == 0 && $menu->is_enabled==1)
                    <li><a href="{{URL::route('ana')}}/{{$menu->url}}">{{$menu->title}}</a></li>
                        @elseif($menu->has_dropdown == 1 && $menu->is_enabled==1)
                            <li class="dropdown">
                                <a href="{{$menu->url}}" class="dropdown-toggle" data-toggle="dropdown">{{$menu->title}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($menu_sub as $menu_suber)
                                        @if($menu_suber->menus_id === $menu->id && $menu_suber->is_enabled==1)
                                    <li><a href="{{URL::route('ana')}}/{{$menu_suber->url}}">{{$menu_suber->title}}</a></li>
                                        @endif
                                            @endforeach

                                </ul>
                            </li>
                                @endif
                        @endforeach
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                    <li><a href="{{URL::route('login')}}">Giriş</a> </li>
                    @elseif(Auth::user())
                    <li><a href="{{URL::route('panel')}}">Zeplin</a> </li>
                    @endif
                    <li><a href="{{URL::route('destek')}}">Destek</a> </li>
                    @if(Auth::guest())
                    <li class="active"><a href="{{URL::route('register')}}">Ücretsiz Dene</a> </li>
                    @endif

                </ul>
            </div>


        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->
@yield('content')
@include('layouts.prefooter')
@include('layouts.footer')
</body>
</html>
