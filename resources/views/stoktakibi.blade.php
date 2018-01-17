@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="get-started center wow fadeInDown">
            <h2>Basit stok programı</h2>
            <p class="lead">Stoklarınızda ürün olmadığı için satış kaçırmayın!</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Stok takibinizi kolayca yapın</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Ürünlerin Stok Durumu</h2>
                            <h3>Faturalarınızı kestikçe, otomatik güncellenen stok durumunuzu kolayca takip edin, tedarikçilerinizden mal siparişinizi zamanında yapın.</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Stok Satışları</h2>
                            <h3>Hangi üründen müşterinize kaç adet sattınız ya da tedarikçiden kaç adet aldınız, hepsi bir tıkla önünüzde.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Kolayca İrsaliye Yazdırın</h2>
                            <h3>Faturanız oluştuğunda, irsaliyeniz de aynı anda otomatik oluşsun. Ya da dilerseniz önce irsaliyenizi oluşturun, zamanı geldiğinde bir tuşla faturaya çevirin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Ürün Bazında Karlılık</h2>
                            <h3>Yaptığınız ürün satışlarının karlılığını pratik şekilde raporlayın!</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
