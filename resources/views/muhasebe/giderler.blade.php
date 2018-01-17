@extends('layouts.master')
@section('content')
@section('title')
    Giderler
@endsection
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="page-heading">
    <div class="row">
        <div class="col-sm-12 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Gider</strong> Filtreleme</h2>
                    <div class="additional-btn">
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>

                <div class="widget-content padding">
                    {{Form::open(array('method' => 'post', 'class' => 'form-inline'))}}
                    <div id="filtre" class="form-group">
                        {{Form::select('filtre',array('0' => '', '1' => 'Ödeme Durumu','2' => 'Gider Türü','3' => 'Düzenlenme Tarihi','4' => 'Vade Tarihi'),null,array('class' => 'form-control','id'=>'filtre','onchange'=>'kontrol()' , 'style' =>'width:160px'))}}
                    </div>
                    <div id="odemeDurum" class="form-group" style="display: none">
                        {{Form::select('odemedurum',array('0' => '', '1' => 'Vadesi Geçen', '2' => 'Vadesi Gelmemiş', '3' => 'Vadesi Bilinmeyen', '4' => 'Ödenmiş'),null,array('class' => 'form-control','id'=>'odemedurum','onchange'=>'musteriAra()'  , 'style' =>'width:160px'))}}
                    </div>
                    <div id="giderTuru" class="form-group"  style="display: none">
                        {{Form::select('giderturu',array('0' => '', '3' => 'Fiş/Fatura', '4' => 'Maaş/Prim', '2' => 'Vergi/Sgk Primi', '1' => 'Banka Gideri', '5' => 'İade Faturası'),null,array('class' => 'form-control','id'=>'giderturu','onchange'=>'musteriAra()'  , 'style' =>'width:160px'))}}
                    </div>
                    <div id="duzenlenmetarihi" class="form-group" style="display: none">
                        {{Form::date('duzenlenmeTarihi','',array('class' => 'form-control','onchange'=>'musteriAra()','id'=>'duzenlenmeTarihi'))}}
                    </div>
                    <div id="vadetarihi" class="form-group" style="display: none">
                        {{Form::date('vadeTarihi','',array('class' => 'form-control','onchange'=>'musteriAra()','id'=>'vadeTarihi'))}}
                    </div>



                </div>

                {{Form::close()}}

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Gider</strong> Faturaları</h2>
                    <div class="additional-btn">
                        <a href="#" onclick="temizle()" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="data-table-toolbar">
                        <div class="row">
                            <div class="col-md-4"><form role="form">
                                    <input type="text"  class="form-control" id="arama" onkeyup="musteriAra()"  placeholder="Ara..." style="width:100%">
                                </form></div>
                            <div class="col-md-8">
                                <div class="toolbar-btn-action">
                                    <a style="margin: 5px"href="{{URL::route('giderler.fisfaturaEkle')}}" class="ui purple basic button"><i class="fa fa-plus-circle"></i>Yeni Fatura Gideri Ekle</a>
                                    <a style="margin: 5px"href="{{URL::route('giderler.vergiEkle')}}" class="ui yellow basic button"><i class="fa fa-plus-circle"></i>Yeni Vergi/SGK Gideri EKle</a>
                                    <a style="margin: 5px" href="{{URL::route('giderler.bankagiderEkle')}}" class="ui olive basic button"><i class="fa fa-plus-circle"></i>Yeni Banka Gideri Ekle</a>
                                    <a style="margin: 5px"href="{{URL::route('giderler.maasprimEkle')}}" class="ui teal basic button"><i class="fa fa-plus-circle"></i>Yeni Maaş Gideri Ekle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">

                        <table data-sortable class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Açıklama</th>
                                <th>Düzenlenme Tarihi</th>
                                <th>Bakiye</th>
                            </tr>
                            </thead>

                            <tbody id="musteri-tablo">

                               @if(count($liste)!=0)
                            @foreach($liste as $list)
                                <tr>
                                    <td><strong>{{$list->description}}</strong></td>
                                    <td>{{$list->issue_date}}</td>
                                    <td>{{$list->fee}}</td>
                                    <td>
                                        @if($list->status_id==4)
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{URL::route('giderler.maasprimDuzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                <a href="{{URL::route('giderler.maasDetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                            </div>
                                        @endif
                                        @if($list->status_id==3)
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{URL::route('giderler.fisfaturaDuzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    <a href="{{URL::route('giderler.fisfaturaDetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                                </div>
                                            @endif
                                            @if($list->status_id==2)
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{URL::route('giderler.vergiDuzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    <a href="{{URL::route('giderler.vergiDetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                                </div>
                                            @endif
                                            @if($list->status_id==1)
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{URL::route('giderler.bankagiderDuzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    <a href="{{URL::route('giderler.bankaDetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                                </div>
                                            @endif
                                    </td>
                                </tr>
                            @endforeach
                                   @endif
                            </tbody>

                            <tbody id="aramaSonuclari" style="display: none">
                            </tbody>

                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(count($liste)!=0)
<script>
    function musteriAra() {
        arama = $("#arama").val();
        odedur = $("select#odemedurum").val();
        gidertur = $("select#giderturu").val();
        duztar = $("#duzenlenmeTarihi").val();
        vadtar = $("#vadeTarihi").val();
        var _token= $('[name="csrf_token"]').attr('content');


        $.ajax({
            type:'get',
            url:'{{URL::route('panel.filtregiderler')}}',
            data:{_token:_token,arama:arama,odedur:odedur,gidertur:gidertur,duztar:duztar,vadtar:vadtar},
            success:function(data){
                $("#musteri-tablo").hide();
                if (arama){
                }
                else{
                    $("#musteri-tablo").show();
                    $("#aramaSonuclari").hide();
                }
                x=data.length;
                $("#aramaSonuclari").show();
                $("#aramaSonuclari").empty();
                for (i=0;i<x;i++){
                    $("#musteri-tablo").hide();

                    if (data[i].status_id===4){
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].description+"</strong></td><td>"+data[i].issue_date+"</td><td>"+data[i].fee+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('giderler.maasprimDuzenle',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('giderler.maasDetay',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");

                    }
                    if (data[i].status_id===1){
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].description+"</strong></td><td>"+data[i].issue_date+"</td><td>"+data[i].fee+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('giderler.bankagiderDuzenle',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('giderler.bankaDetay',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");

                    }
                    if (data[i].status_id===2){
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].description+"</strong></td><td>"+data[i].issue_date+"</td><td>"+data[i].fee+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('giderler.vergiDuzenle',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('giderler.vergiDetay',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");

                    }
                    if (data[i].status_id===3){
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].description+"</strong></td><td>"+data[i].issue_date+"</td><td>"+data[i].fee+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('giderler.fisfaturaDuzenle',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('giderler.fisfaturaDetay',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");

                    }
                }}
        });
    }
</script>
@endif
<script>
    function kontrol() {
        if($("select#filtre").val()==1){
            $("#odemeDurum").show();
            musteriAra();
        }
        else if($("select#filtre").val()==2) {
            $("#giderTuru").show();
            musteriAra();
        }
        else if($("select#filtre").val()==3) {
            $("#duzenlenmetarihi").show();
            musteriAra();
        }
        else if($("select#filtre").val()==4) {
            $("#vadetarihi").show();
            musteriAra();
        }
        else if($("select#filtre").val()==5) {
            $("#kategori").show();
            musteriAra();
        }


    }

</script>
<script>
    $("#a21").addClass("active");
</script>


@endsection
