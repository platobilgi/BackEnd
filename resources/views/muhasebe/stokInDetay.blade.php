@extends('layouts.master')
@section('content')
@section('title')
    Stok Detayları
@endsection
<div class="row">
    <div class="col-sm-12 ">
        <div class="widget">
            <div class="widget-header ">
                <h2><i class="icon-chart-pie-1"></i> <strong>Stok</strong> Detayı</h2>
                <div class="additional-btn">

                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3" >
                        <a href="{{URL::route('stok.stokgirisduzenle',$stok->id)}}"> <button style="float: right" class="ui purple basic button">Düzenle</button></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Açıklama :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%" >{{$stok->description}}</a></div>
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Düzenlenme Tarihi :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%" >{{$stok->dateOfIssue}}</a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Adres :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$stok->address}}</a></div>
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Sevk Tarihi :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$stok->shipmentDate}}</a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Ürün :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$urun->name}}</a></div>
                        <div class="col-md-2"><a class="ui basic grey label" style="width: 100%">Miktar :</a></div>
                        <div class="col-md-4"><a class="ui basic grey label" style="border: none;width: 100%">{{$stok->amount}}</a></div>

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

<script>
    $("#a42").addClass("active");
</script>



@endsection