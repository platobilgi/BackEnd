@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="get-started center wow fadeInDown">
            <h2>Online Tahsilat Programı</h2>
            <p class="lead">Kredi kartı ile ödeme seçeneği sunun, tahsilatlarınızı garanti altına alın!</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Her işletme kredi kartı ile online tahsilat yapabilir!</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Kredi Kartı ile Online Tahsilat Çok Kolay</h2>
                            <h3>Oluşturduğunuz faturayı müşterinizle online paylaşın, tahsil edin!</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Taksitli Ödeme Seçeneği Sunun</h2>
                            <h3>Müşterilerinize istediğiniz vadede taksitli ödeme imkanı sunun.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>En Fazla 7 Gün İçinde Paranız Banka Hesabınızda</h2>
                            <h3>Tahsilattan sonraki ilk Çarşamba paranız banka hesabınıza geçer.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Teknik Entegrasyon ve Kurulum Süreci Yok</h2>
                            <h3>Paraşüt'e üye olarak online başvuru formunu doldurmanız veya mevcut iyzico hesabınızı eklemeniz yeterli.</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Yalın ve Sabit Ücretlendirme</h2>
                            <h3>Taahhüt yok, kurulum ve sürpriz ücretlendirmeler yok! Sabit komisyon ile ne ödeyeceğiniz net!</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Uluslararası Güvenlik Standartlarında</h2>
                            <h3>PCI-DSS sertifikasına sahip ve 3D secure ortamda tahsilat imkanı!</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
