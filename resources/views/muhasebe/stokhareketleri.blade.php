@extends('layouts.master')
@section('content')
@section('title')
    Stok Hareketleri
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
                    <h2><strong>Stok Hareketi</strong> Filtreleme</h2>
                    <div class="additional-btn">
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>

                <div class="widget-content padding">
                    {{Form::open(array('method' => 'post', 'class' => 'form-inline'))}}
                    <div id="filtre" class="form-group">
                        {{Form::select('filtre',array('0' => '', '1' => 'Hareket Türü','2' => 'Fatura Durumu','3' => 'Düzenlenme Tarihi'),null,array('class' => 'form-control','id'=>'filtre','onchange'=>'kontrol()' , 'style' =>'width:160px'))}}
                    </div>
                    <div id="yon" class="form-group" style="display: none">
                        {{Form::select('yon',array('0' => '', '9' => 'Stok Girişi', '10' => 'Stok Çıkışı'),null,array('class' => 'form-control','id'=>'yon','onchange'=>'kontrol()'  , 'style' =>'width:160px'))}}
                    </div>
                    <div id="fatdur" class="form-group"  style="display: none">
                        {{Form::select('fatdur',array('0' => '', '1' => 'Faturalandırılmış', '2' => 'Faturalandırılmamış'),null,array('class' => 'form-control','id'=>'fatdur','onchange'=>'kontrol()'  , 'style' =>'width:160px'))}}
                    </div>
                    <div id="duztar" class="form-group" style="display: none">
                        {{Form::date('duztar','',array('class' => 'form-control','onchange'=>'musteriAra()','id'=>'duztar'))}}
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
                    <h2><strong>Stok</strong> Hareketleri</h2>
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
                                    <a style="margin: 5px"href="{{URL::route('stok.stokcikis')}}" class="ui purple basic button"><i class="fa fa-plus-circle"></i>Stok Çıkışı Ekle</a>
                                    <a style="margin: 5px"href="{{URL::route('stok.stokgiris')}}" class="ui yellow basic button"><i class="fa fa-plus-circle"></i>Stok Girişi Ekle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if($gelen)

                            <table data-sortable class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Açıklama</th>
                                    <th>İşlem Tipi</th>
                                    <th>Düzenlenme Tarihi</th>
                                </tr>
                                </thead>

                                <tbody id="urun-tablo">
                                @foreach($gelen as $list)
                                    <tr>
                                        <td><strong>{{$list->description}}</strong></td>
                                        <td>@if($list->types_id===9){{"Stok Giriş"}}@else{{"Stok Çıkış"}}@endif</td>
                                        <td>{{$list->dateOfIssue}}</td>

                                        <td>
                                            <div class="btn-group btn-group-xs col-md-offset-8">
                                                    <a href="@if($list->types_id===9){{URL::route('stok.stokgirisduzenle',$list->id)}}@else{{URL::route('stok.stokcikisduzenle',$list->id)}} @endif" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    <a href="@if($list->types_id===9){{URL::route('stok.stokgirisdetay',$list->id)}}@else{{URL::route('stok.stokcikisdetay',$list->id)}} @endif" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                                <tbody id="aramaSonuclari" style="display: none">
                                </tbody>

                            </table>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function kontrol() {
        if($("select#filtre").val()==1){
            $("#yon").show();
            musteriAra();
        }
        else if($("select#filtre").val()==2) {
            $("#fatdur").show();
            musteriAra();
        }
        else if($("select#filtre").val()==3) {
            $("#duztar").show();
            musteriAra();
        }



    }

</script>
@if(is_null($gelen))

<script>
    var _token= $('[name="csrf_token"]').attr('content');
    function musteriAra() {
        arama = $("#arama").val();
        yon = $("select#yon").val();
        fatdur = $("select#fatdur").val();
        duztar = $("#duztar").val();


        $.ajax({
            type:'get',
            url:'{{URL::route('panel.filtrestok')}}',
            data:{_token:_token,arama:arama,fatdur:fatdur,yon:yon,duztar:duztar},
            success:function(data){
                $("#urun-tablo").hide();
                if (arama){
                }
                else{
                    $("#urun-tablo").show();
                    $("#aramaSonuclari").hide();
                }
                x=data.length;
                $("#aramaSonuclari").show();
                $("#aramaSonuclari").empty();
                for (i=0;i<=x;i++){
                    $("#urun-tablo").hide();

                    if (data[i].types_id===9){
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].description+"</strong></td><td>Stok Girişi</td><td>"+data[i].dateOfIssue+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('stok.stokgirisduzenle',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('stok.stokgirisdetay',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");

                    }
                    if (data[i].types_id===10){
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].description+"</strong></td><td>Stok Çıkışı</td><td>"+data[i].dateOfIssue+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('stok.stokcikisduzenle',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('stok.stokcikisdetay',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");

                    }

                }}
        });
    }
</script>
@endif
<script>
    $("#a42").addClass("active");
</script>


@endsection
