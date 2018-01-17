@extends('layouts.app')
@section('content')
    <section id="blog" class="container">
        <div class="center">
            <h2>Zeplin Blog</h2>
            <p class="lead">Girişimciler ve işini büyütmek isteyenler için kaynaklar</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date">07  NOV</span>
                                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                                    <span><i class="fa fa-comment"></i> <a href="">2 Comments</a></span>
                                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="{{URL::asset('images/blog/blog1.jpg')}}" width="100%" alt="" /></a>
                                <h2><a href="blog-item.html">e-Arşiv faturası nedir? Nasıl kullanılır?</a></h2>
                                <h3>Bir elektronik fatura türü olan e-Arşiv hakkında en çok duyduğumuz soruları yanıtladık. Sizin de e-Arşiv ile ilgili sorularınız varsa yorum olarak ekleyebilirsiniz.</h3>
                                <a class="btn btn-primary readmore" href="blog-item.html">Devamını Oku <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Önceki Sayfa</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Sonraki Sayfa<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div>
                    <div class="col-md-12 wow fadeInDown">
                        <div class="accordion">
                            <div class="panel-group" id="accordion1">
                                <div class="panel panel-default">
                                    <div class="panel-heading active">
                                        <h3 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">Ön Muhasebe<i class="fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h3>
                                    </div>

                                    <div id="collapseOne1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="media accordion-inner">
                                                <div class="media-body">
                                                    <a href="#"><h4>e-Arşiv faturası nedir? Nasıl kullanılır?</h4></a>
                                                    <a href="#"><h4>e-Fatura hakkında 20 soru 20 cevap</h4></a>
                                                    <a href="#"><h4>e-Fatura hakkında 20 yanlış bilgi</h4></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                                Girişimcilik
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapseTwo1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <a href="#"><h4>Genç Girişimciler için Devlet Teşviki</h4></a>
                                            <a href="#"><h4>Şirketten nasıl para çıkartabilirim?</h4></a>
                                            <a href="#"><h4>Fatih Canan: Girişimcilik Dinamizm İster</h4></a>                                     </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                                Zeplin
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapseThree1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <a href="#"><h4>Ürün Geliştirirken Müşteri Yolculuğunu Anlayabilmek</h4></a>
                                            <a href="#"><h4>Verileriniz Zeplin'de Güvende</h4></a>
                                            <a href="#"><h4>Zeplin Mobil: Neler Gelişti ve Yol Haritamız</h4></a>                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </aside>
                </div>
            </div>
    </section>
    @endsection