@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="get-started center wow fadeInDown">
            <h2>Cari hesap takip programı</h2>
            <p class="lead">Bakiyesi olan müşteri ve tedarikçilerinizi listeleyin, aratın, kolayca yönetin</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Bir tıkla mutabakat sağlayın…</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>İşlem Geçmişi</h2>
                            <h3>Carinizin fatura ve ödeme geçmişini hızlıca görüntüleyin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Cari Hesap Ekstresi</h2>
                            <h3>Pdf olarak indirin, yazdırın, dilerseniz e-posta ile paylaşın. Hepsi çok kolay!</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Çek/Nakit Girişi</h2>
                            <h3>Açık hesap çalıştığınız carilere ister çek ister nakit ödeme ve tahsilatlarınızı girin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Toplu İçeri Aktarım</h2>
                            <h3>Müşteri ve tedarikçilerinizi açılış bakiyeleri ile Paraşüt'e topluca kaydedin, vakit kaybetmeden cari yönetimine başlayın.</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="center wow fadeInDown">
                <h2>En çok kazandıran müşterilerinizi kolayca tespit edin...</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Müşteri Kategorileri</h2>
                            <h3>Müşterilerinizi kategorileyin, hangi müşteri grubuna odaklanmanız gerektiğini görün.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Ödeme Hatırlatmaları</h2>
                            <h3>Vadesi gelen tahsilat ve ödemeler e-posta ile hatırlatılır. Hem size hem müşterinize.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Toplu İşlem</h2>
                            <h3>Carilerinizi topluca kategorize edin, silin, arşivleyin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>e-Posta ile Fatura Paylaşımı</h2>
                            <h3>Faturanızı e-posta ile paylaşın, carinizle kolay mutabakat sağlayın.</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Cari hesaplarınızı ofis dışında da yönetin!</h2>
                <h3>Müşterilerinizin güncel bakiyesine zaman, mekan ve cihazdan bağımsız her an hakim olun.</h3>
                <p class="lead">Ödemesi gelmiş müşterilerilerinizi listeleyin, hatırlatma mesajı gönderin<br>
                    Müşterinizin bakiye durumuna, detay bilgileri ile kolayca ulaşın</p>
                <div class="center">
                    <ul class="col-md-6 center"style="list-style: none outside none; margin-left: 30%">
                        <li><a href="/ios" class="btn btn-danger" style="position: relative; float: left ">iOS Uygulamasını İndirin</a> </li>
                        <li><a href="/android" class="btn btn-danger" style="position: relative;float: left; margin-left: 5px">Android Uygulamasını İndirin</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
