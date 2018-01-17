@extends('layouts.master')
@section('content')
@section('title')
    Hizmet ve Ürünler
@endsection
<div class="page-heading">
    <div class="row">
        <div class="col-md-12 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Hizmet ve Ürünler</strong></h2>
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
                                    <a style="margin: 5px"href="{{URL::route('stok.hizmetveurunekle')}}" class="ui purple basic button"><i class="fa fa-plus-circle"></i>Yeni Ürün/Hizmet Ekle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">

                            <table data-sortable class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Ürün Adı</th>
                                    <th>Stok Miktarı</th>
                                    <th>Alış Fiyatı(Vergiler Hariç)</th>
                                    <th>Satış Fiyatı(Vergiler Hariç)</th>

                                </tr>
                                </thead>

                                <tbody id="musteri-tablo">
                                @if(!is_null($liste))
                                @foreach($liste as $list)
                                    <tr>
                                        <td><strong>{{$list->name}}</strong></td>
                                        <td>{{$list->amount}}</td>
                                        <td>{{$list->purchasePrice}}</td>
                                        <td>{{$list->salePrice}}</td>


                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{URL::route('stok.urunduzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                <a href="{{URL::route('stok.urundetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
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
@if(is_null($liste))
    <script>
        var _token= $('[name="csrf_token"]').attr('content');
        function musteriAra() {
            arama = $("#arama").val();


            $.ajax({
                type:'get',
                url:'{{URL::route('panel.filtreurunler')}}',
                data:{_token:_token,arama:arama},
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
                        $("#aramaSonuclari").append("<tr><td><strong>"+data[i].name+"</strong></td><td>"+data[i].amount+"</td><td>"+data[i].purchasePrice+"</td><td>"+data[i].salePrice+"</td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('stok.urundetay',$list->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('stok.urunduzenle',$list->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");
                    }}
            });
        }
    </script>
    @endif
<script>
    function kontrol() {
        if($("select#filtre").val()==1){
            $("#bakiyeDurumu").show();
        }


    }

</script>
<script>
    $("#a41").addClass("active");
</script>


@endsection
