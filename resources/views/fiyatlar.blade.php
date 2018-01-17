@extends('layouts.app')
@section('content')
    <section class="pricing-page">
        <div class="get-started center wow fadeInDown">
            <h2>Önce 14 Gün ücretsiz deneyin!</h2>
            <p class="lead">İstediğiniz zaman aboneliğinizi başlatarak, tüm paketlerde tüm özellikleri sınırsız kullanın.</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-3 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>1 Aylık Paket</h1>
                                <span>55₺/Aylık</span>
                            </li>
                            <li>Zeplin'le tanışın, dilediğiniz zaman daha ekonomik pakete geçin.</li>
                            <li>Tanışma paketi</li>
                        </ul>
                    </div>

                    <div class="col-sm-3 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>6 Aylık Paket</h1>
                                <span>50₺/Aylık</span>
                            </li>
                            <li>Ön ödeme ile KDV dahil 300₺</li>
                            <li>Hem daha ekonomik hem de daha uzun süreli kullanım için.</li>
                            <li>Aylık pakete göre 30₺ daha avantajlı</li>
                        </ul>
                    </div>

                    <div class="col-sm-3 plan price-three wow fadeInDown">
                        <ul>
                            <li class="heading-three">
                                <h1>12 Aylık Paket</h1>
                                <span>45₺/Aylık</span>
                            </li>
                            <li>Ön ödeme ile KDV dahil 540₺</li>
                            <li>Zeplinliyim diyenlerin en çok tercih ettiği paket!</li>
                            <li>Aylık pakete göre 120₺ daha hesaplı</li>

                        </ul>
                    </div>

                    <div class="col-sm-3 col-md-3 plan price-four wow fadeInDown">
                        <ul>
                            <li class="heading-four">
                                <h1>3 Yıllık Paket</h1>
                                <span>40₺/Aylık</span>
                            </li>
                            <li>Ön ödeme ile KDV dahil 1440₺</li>
                            <li>Geleceği Zeplin'le planlayanlar için en ekonomik tercih!</li>
                            <li>Aylık pakete göre 540₺ daha hesaplı</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Tüm paketlerimizde bulunan özellikler</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services1.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Sınırsız Kullanıcı</h3>
                            <p>Dilediğiniz kadar kullanıcı tanımlayın, birlikte çalışın.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services2.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Ücretsiz Güncellemeler</h3>
                            <p>Ürün güncellemeleri kullanıcılarımıza ücretsiz sunuluyor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services3.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Sınırsız Fatura</h3>
                            <p>Fatura limiti yok, dilediğiniz kadar fatura oluşturun.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services4.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Düzenli Güncellemeler</h3>
                            <p>Programımız sürekli yenileniyor ve geliştiriliyor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Sınırsız Destek</h3>
                            <p>Üyeliğiniz boyunca sınırsız destek alabilirsiniz.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{URL::asset('images/services/services6.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Günlük Yedekleme</h3>
                            <p>Tüm verileriniz günlük olarak yedeklenir, korunur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Ek Özelliklerimizde Fiyat Avantajları</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>e-Fatura</h2>
                            <h3>Başvuru, entegrasyon, eğitim bedeli gibi sürpriz ücretler yok. Başvuru sürecinden kullanım sürecine her aşamada destek veriyoruz.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Online Tahsilat</h2>
                            <h3>Kurulum ve sürpriz ücretlendirmeler yok, ciro taahhüdü yok! Bir iş günü içerisinde müşterilerinize kredi kartı ile ödeme seçeneği sunun.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Stok Takibi</h2>
                            <h3>Stok Takibi özelliği tüm Paraşüt kullanıcılarına ücretsiz! Ürün stok durumunu ve satış adetlerini takip edin, irsaliye yazdırın, ürün bazında karlılığınızı görün.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Akbank Entegrasyonu</h2>
                            <h3>Akbank hesabınızı ekleyin, Paraşüte girdiğiniz giderleri Akbank Direkt aracılığıyla ödeyin. Üstelik 3 ay boyunca havale ve EFT ücreti ödemeden!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container">
        <div class="center wow fadeInDown">
            <h2>Sıkça Sorulan Sorular</h2>
        </div>
        <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2 style="color:#c52d2f">Kimler e-Fatura kullanıcısı olabilir?</h2>
            <p class="lead">Herkes. e-Fatura'ya geçişi zorunlu olanların yanında isteğe bağlı tüm firmalar (şahış, tüzel) e-Fatura'ya geçiş yapabilirler.</p>

        </div>
        <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2 style="color:#c52d2f">e-Fatura'ya geçinçe e-Defter’e geçmem gerekir mi?</h2>
            <p class="lead">İsteğe bağlı e-Fatura'ya geçiş yapan firmaların e-Defter'e geçmeleri zorunlu değildir.</p>

        </div>
        <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2 style="color:#c52d2f">e-Fatura'nın matbu faturadan farkı nedir?</h2>
            <p class="lead">e-Fatura, matbu faturadan farklı olarak dijital ortamda oluşturulup kesilir. Kişinin faturayı dilerse yazdırması da mümkündür. Fakat kanuni olarak bir farkı yoktur.</p>

        </div>
        <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2 style="color:#c52d2f">Herkese e-Fatura kesebilir miyim?</h2>
            <p class="lead">İster e-Fatura kullanıcısı olsun, ister olmasın herkese fatura kesebilirsiniz.</p>

        </div>
        <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2 style="color:#c52d2f">e-Fatura ve e-Arşiv faturası arasındaki fark nedir?</h2>
            <p class="lead">Eğer fatura düzenlediğiniz muhatabınız e-Fatura kullanıcısı ise e-Fatura, değilse e-Arşiv faturası sistem tarafından tanınarak gönderilir..</p>

        </div>
        <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2 style="color:#c52d2f">e-Fatura başvurumu nasıl yapacağım?</h2>
            <p class="lead">Paraşüt deneme hesabınıza giriş yaptıktan sonra başvurunuzu hemen ücretsiz olarak yapabilirsiniz. Konula ilgili ayrıntılı açıklamaya buradan ulaşabilirsiniz.</p>

        </div>
        <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2 style="color:#c52d2f">Paraşüt'ü nasıl kullanabilirim?</h2>
            <p class="lead">Paraşüt abonelik sistemi ile çalışmaktadır. 14 günlük ücretsiz deneme sürenizi başlattıktan sonra memnun kaldığınız takdirde paketinizi istediğiniz zaman seçip, kullanmaya devam edebilirsiniz.</p>
        </div>
    </div>
    </section>


@endsection