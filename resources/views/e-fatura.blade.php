@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="get-started center wow fadeInDown">
            <h2>e-Fatura e-Arşiv Programı</h2>
            <p class="lead">Daha kolay, hızlı ve ekonomik faturalayın</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>e-Fatura neden avantajlı?</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Ekonomik faturalama</h2>
                            <h3>Fatura başına maliyeti 12 kuruşa kadar düşürün</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Hızlı gönderi</h2>
                            <h3>Fatura basma, yazdırma, zarflama, gönderme ve takip sürecine son verin</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Çabuk tahsilat</h2>
                            <h3>Faturalarınız bir tıkla müşterinizde! Ulaşmama, kaybolma derdi yok, tahsilat sürecini çok daha hızlı başlatın</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Muhasebecinizle rahat çalışma</h2>
                            <h3>Faturalarınızı muhasebecinize kargolamaya son verin, hızlanın, aynı ekran üzerinden beraber çalışın</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="center wow fadeInDown">
                <h2>Neden Zeplin ile e-Fatura?</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Sıfır Ek Ücret</h2>
                            <h3>Başvuru, entegrasyon, eğitim bedeli gibi sürpriz ücretler ödemezsiniz</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Ücretsiz Fatura Arşivleme</h2>
                            <h3>Faturalarınız 10 sene süreyle bedelsiz saklanır, istediğiniz zaman tek tuşla erişebilirsiniz</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Entegre Ön Muhasebe</h2>
                            <h3>e-Fatura entegrasyonuyla beraber kullanışlı bir ön muhasebe programınız olur</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Sınırsız Destek</h2>
                            <h3>Başvuru sürecinden kullanım sürecine her aşamada işinizi kolaylaştırıyoruz</h3>
                        </div>
                    </div>

                </div>
            </div>
            <section class="pricing-page">
                <div class="container">
                    <div class="center">
                        <h2>e-Fatura Kredi Paketlerimiz</h2>
                    </div>
                    <div class="pricing-area text-center">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                                <ul>
                                    <li class="heading-one">
                                        <h1>50 Kredi</h1>
                                        <span>9,99TL</span>
                                    </li>
                                    <li>KDV Dahil</li>
                                    <li>Kullandıkça Öde</li>

                                </ul>
                            </div>

                            <div class="col-sm-6 col-md-3 plan price-five wow fadeInDown">
                                <ul>
                                    <li class="heading-two">
                                        <h1>100 Kredi</h1>
                                        <span>14,99TL</span>
                                    </li>
                                    <li>KDV Dahil</li>
                                    <li>50 Krediye Göre</li>
                                    <li>%25 Hesaplı</li>
                                </ul>
                            </div>

                            <div class="col-sm-6 col-md-3 plan price-six wow fadeInDown">
                                <ul>
                                    <li class="heading-three">
                                        <h1>200 Kredi</h1>
                                        <span>24,99TL</span>
                                    </li>
                                    <li>KDV Dahil</li>
                                    <li>50 Krediye Göre</li>
                                    <li>%35 Hesaplı</li>
                                </ul>
                            </div>

                            <div class="col-sm-6 col-md-3 plan price-seven wow fadeInDown">
                                <ul>
                                    <li class="heading-four">
                                        <h1>500 Kredi</h1>
                                        <span>55,99TL</span>
                                    </li>
                                    <li>KDV Dahil</li>
                                    <li>50 Krediye Göre</li>
                                    <li>%45 Hesaplı</li></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    </div>
            </section>
            <section id="faq">
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
            </section>
            </div>
    <div class="get-started center wow fadeInDown">
        <p class="lead">Gönderilen veya alınan her elektronik fatura 1 kredi değerindedir.
            500’den fazla kredi ihtiyacınız varsa lütfen bizimle iletişime geçin.</p>
        <div class="request">
            <h4><a href="{{URL::route('register')}}">İlgileniyorsanız Sizi Arayalım</a></h4>
        </div>
    </div>
    </section>
@endsection
