@extends('layouts.master')
@section('content')
@section('title')
    Hizmet/Ürün Detayları
@endsection
<div class="row">
    <div class="col-sm-12 ">
        <div class="widget">
            <div class="widget-header ">
                <h2><i class="icon-chart-pie-1"></i> <strong>Hizmet/Ürün</strong> Detayı</h2>
                <div class="additional-btn">

                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3" >
                        <a href="{{URL::route('stok.urunduzenle',$urundetay->id)}}"> <button style="float: right" class="ui purple basic button">Düzenle</button></a>
                        <button onclick="sor()" style="float: right;" class="ui red button">Sil</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Ürün :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%" >{{$urundetay->name}}</a></div>
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Alış :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%" >{{$urundetay->purchasePrice}}</a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Satış :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$urundetay->salePrice}}</a></div>
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">KDV :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">%{{$urundetay->valuAddedTax}}</a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Stok Miktar :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$urundetay->amount}} {{$urundetay->unit}}</a></div>

                    </div>
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
        Ürün/Hizmet Siliniyor
    </div>
    <div class="content">
        <p>Bu işlemi onaylamanız durumunda ürün/hizmet geri dönüşü olmaksızın silinecektir.Devam etmek istediğinize emin misiniz?</p>
    </div>
    <div class="actions">
        <div class="ui red basic cancel inverted button">
            <i class="remove icon"></i>
            Hayır
        </div>
        <a href="{{URL::route('stok.urunsil',$urundetay->id)}}"> <div class="ui green ok inverted button">
                <i class="checkmark icon"></i>
                Evet
            </div></a>
    </div>
</div>
<script>
    $("#a23").addClass("active");
</script>



@endsection