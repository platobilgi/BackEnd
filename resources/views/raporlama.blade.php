@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="get-started center wow fadeInDown">
            <h2>Ön muhasebe raporlama programı</h2>
            <p class="lead">İhtiyacınız olan tüm raporlar önünüzde!</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Kazancınıza ve giderlerinize her zaman hakim olun…</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Tahsilat Raporları</h2>
                            <h3>Vadesi geçmiş alacaklarınızı yaşlandırma raporları ile bir bakışta tespit edin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Nakit Akışı Raporu</h2>
                            <h3>Gelirleriniz giderlerinizi karşılayacak mı? Önünüzü görerek büyüyün.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Gelir-Gider Raporu</h2>
                            <h3>İşletme karınızı ya da proje bazında karlılığınızı biliyor musunuz? Etiketleri kullanın, karlılığınızı ölçün!</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Kasa Banka Raporu</h2>
                            <h3>Şirketinize toplamda giren çıkan para ne kadar, istediğiniz tarih aralığında, detayları ile birlikte görüntüleyin.</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="center wow fadeInDown">
                <h2>İhtiyacınız olan tüm raporlar her an önünüzde…</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Satışlar Raporu</h2>
                            <h3>İstediğiniz tarih aralığında ne kadar satış yaptığınızı takip edin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>KDV Raporu</h2>
                            <h3>Ay içinde oluşan KDV detaylarıyla birlikte her an önünüzde.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Giderler Raporu</h2>
                            <h3>Ne zaman ne kadar harcadınız, Alışlar Raporunda.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Ödemeler Raporu</h2>
                            <h3>Güncel ve gecikmiş ödemeleriniz kontrolünüzde.</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
