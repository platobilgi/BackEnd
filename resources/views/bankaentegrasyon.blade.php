@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="get-started center wow fadeInDown">
            <h2>Gider kaydı tutmanın en kolay yolu</h2>
            <p class="lead">Zeplin ve Akbank işbirliği sayesinde tüm giderlerinizi tek tıkla Paraşüt'e aktarın.</p>
            <div class="request">
                <h4><a href="{{URL::route('register')}}">14 Gün Ücretsiz Deneyin</a></h4>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Elle veri girişine son</h2>
                            <h3>Akbank hesaplarınızı Zeplin'e ekleyin, tek tuşla tüm hesap hareketlerinizi içe aktarın.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Hesap bakiyeleriniz hep güncel</h2>
                            <h3>Eklediğiniz hesapların bakiyelerini kolayca güncelleyin, hesabınızda ne kadar olduğunu her an bilin.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Giderlerinizin ödemelerini Zeplin'den yapın</h2>
                            <h3>Zeplin'de ödemeniz gereken giderleri seçin, Akbank Direkt aracılığıyla tek seferde ödeyin. Üstelik 3 ay boyunca havale ve EFT ücreti ödemeden!</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Tüm personel giderlerini tek tuşla ödeyin</h2>
                            <h3>Ödenmesi bekleyen maaş ve cepten harcamaların tümünü tek seferde ödeyin. Üstelik 3 ay boyunca havale ve EFT ücreti ödemeden!</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
