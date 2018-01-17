@extends('layouts.master')
@section('content')
@section('title')
    Müşteri Detayları
@endsection
<div class="row">
    <div class="col-sm-12 ">
        <div class="widget">
            <div class="widget-header ">
                <h2><i class="icon-chart-pie-1"></i> <strong>Müşteri</strong> Detayı</h2>
                <div class="additional-btn">

                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3" >
                        <a href="{{URL::route('satislar.musteriduzenle',$musteri->id)}}"> <button style="float: right" class="ui purple basic button">Düzenle</button></a>
                        <button onclick="sor()" style="float: right;" class="ui red button">Sil</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Müşteri Adı :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%" >{{$musteri->name}}</a></div>
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Kısa İsim :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%" >{{$musteri->short_name}}</a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">E-Posta Adresi :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$musteri->email}}</a></div>
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Telefon Numarası :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$musteri->phone_number}}</a></div>


                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Faks Numarası :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$musteri->fax}} </a></div>

                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Adres :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$musteri->address}} </a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Vergi Numarası :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$musteri->tax_number}} </a></div>

                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Vergi Dairesi :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$musteri->tax_administration}} </a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">IBAN Numarası :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$musteri->iban}} </a></div>


                    </div>
                </div>

            @foreach($fatura as $fat)
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Fatura Açıklaması :</a></div>
                            <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$fat->description}} </a></div>
                            <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Vade Tarihi :</a></div>
                            <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$fat->expiry_date}} </a></div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Toplam Ödenecek :</a></div>
                            <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$fat->fee}} </a></div>
                            <div class="col-md-2"><a href="{{URL::route('satislar.faturadetay',$fat->id)}}" class="ui basic purple label" style="width: 100%">Detayları Görüntüle</a></div>
                            </div>


                        </div>
            <br>

            @endforeach
            </div>




            </div>
        </div>
    </div>
</div>
<script>
    function sor() {
        $('.ui.basic.modal')
            .modal('show')
        ;
    }

    ;
</script>
<div class="ui basic modal">
    <div class="ui icon header">
        <i class="archive icon"></i>
        Müşteri Siliniyor
    </div>
    <div class="content">
        <p>Bu işlemi onaylamanız durumunda müşteri geri dönüşü olmaksızın silinecektir.Devam etmek istediğinize emin misiniz?</p>
    </div>
    <div class="actions">
        <div class="ui red basic cancel inverted button">
            <i class="remove icon"></i>
            Hayır
        </div>
        <a href="{{URL::route('satislar.musterisil',$musteri->id)}}"> <div class="ui green ok inverted button">
                <i class="checkmark icon"></i>
                Evet
            </div></a>
    </div>
</div>




@endsection