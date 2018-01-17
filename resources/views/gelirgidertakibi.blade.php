@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="get-started center wow fadeInDown">
            <h2>Gelir gider takip programı</h2>
            <p class="lead">İşletmenize giren çıkan paranın kontrolü sizde olsun!</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Ödemelerinizi planlayın, izleyin…</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Giderler</h2>
                            <h3>Beklenmedik sürprizlerle karşılaşmayın! Nereye ne zaman ne kadar ödeme yapılacak, tüm giderleriniz önünüzde.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Maaş, Prim ve Avanslar</h2>
                            <h3>Çalışanlarınızın cebinden yaptığı şirket harcamaları ile birlikte ay sonunda yapmanız gereken ödemeler çok net.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Banka Mutabakatı</h2>
                            <h3>Paraşüt'e kaydetmeyi unuttuğunuz işlemleri banka mutabakatı ile tespit etmek ve düzeltmek çok kolay.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Kasa ve Banka Hareketleri</h2>
                            <h3>İşletmenize hangi kasa ya da banka hesabınızdan ne zaman, ne kadar para girmiş, çıkmış hepsini görüntüleyin.</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="center wow fadeInDown">
                <h2>Nereye ne kadar harcadığınızı kolayca raporlayın…</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Gider Kategorileri</h2>
                            <h3>En çok nereye para harcadığınızı görerek, harcamalarınıza yön verin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Vergi ve SGK Primi</h2>
                            <h3>Vergi döneminize göre vergi ve SGK primi ödemelerinizi takip edin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Banka Giderleri</h2>
                            <h3>Banka kredilerinizi girin, ne zaman hangi bankaya ne ödeme yapacağınızı bilin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Tekrarlama Emri</h2>
                            <h3>Düzenli giderleriniz için tekrarlama emri verin.</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Gelir giderleriniz parmağınızın ucunda!</h2>
                <h3>Gecikmiş ve yapılacak tüm ödemeler her an önünüzde</h3>
                <p class="lead">Ofis dışında yaptığınız harcamaların fişlerini kaybolmadan anında fotoğraflayın.<br>
                    Kasa ve bankalarınızın güncel bakiyesine istediğiniz an ulaşın</p>
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
