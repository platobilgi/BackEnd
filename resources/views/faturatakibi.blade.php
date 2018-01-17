@extends('layouts.app')
@section('content')
    <section id="content">
    <div class="get-started center wow fadeInDown">
        <h2>Hızlı ve kolay fatura kesme programı</h2>
        <p class="lead">Faturalamaya daha az vakit ayırın, tahsilatlarınızı hızlandırın!</p>
        <div class="request">
            <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
        </div>
    </div>
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Faturalama operasyonunuzu verimli yönetin…</h2>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-bullhorn"></i>
                        <h2>Pratik Fatura Şablonu</h2>
                        <h3>Elde, excel'de fatura kesmekle uğraşmayın. Fatura formatınıza uygun şablon ayarını bir kez yapın, faturalarınızı kolayca hazırlayıp yazdırın.</h3>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-comments"></i>
                        <h2>Hızlı Listeleme ve Arama</h2>
                        <h3>Filtrelerle ödeme durumu ya da vadesine göre faturalarınızı süzün, arama çubuğundan istediğiniz faturayı kolayca bulun.</h3>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <h2>E-Posta Hatırlatmaları</h2>
                        <h3>Vadesi gelen faturalarınız e-posta kutunuzda!</h3>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-leaf"></i>
                        <h2>Tekrarlama Emri</h2>
                        <h3>Düzenli kesmeniz gereken faturaları takip etmekle uğraşmayın! Tekrarlama emri ile günü gelen faturalarınız otomatik oluşsun.</h3>
                    </div>
                </div>

            </div>
        </div>
        <div class="center wow fadeInDown">
            <h2>Nakit akışınızı iyileştirin...</h2>
        </div>
        <div class="row">
            <div class="features">
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-bullhorn"></i>
                        <h2>Fatura Kategorileri</h2>
                        <h3>Satışlarınızı görmek istediğiniz kırılımlarda kategorileyerek raporlayın.</h3>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-comments"></i>
                        <h2>Proforma Fatura</h2>
                        <h3>Teklif niteliğinde proforma oluşturun, günü geldiğinde faturaya dönüştürün.</h3>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <h2>Fatura Kopyalama</h2>
                        <h3>Benzer tip faturaları kopyalarak zaman kazanın.</h3>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-leaf"></i>
                        <h2>Fatura Geçmişi</h2>
                        <h3>Bir fatura üzerinde yapılan tüm işlem geçmişini görüntüleyin.</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>İşiniz her zaman avucunuzun içinde!</h2>
                <h3>Mobil durumdayken bile işletmenizi cebinizden yürütebilmenin keyfini yaşayın</h3>
                <p class="lead">Cep telefonunuzdan satış faturası oluşturun.<br>
                    Tüm giderlerinizi oluştuğu an girin, takip edin.<br>
                    Gecikmiş ve gelecek tahsilatlarınızdan haberdar olun.<br>
                    Kesilen tüm faturalarınızı izleyin.<br>
                    Ödemelerinizi takip edin.</p>
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
