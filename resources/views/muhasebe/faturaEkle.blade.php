@extends('layouts.master')
@section('content')
@section('title')
    Fatura Ekle
@endsection

{{Form::model($fatura,array('route' => 'satislar.faturaekle' , 'method' => 'post'))}}

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Fatura</strong> Ekle</h2>
            </div>
            <div class="widget-content padding">
                <div class="form-group">
                    <label>Fatura Açıklaması</label>
                    {{Form::text('description', '',array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Müşteri</label>
                    <input id="customers" type="text" class="form-control" placeholder="Müşteri adını yazınız" autocomplete="off"  name="customers"/>
                    <input  name="customers_id" id="customers_id" onchange="tamamlaMusteri()" class="form-control" hidden>
                    @if ($errors->has('customers_id')) <p class="help-block">{{ $errors->first('customers_id') }}</p> @endif



                </div>
                <div class="form-group">
                    <label>Düzenlenme Tarihi</label>
                    {{Form::date('dateOfIssue',\Carbon\Carbon::now(),array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Vade Tarihi</label>
                    {{Form::date('expiryDate','',array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <div class="col-sm-2 col-md-offset-1">
                            {{Form::button('Döviz Değiştir',array('class'=>'ui blue basic button md-trigger','onclick'=>'goster2()','data-modal'=>"md-rotate-from-bottom"))}}
                        </div>
                    </div>

                </div>

                <div class="form-group">

                    <label>Seri No</label>
                    {{Form::text('serialNumber','',array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Sıra No</label>
                    {{Form::number('rowNumber','',array('class' => 'form-control'))}}
                </div>

                <div class="form-group">
                    <label id="fatura_kur">Fatura Kuru</label>
                    <br>
                    <div class="ui labeled input disabled">
                        <div id="kur_isareti" class="ui label">₺</div>
                        <input id="kur_degeri" type="text" value="1" placeholder="1">
                    </div>
                    @if ($errors->has('currency')) <p class="help-block">{{ $errors->first('currency') }}</p> @endif
                    @if ($errors->has('exchangeRate')) <p class="help-block">{{ $errors->first('exchangeRate') }}</p> @endif


                </div>

            </div>
            <div class="md-modal md-rotate-from-bottom" id="md-rotate-from-bottom" >
                <div class="md-content"style="background-color: #E4EAE6">
                    <div>
                        <label>Döviz Türü</label>
                        {{Form::select('currency',array('TRL' => 'Türk Lirası', 'USD' => 'Amerikan Doları','EUR' => 'Euro','GBP'=>'İngiliz Sterlini'),'TRL',array('class' => 'form-control','id'=>'currency'))}}
                        <label>Döviz Kuru</label>
                        {{Form::number('exchangeRate','1',array('class' => 'form-control','step'=>'0.01','id'=>'exchangeRate','onchange'=>'hesapla()'))}}
                        <br>
                        <a class="btn btn-danger md-close">Kapat</a>
                        <a class="btn btn-success md-close" onclick="kurdegistir()">Dövizi Değiştir</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2> <strong>Faturaya</strong> Ürün <strong>Ekle</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content">
                <div class="table-responsive">
                    <table id="tablocuk" data-sortable class="table">
                        <thead>
                        <tr>
                            <th>Hizmet ve Ürün</th>
                            <th>Miktar</th>
                            <th>Birim Fiyat</th>
                            <th>Vergi</th>
                            <th>Toplam</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td><input name="urun[1][urun]" id="urun" type="text" class="form-control urunler1" placeholder="Urun adını yazınız" autocomplete="off"  />

                                {{Form::text('urun[1][urunID]','',array('class' => 'form-control urunID1','style'=>'display:auto','id'=>'urunID','hidden'))}}

                            </td>
                            <td>{{Form::number('urun[1][miktar]','',array('class' => 'form-control miktar1','id'=>'miktar','oninput'=>'hesapla(1)'))}}</td>
                            <td>{{Form::number('urun[1][birimFiyat]','',array('class' => 'form-control birimFiyat1','id'=>'birimFiyat','onchange'=>'hesapla(1)','step'=>'0.01'))}}</td>
                            <td>{{Form::select('urun[1][vergi]',array('0' => 'KDV %0', '1' => 'KDV %1' , '8' => 'KDV %8', '18' => 'KDV %18'),null,array('class' => 'form-control vergi1','id'=>'vergi','onchange'=>'hesapla(1)'))}}</td>
                            <td>{{Form::number('urun[1][toplam]','',array('class' => 'form-control toplam1','id'=>'toplam','step'=>'0.0000001'))}}</td>
                            <td><div class="dropdown"><button class="btn btn-theme dropdown-toggle" type="button" data-toggle="dropdown">+</button> {{Form::button('x',array('class' => 'btn btn-theme'))}}
                                    <ul class="dropdown-menu">
                                        <li id="aciklamaekle" class="aciklamaekle1"><a onclick="aciklamaEkle(1)">Açıklama Ekle</a></li>
                                        <li id="birimekle" class="birimekle1"><a onclick="birimEkle(1)">Birim Ekle</a></li>
                                        <li id="indirimekle" class="indirimekle1"><a onclick="indirimEkle(1)">İndirim Ekle</a></li>
                                        <li id="otvekle" class="otvekle1"><a onclick="otvEkle(1)">ÖTV Ekle</a></li>
                                        <li id="oivekle" class="oivekle1"><a onclick="oivEkle(1)">ÖİV Ekle</a></li>
                                    </ul>
                                </div>
                               </td>
                        </tr>
                        <tr>
                            <th id="birim1" class="birimler1" style="display: none">Birim</th>
                            <th id="aciklama1" class="aciklamalar1" style="display: none"> {{Form::label('aciklamaIceriklb','Açıklama:',array('class' => 'control-label'))}}</th>
                            <th id="indirim1" class="indirimler1" style="display: none"> {{Form::label('indirimlb','İndirim:',array('class' => 'control-label'))}}</th>
                            <th id="otv1" class="otvler1" style="display: none"> {{Form::label('otvlb','ÖTV:',array('class' => 'control-label'))}}</th>
                            <th id="oiv1" class="oivler1" style="display: none"> {{Form::label('oivlb','ÖİV:',array('class' => 'control-label'))}}</th>
                        </tr>
                        <tr>
                            <td id="birim2" class="birimler1" style="display: none">{{Form::number('urun[1][birim]','',array('class' => 'form-control','id'=>'birim' ))}}</td>
                            <td id="aciklama2" class="aciklamalar1" style="display: none">{{Form::text('urun[1][aciklamaIcerik]',' ',array('class' => 'form-control','style', 'id'=>'aciklamaIcerik'))}}</td>
                            <td id="indirim2" class="indirimler1" style="display: none">{{Form::text('urun[1][indirim]','0',array('class' => 'form-control','style','id'=>'indirim'))}}</td>
                            <td id="otv2" class="otvler1" style="display: none">{{Form::text('urun[1][otv]','0',array('class' => 'form-control','style','id'=>'otv'))}}</td>
                            <td id="oiv2" class="oivler1" style="display: none">{{Form::text('urun[1][oiv]','0',array('class' => 'form-control','style','id'=>'oiv'))}}</td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <a href="javascript:;" id='satirEkle' class="form-control" >+ Yeni Satır Ekle</a>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3" style="float: right">
                            {{Form::label('aratoplam','Ara Toplam : 0,00₺',array('class' => 'form-control','style'=> 'float:right','id'=>'aratoplam'))}}
                            <input name="fee" id="fee" value="" hidden>
                            <hr>
                            {{Form::label('toplamKDV','Toplam KDV     :0,00₺',array('class' => 'form-control','style'=> 'float:right','id'=>'toplamKDV'))}}
                            <hr>
                            {{Form::label('geneltoplam','Genel Toplam   :0,00₺',array('class' => 'form-control','style'=> 'float:right','id'=>'geneltoplam'))}}

                            <hr>
                            <div id="tlkarsilik" style="display: none">
                                {{Form::label('tlkarsilik',' ',array('class' => 'form-control','style'=> 'float:right','id'=>'tlkarsiliki'))}}
                            </div>
                            @if ($errors->has('fee')) <p class="help-block">{{ $errors->first('fee') }}</p> @endif

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-11">
                            {{Form::submit('Kaydet',array('class' => 'btn btn-theme' , 'style' => 'float:right'))}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function kurdegistir() {
            $kur=$("select#currency").val();
            $kurdeger=$("#exchangeRate").val();

            if($kur==="TRL"){
                $("#kur_isareti").text("₺");
                $("#kur_degeri").val($kurdeger);
                return "₺";

            }
            else if($kur==="EUR"){
                $("#kur_isareti").text("€");
                $("#kur_degeri").val($kurdeger);
                return "€";



            }
            else if($kur==="USD"){
                $("#kur_isareti").text("$");
                $("#kur_degeri").val($kurdeger);
                return "$";



            }
            else if($kur==="GBP"){
                $("#kur_isareti").text("£");
                $("#kur_degeri").val($kurdeger);
                return "£";



            }


        }
        function kur() {
            $kurdeger= $("#kur_degeri").val();
            return $kurdeger;


        }
    </script>
    <script>

        var i = 2;
        var $table=$("#tablocuk");
        var $tableBody=$("tbody",$table);
        var autocomp_opt={
                source:'{{URL::route('autocomplete.products')}}',

                    minlength:1,
                    autoFocus:true,

                    select:function(e,ui)
                {
                    $(this).val(ui.item.value);
                    $(this).val(ui.item.salePrice);
                    $(this).val(ui.item.valuAddedTax);
                    $(this).val(ui.item.id);



                }
            };

        $('a#satirEkle').click(function() {
            var newtr = $('<tr><td><input name="urun['+i+'][urun]" id="urun" type="text" class="form-control urunler'+i+'" oninput="doldur('+i+')" placeholder="Urun adını yazınız" autocomplete="off"  /><input name="urun['+i+'][urunID]" class="form-control urunID'+i+'" hidden style="display: auto" id="urunID"></td><td><input type="number" name="urun['+i+'][miktar]" oninput="hesapla('+i+')" class="form-control miktar'+i+'" id="miktar"></td><td><input type="number" name="urun['+i+'][birimFiyat]" class="form-control birimFiyat'+i+'" id="birimFiyat" oninput="hesapla('+i+')"></td><td><select name="urun['+i+'][vergi]" onchange="hesapla('+i+')" class="form-control vergi'+i+'" id="vergi"><option value="0">KDV %0</option><option value="1">KDV %1</option><option value="8">KDV %8</option><option value="18">KDV %18</option></select></td><td><input type="number" name="urun['+i+'][toplam]" class="form-control toplam'+i+'" id="toplam" step="0.01"></td><td><div class="dropdown"><button class="btn btn-theme dropdown-toggle" type="button" data-toggle="dropdown">+</button><button data-toggle="dropdown" class="btn btn-theme">x</button><ul class="dropdown-menu"><li id="aciklamaekle" class="aciklamaekle'+i+'" onclick="aciklamaEkle('+i+')"><a >Açıklama Ekle</a></li><li id="birimekle" class="birimekle'+i+'" onclick="birimEkle('+i+')"><a >Birim Ekle</a></li><li id="indirimekle" class="indirimekle'+i+'" onclick="indirimEkle('+i+')"><a >İndirim Ekle</a></li><li id="otvekle" class="otvekle'+i+'" onclick="otvEkle('+i+')"><a >ÖTV Ekle</a></li><li id="oivekle" class="oivekle'+i+'" onclick="oivEkle('+i+')"><a >ÖİV Ekle</a></li></ul></div></td></tr><tr><th id="birim1" class="birimler'+i+'" style="display: none"><label name="birimler" class="control-label">Birim:</label></th><th id="aciklama1" class="aciklamalar'+i+'" style="display: none"><label name="aciklamaIceriklb" class="control-label">Açıklama:</label></th><th id="indirim1" class="indirimler'+i+'" style="display: none"><label name="indirimlb" class="control-label">İndirim:</label></th><th id="otv1" class="otvler'+i+'" style="display: none"><label name="otvlb" class="control-label">ÖTV:</label></th><th id="oiv1" class="oivler'+i+'" style="display: none"><label name="oivlb" class="control-label">ÖİV:</label></th></tr><tr><td id="birim2" class="birimler'+i+'" style="display: none"><input name="urun['+i+'][birim]" id="birim" class="form-control"></td><td id="aciklama2" class="aciklamalar'+i+'" style="display: none"><input name="urun['+i+'][aciklamaIcerik]" class="form-control" id="aciklamaIcerik"></td><td id="indirim2" class="indirimler'+i+'" style="display: none"><input name="urun['+i+'][indirim]" class="form-control" id="indirim" value="0"></td><td id="otv2" class="otvler'+i+'" style="display: none"><input name="urun['+i+'][otv]" value="0" class="form-control" , id="otv"></td><td id="oiv2" class="oivler'+i+'" style="display: none"><input name="urun['+i+'][oiv]" value="0" class="form-control" id="oiv"></td></tr>');
            $('.urunler'+i, newtr).autocomplete(autocomp_opt);
            i++;
            $tableBody.append(newtr);

        });

        function hesapla($id) {
            $deger=($(".miktar"+$id).val())*($(".birimFiyat"+$id).val())*kur();
            $vergi=(($(".miktar"+$id).val())*($(".birimFiyat"+$id).val())*($(".vergi"+$id).val()))/100;
            $toplam=$deger+$vergi;
            $(".toplam"+$id).val($toplam);
            toplamaca();
        }
        function toplamaca() {
            $toplamdeger=0;
            $toplamvergi=0;
            $toplamgenel=0;
            for (x=1;x<i;x++){
                $deger=($(".miktar"+x).val())*($(".birimFiyat"+x).val())*kur();
                $vergi=(($(".miktar"+x).val())*($(".birimFiyat"+x).val())*($(".vergi"+x).val()))/100;
                $toplam=$deger+$vergi;
                $(".toplam"+x).val($toplam);
                $toplamdeger=$toplamdeger+$deger;
                $toplamvergi=$toplamvergi+$vergi;
                $toplamgenel=$toplamgenel+$toplam;
                $("#aratoplam").text("Ara Toplam: "+$toplamdeger+kurdegistir());
                $("#toplamKDV").text("Toplam KDV: "+$toplamvergi+kurdegistir());
                $("#geneltoplam").text("Genel Toplam: "+$toplamgenel+kurdegistir());

            }
            $("#fee").val($toplamgenel);
        }

    </script>
    <script>
        function doldur($id){
            $( ".urunler"+$id ).autocomplete({


                source:'{{URL::route('autocomplete.products')}}',

                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('.urunler'+$id).val(ui.item.value);
                    $('.urunID'+$id).val(ui.item.id);
                    $('.birimFiyat'+$id).val(ui.item.salePrice);
                    $('.vergi'+$id).val(ui.item.valuAddedTax);



                }

            } );

        }
    </script>


    <script>
        function goster() {
            $("#siraNo").show();
            $("#seriNo").show();
        }
    </script>

    <script>
        function goster2() {
            $("#dovizTurus").show();
            $("#dovizKurus").show();
        }
    </script>
    <script>
        function birimEkle(id) {
            $(".birimler"+id).show();
            $(".birimekle"+id).hide();
        }
    </script>
    <script>
        function aciklamaEkle(id) {
            $(".aciklamalar"+id).show();
            $(".aciklamaekle"+id).hide();
        }
    </script>
    <script>
        function otvEkle(id) {
            $(".otvler"+id).show();
            $(".otvekle"+id).hide();
        }
    </script>
    <script>
        function oivEkle(id) {
            $(".oivler"+id).show();
            $(".oivekle"+id).hide();
        }
    </script>
    <script>
        function indirimEkle(id) {
            $(".indirimler"+id).show();
            $(".indirimekle"+id).hide();
        }
    </script>
    <script>

    </script>

    <script>
        function dovizHesapla() {
            kur= $("#dovizKuru").val();
            karsilik = kur*(genelTop);
            $("#tlkarsiliki").text("Türk Lirası Karşılığı : "+karsilik+"₺");
        }
    </script>
    <script>
        $(function () {
            $( "#customers" ).autocomplete({


                source:'{{URL::route('autocomplete.customers')}}',

                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('#customers').val(ui.item.value);
                    $('#customers_id').val(ui.item.id);

                }

            } );

        });

    </script>
    <script>
        $(function () {
            $( ".urunler1" ).autocomplete({


                source:'{{URL::route('autocomplete.products')}}',

                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('.urunler1').val(ui.item.value);
                    $('.birimFiyat1').val(ui.item.salePrice);
                    $('.vergi1').val(ui.item.valuAddedTax);

                    $('.urunID1').val(ui.item.id);

                }

            } );

        });

    </script>



    <script>
        $("#a12").addClass("active");
    </script>

</div>
{{Form::close()}}


@endsection
