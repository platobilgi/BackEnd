@extends('layouts.master')
@section('content')
@section('title')
    Müşteriler
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
                    <h2><strong>Müşteri</strong> Filtreleme</h2>
                    <div class="additional-btn">
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>

                <div class="widget-content padding">
                    {{Form::open(array('method' => 'post', 'class' => 'form-inline'))}}
                    <div id="filtre" class="form-group">
                        {{Form::select('filtre',array('0' => '', '1' => 'Bakiye Durumu'),null,array('class' => 'form-control','id'=>'filtre','onchange'=>'kontrol()' , 'style' =>'width:160px'))}}
                    </div>
                    <div id="bakiyeDurumu" class="form-group" style="display: none">
                        {{Form::select('bakdur',array('0' => '', '1' => 'Bakiyesi Olan','2'=>'Bakiyesi Olmayan'),null,array('class' => 'form-control','id'=>'bakdur','onchange'=>'musteriAra()'  , 'style' =>'width:160px'))}}
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
                    <h2><strong>Müşteriler</strong></h2>
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
                                    <a style="margin: 5px"href="{{URL::route('satislar.musteriekle')}}" class="ui purple basic button"><i class="fa fa-plus-circle"></i>Yeni Müşteri Ekle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                            <table data-sortable class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Çalışanlar</th>
                                    <th>Bakiye</th>
                                </tr>
                                </thead>

                                <tbody id="musteri-tablo">
                                @if(count($musteriler)!=0)

                                    @foreach($musteriler as $list)

                                    <tr>
                                        <td><strong>{{$list->name}}</strong></td>
                                        <td>{{$list->balance}}</td>

                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{URL::route('satislar.musteriduzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                <a href="{{URL::route('satislar.musteriDetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                            </div>
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



<script>
    function kontrol() {
        if($("select#filtre").val()==1){
            $("#bakiyeDurumu").show();
        }


    }

</script>

<script>
    $("#a13").addClass("active");
</script>

@if(count($musteriler)!=0)

    <script>
        function musteriAra() {
            arama = $("#arama").val();
            bakdur = $("#bakdur").val();


                $.ajax({
                type:'get',
                url:'{{URL::route('panel')}}/filterMusteri/',
                data:{arama:arama,bakdur:bakdur},
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
                    for (i=0;i<=x;i++){
                        $("#musteri-tablo").hide();
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].name+"</strong></td><td>"+data[i].balance+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('satislar.musteriduzenle',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('satislar.musteriDetay',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");
                    }}
            });
        }
    </script>
@endif

@endsection
