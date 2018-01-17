@extends('layouts.app')
@section('content')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                @for($i=0;$i<$slider_count;$i++)
                    @if($i===0)
                        <li data-target="#main-slider"  data-slide-to="{{$i}}" class="active"></li>
                    @else
                        <li data-target="#main-slider" data-slide-to="{{$i}}"></li>
                    @endif
                @endfor
            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    @if($slider->sort_order===1)
                    <div class="item active" style="background-image: url({{URL::route('ana')}}/images/slider/{{$slider->bg_img}})">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">{{$slider->title}}</h1>
                                        <h2 class="animation animated-item-2">{{$slider->description}}</h2>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs animation animated-item-4">

                                </div>
                            </div>
                        </div>
                    </div>
                        @else
                        <div class="item" style="background-image: url({{$slider->bg_img}})">
                            <div class="container">
                                <div class="row slide-margin">
                                    <div class="col-sm-6">
                                        <div class="carousel-content">
                                            <h1 class="animation animated-item-1">{{$slider->title}}</h1>
                                            <h2 class="animation animated-item-2">{{$slider->description}}</h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 hidden-xs animation animated-item-4">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>

    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Her işletme için çok avantajlı</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud"></i>
                            <h2>Online</h2>
                            <h3>Yer, zaman ve cihazdan bağımsız, işletmenizi dilediğiniz yerden yönetin.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-thumbs-up"></i>
                            <h2>Kolay</h2>
                            <h3>Kullanıcı dostu arayüzü sayesinde herkes, hemen kullanmaya başlayabilir.</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-calendar"></i>
                            <h2>Zaman Kazanın</h2>
                            <h3>Finansal operasyonlara daha az zaman ayırın, işinizi büyütmeye odaklanın.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Aradığınız tüm özellikler Zeplin Muhasebe Programında</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services1.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Fatura Takibi</h3>
                            <p>Hızlı, kolay ve ekonomik faturalayın</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/cari.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Cari Hesap Takibi</h3>
                            <p>Cari hesaplarınızı her yerden takip edin</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/gelir.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Gelir Gider Takibi</h3>
                            <p>Tahsilat ve ödeme durumunuzu izleyin</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/rapor.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Raporlama</h3>
                            <p>Nakit akışı ve karlılığınızı görerek büyüyün</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">E-Fatura</h3>
                            <p>Bir tıkla faturalayın, tahsilatlarınızı hızlandırın</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/tahsilat.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Online Tahsilat</h3>
                            <p>Kredi kartı seçeneği ile tahsilatlar garantide</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/stok.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Stok Takibi</h3>
                            <p>Stoklarınızda ürün olmadığı için satış kaçırmayın</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/bank.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Banka Entegrasyonu</h3>
                            <p>Akbank üzerinden tüm hesap bilgilerinizi Zeplin'e aktarın</p>
                        </div>
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>100.000 Zeplinli'nin arasına siz de katılın</h2>
            </div>

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Daha fazla bilgiye mi ihtiyaç duyuyorsunuz?</h2>
                            <p>+0123 456 70 80 numaralı telefonumuzdan bize ulaşarak Zeplin Muhasebe sistemi ile ilgili daha çok bilgi alabilir, işletmenizi bir adım ileri taşıyabilirsiniz!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section>
@endsection
