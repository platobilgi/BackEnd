@extends('layouts.master')
@section('content')
    @section('title')
         Faturalar
        @endsection
          <div class="page-heading">
              <div class="row">
                  <div class="col-sm-12 portlets">
                      <div class="widget">
                          <div class="widget-header transparent">
                              <h2><strong>Fatura</strong> Filtreleme</h2>
                              <div class="additional-btn">
                                  <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                              </div>
                          </div>

                      <div class="widget-content padding">
                          {{Form::open(array('method' => 'post', 'class' => 'form-inline', 'role'=>'form'))}}
                          <div id="filtre" class="form-group">
                                  {{Form::select('filtre',array('0' => 'Filtre Seçenekleri', '1' => 'Tahsilat Durumu','2' => 'Yazdırılma Durumu','3'=>'Paylaşım Durumu','4'=>'Düzenlenme Tarihi','5'=>'Vade Tarihi','6'=>'Fatura Türü'),null,array('class' => 'form-control','id'=>'filtre','onchange'=>'kontrol()' ))}}
                              </div>
                          <div id="tahsilatDurumu" class="form-group" style="display: none">
                              {{Form::select('tahdur',array('0' => 'Tahsilat Durumu', '1' => 'Vadesi Geçmiş','2'=>'Vadesi Gelmemiş','3' => 'Vadesi Bilinmeyen','4'=>'Tahsil Edilmiş'),null,array('class' => 'form-control','id'=>'tahdur','onchange'=>'faturaAra()'  , 'style' =>'width:160px'))}}
                          </div>
                          <div id="yazdirilmaDurumu" class="form-group"  style="display: none">
                              {{Form::select('yazdur',array('0' => 'Yazdırılma Durumu', '5' => 'Yazdırılmış','6' => 'Yazdırılmamış'),null,array('class' => 'form-control','id'=>'yazdur','onchange'=>'faturaAra()'  , 'style' =>'width:160px'))}}
                              </div>
                          <div id="paylasimDurumu" class="form-group" style="display: none">
                               {{Form::select('paydur',array('0' => 'Paylaşım Durumu', '7' => 'Paylaşılmamış','8' => 'Paylaşılmış'),null,array('class' => 'form-control','id'=>'paydur','onchange'=>'faturaAra()' ))}}
                              </div>
                          <div id="duzenlenmeTarihi" class="form-group" style="display: none">
                              {{Form::date('duztar',null,['class'=>'form-control','data-mask'=>'9999-99-99', 'placeholder'=>'yyyy-mm-dd','onchange'=>'faturaAra()','id'=>'duztar'])}}
                          </div>
                          <div id="vadeTarihi" class="form-group" style="display: none">
                              {{Form::date('vadtar',null,['class'=>'form-control','data-mask'=>'9999-99-99', 'placeholder'=>'yyyy-mm-dd','onchange'=>'faturaAra()','id'=>'vadtar'])}}
                          </div>
                          <div id="faturaTuru" class="form-group" style="display: none">
                              {{Form::select('fattur',array('0' => 'Fatura Türü', '1' => 'Satış Faturası','2' => 'İade Faturası','3'=>'Satış Proforması'),null,array('style' =>'width:160px','class' => 'form-control','id'=>'fattur','onchange'=>'faturaAra()'))}}
                          </div>
                          <div id="kategori" class="form-group" style="display: none" >
                              <div id="dene" class="ui search ">
                                  <div class="ui icon input">
                                      <input class="prompt" type="text" id="arakategori" onkeypress="kategoriara()" placeholder="Kategori Ara..">
                                      <i class="search icon"></i>
                                  </div>
                                  <div class="results" ></div>
                              </div>
                              <input  type="text" id="donus"  style="display: none" placeholder="">

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
                              <h2><strong>Satış</strong> Faturaları</h2>
                              <div class="additional-btn">
                                  <a href="#" onclick="temizle()" class="hidden reload"><i class="icon-ccw-1"></i></a>
                              </div>
                          </div>
                          <div class="widget-content">
                              <div class="data-table-toolbar">
                                  <div class="row">
                                      <div class="col-md-4"><form role="form">
                                              <input id="arama" type="text" class="form-control" onkeyup="faturaAra()" placeholder="Search...">
                                          </form></div>
                                      <div class="col-md-8">
                                          <div class="toolbar-btn-action">
                                              <a href="{{URL::route('satislar.faturaekle')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Yeni Fatura Oluştur</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="table-responsive">
                                  <table data-sortable class="table table-hover table-striped">
                                      <thead>
                                      <tr>
                                          <th>Fatura Açıklaması</th>
                                          <th>Düzenlenme Tarihi</th>
                                          <th>Vade Tarihi</th>
                                          <th>Meblağ</th>
                                      </tr>
                                      </thead>
                                      <tbody id="fatura-tablo">
                                      @if(count($faturalar)!=0)
                                          @foreach($faturalar as $fatura)
                                          <tr>
                                          <td><strong>{{$fatura->description}}</strong></td>
                                          <td>{{$fatura->dateOfIssue}}</td>
                                          <td>{{$fatura->expiryDate}}</td>
                                              <td><strong>Toplam</strong>: {{$fatura->fee}} - <strong>Kalan</strong>: {{$fatura->fee-$fatura->paid}} </td>
                                          <td>
                                              <div class="btn-group btn-group-xs">
                                                  <a href="{{URL::route('satislar.faturaduzenle',$fatura->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                  <a href="{{URL::route('satislar.faturadetay',$fatura->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
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
                      $("#tahsilatDurumu").show();
                  }
                  else if($("select#filtre").val()==2) {
                      $("#yazdirilmaDurumu").show();
                  }
                  else if($("select#filtre").val()==3) {
                      $("#paylasimDurumu").show();
                  }
                  else if($("select#filtre").val()==4) {
                      $("#duzenlenmeTarihi").show();
                  }
                  else if($("select#filtre").val()==5) {
                      $("#vadeTarihi").show();
                  }
                  else if($("select#filtre").val()==6) {
                      $("#faturaTuru").show();
                  }
                  else if($("select#filtre").val()==7) {
                      $("#kategori").show();
                  }
              }

          </script>
@if(count($faturalar)!=0)
          <script>
              function faturaAra() {
                  arama = $("#arama").val();
                  tahdur = $("#tahdur").val();
                  yazdur = $("#yazdur").val();
                  paydur  = $("#paydur").val();
                  duztar  = $("#duztar").val();
                  vadtar  = $("#vadtar").val();
                  fattur  = $("#fattur").val();
                  var _token= $('[name="csrf_token"]').attr('content');


                  $.ajax({
                      type:'get',
                      url:'{{URL::route('panel.filtrefaturalar')}}',
                      data:{arama:arama,tahdur:tahdur,yazdur:yazdur,paydur:paydur,fattur:fattur,vadtar:vadtar,duztar:duztar},
                      success:function(data){
                          $("#fatura-tablo").hide();
                          if (arama){
                          }
                          else{

                          }
                          x=data.length;
                          $("#aramaSonuclari").show();
                          $("#aramaSonuclari").empty();
                          for (i=0;i<x;i++){
                              $("#fatura-tablo").hide();
                              $("#aramaSonuclari").append("<tr><td><strong>"+data[i].description+"</strong></td><td>"+data[i].dateOfIssue+"</td><td>"+data[i].expiryDate+"</td><td><strong>Toplam</strong>: {{$fatura->fee}} - <strong>Kalan</strong>:{{$fatura->fee-$fatura->paid}} </td><td><div class='btn-group btn-group-xs'><a href='{{URL::route('satislar.faturaduzenle',$fatura->id)}}' data-toggle='tooltip' title='Düzenle' class='btn btn-default'><i class='fa fa-edit'></i></a><a href='{{URL::route('satislar.faturadetay',$fatura->id)}}' data-toggle='tooltip' title='Detay' class='btn btn-default'><i class='glyphicon glyphicon-info-sign'></i></a></div></td></tr>");
                          }}
                  });
              }
          </script>
          @endif
    <script>
        function temizle() {
            $("#arama").val('');
            $("#tahdur").val('');
            $("#yazdur").val('');
            $("#paydur").val('');
            $("#duztar").val('');
            $("#vadtar").val('');
            $("#fattur").val('');
            $("#donus").val('');
            faturaAra();

        }
    </script>
<script>
    $("#a12").addClass("active");
</script>


        @endsection
