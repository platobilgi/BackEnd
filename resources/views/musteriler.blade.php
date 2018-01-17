@extends('layouts.app')
@section('content')
    <section id="about-us">
        <div class="container">
            <!-- our-team -->
            <div class="team">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man1.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Emre Güneş</h4>
                                    <h5>İş Yeri Sahibi,Ağustos Teknoloji</h5>
                                </div>
                            </div><!--/.media -->
                            <p> “Paraşüt ile beraber e-Fatura geçişimizi tamamladık. Bir çok manuel operasyondan kurtulduk. Hem kestiğimiz faturalarda hız kazandık hem de maliyet avantajımız oluştu.”</p>
                        </div>
                    </div><!--/.col-lg-4 -->


                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man2.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Mehmet Akşipal</h4>
                                    <h5>Kurucu Ortak, Alpin İş Sağlığı ve Güvenliği</h5>
                                </div>
                            </div><!--/.media -->
                            <p>“Paraşüt'ün fatura basımı, paylaşımı ve takibi özellikleri ile bu işlemler kolaylaştı ve tahsilatlarımız hızlandı. Dolayısı ile proje finansmanlarımız rahatladı.”</p>
                        </div>
                    </div><!--/.col-lg-4 -->
                </div> <!--/.row -->
                <div class="row team-bar">
                    <div class="first-one-arrow hidden-xs">
                        <hr>
                    </div>
                    <div class="first-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="second-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="third-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="fourth-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                </div> <!--skill_border-->

                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man3.jpg')}}" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <h4>Hacı Mustafa Sağ</h4>
                                    <h5>İş Yeri Sahibi, Semfil, Yarncity</h5>
                                </div>
                            </div><!--/.media -->
                            <p>“Mobil uygulaması sayesinde her yerden giderlerimizi girebiliyoruz. Hazır raporlar ile geçmişi ve mevcut durumu analiz ediyor olabilmek ise büyük kolaylık.”</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man4.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Sinan Zabunoğlu</h4>
                                    <h5>Kurucu Ortak, İyi Sahne</h5>
                                </div>
                            </div><!--/.media -->
                            <p>“Paraşüt’e geçmemiz ile birlikte Google Docs üzerinde tuttuğumuz hesap takip formları ve iş avansı takip belgeleri artık yok hükmünde.”</p>
                        </div>
                    </div>
                </div>	<!--/.row-->
            </div><!--section-->
            <br>
            <div class="team">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man1.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Emre Güneş</h4>
                                    <h5>İş Yeri Sahibi,Ağustos Teknoloji</h5>
                                </div>
                            </div><!--/.media -->
                            <p> “Paraşüt ile beraber e-Fatura geçişimizi tamamladık. Bir çok manuel operasyondan kurtulduk. Hem kestiğimiz faturalarda hız kazandık hem de maliyet avantajımız oluştu.”</p>
                        </div>
                    </div><!--/.col-lg-4 -->


                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man2.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Mehmet Akşipal</h4>
                                    <h5>Kurucu Ortak, Alpin İş Sağlığı ve Güvenliği</h5>
                                </div>
                            </div><!--/.media -->
                            <p>“Paraşüt'ün fatura basımı, paylaşımı ve takibi özellikleri ile bu işlemler kolaylaştı ve tahsilatlarımız hızlandı. Dolayısı ile proje finansmanlarımız rahatladı.”</p>
                        </div>
                    </div><!--/.col-lg-4 -->
                </div> <!--/.row -->
                <div class="row team-bar">
                    <div class="first-one-arrow hidden-xs">
                        <hr>
                    </div>
                    <div class="first-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="second-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="third-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="fourth-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                </div> <!--skill_border-->

                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man3.jpg')}}" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <h4>Hacı Mustafa Sağ</h4>
                                    <h5>İş Yeri Sahibi, Semfil, Yarncity</h5>
                                </div>
                            </div><!--/.media -->
                            <p>“Mobil uygulaması sayesinde her yerden giderlerimizi girebiliyoruz. Hazır raporlar ile geçmişi ve mevcut durumu analiz ediyor olabilmek ise büyük kolaylık.”</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="{{URL::asset('images/man4.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Sinan Zabunoğlu</h4>
                                    <h5>Kurucu Ortak, İyi Sahne</h5>
                                </div>
                            </div><!--/.media -->
                            <p>“Paraşüt’e geçmemiz ile birlikte Google Docs üzerinde tuttuğumuz hesap takip formları ve iş avansı takip belgeleri artık yok hükmünde.”</p>
                        </div>
                    </div>
                </div>	<!--/.row-->
            </div><!--section-->
        </div><!--/.container-->
    </section><!--/about-us-->

    @endsection