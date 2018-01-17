@extends('layouts.master')
@section('content')
@section('title')
    Gider Faturası Ekle
@endsection


<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Gider</strong> Faturası<strong> Ekle</strong></h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($fatura,array('route' => 'giderler.fisfaturaEkle' , 'method' => 'post','id'=>"Ex" ,'name'=>'FaturaEkle'))}}
                <div class="form-group">
                    <label>Fatura Açıklaması</label>
                    {{Form::text('description', '',array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Düzenlenme Tarihi</label>
                    {{Form::date('issue_date',\Carbon\Carbon::now(),array('class' => 'form-control'))}}
                    @if ($errors->has('issue_date')) <p class="help-block">{{ $errors->first('issue_date') }}</p> @endif


                </div>
                <div class="form-group">
                    <label>Toplam Tutar</label>
                    {{Form::text('number', '',array('class'=> 'form-control','step'=>'0.001'))}}
                    @if ($errors->has('fee')) <p class="help-block">{{ $errors->first('fee') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Toplam KDV</label>
                    {{Form::select('vat',array('0' => 'KDV %0', '1' => 'KDV %1' , '8' => 'KDV %8', '18' => 'KDV %18'),null,array('class' => 'form-control','id'=>'vergi','onchange'=>'hesapla()','style'=>'width:100px'))}}
                </div>
                <div class="form-group">
                        <div >
                            <div class="form-group">
                                <label><input type="radio" class="ui radio checkbox" name="types_id" value="4" style="margin-right: 5px"> ÖDENECEK</label>
                                <label><input type="radio" class="ui radio checkbox" name="types_id" value="3" style="margin-right: 5px"> ÖDENDİ</label>
                            </div>
                            @if ($errors->has('types_id')) <p class="help-block">{{ $errors->first('types_id') }}</p> @endif

                        </div>
                </div>
                <div class="form-group">
                    <label>Ödeneceği Tarih</label>
                    {{Form::date('expiry_date','',array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Tedarikçi</label>
                    <input id="supplier" name="supplier" type="text" class="form-control" placeholder="" autocomplete="off"/>
                    <input id="suppliers_id" type="text" class="form-control" placeholder="" hidden autocomplete="off" name="suppliers_id" />
                    @if ($errors->has('supplier')) <p class="help-block">{{ $errors->first('supplier') }}</p> @endif

                </div>



                <button type="submit" class="ui purple basic button" style="float: right;margin-bottom: 20px">Gider Faturasını Kaydet</button>
                <br>
                {{Form::close()}}
            </div>
        </div>
    </div>

    <script>
        $("#a21").addClass("active");
    </script>

    <script>
        $(function () {
            $( "#supplier" ).autocomplete({


                source:'{{URL::route('autocomplete.suppliers')}}',

                // source:"{{ URL::to('autocomplete')}}",
                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('#supplier').val(ui.item.value);
                    $('#suppliers_id').val(ui.item.id);

                }

            } );

        });

    </script>
</div>
@endsection