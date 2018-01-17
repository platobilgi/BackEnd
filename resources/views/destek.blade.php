@extends('layouts.app')
@section('content')
    <section id="contact-info">
        <div class="center">
            <h2>Destek Merkezi</h2>
        </div>
    </section>
    <section id="services" class="service-item">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services1.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Bizi Arayın</h3>
                            <p><br>Bazen sorularınızı telefonda açıklamak daha kolay olabilir, hafta içi 09.30 – 17.00 saatleri arası bizi arayabilirsiniz.</p>
                            <p style="color: red"> +0123 456 70 90</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services2.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Bize Yazın</h3>
                            <p>Sorularınız ve sorunlarınız için bize e-posta adresimizden ulaşabilirsiniz. Mesajlarınıza en geç 1 iş günü içinde dönüş yapıyoruz.</p>
                            <p style="color: red">iletisim@zeplin.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services3.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Biz Sizi Arayalım</h3>
                            <p>Uygun olduğunuz gün ve saat aralığını bize iletirseniz destek ekibimizden birisi sizi arayabilir.</p>
                            <p style="color: red">Uygun olduğunuz zamanı seçin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection