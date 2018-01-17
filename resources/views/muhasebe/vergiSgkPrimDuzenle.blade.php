@extends('layouts.master')
@section('content')
@section('title')
    Vergi/Sgk Gideri Düzenle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Vergi/Sgk</strong> Gideri<strong> Düzenle</strong></h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($vergi,array('route' => array('giderler.vergiDuzenle',$vergi->id) , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Fatura Açıklaması</label>
                    {{Form::text('description', null,array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Düzenlenme Tarihi</label>
                    {{Form::date('issue_date',null,array('class' => 'form-control'))}}
                    @if ($errors->has('issue_date')) <p class="help-block">{{ $errors->first('issue_date') }}</p> @endif


                </div>
                <div class="form-group">
                    <label>Toplam Tutar</label>
                    {{Form::number('fee', null,array('class'=> 'form-control','step'=>'0.001'))}}
                    @if ($errors->has('fee')) <p class="help-block">{{ $errors->first('fee') }}</p> @endif

                </div>
                <div class="form-group">
                    <div >
                        <div class="form-group">
                            <label><input type="radio" class="ui radio checkbox" name="types_id" value="4"@if ($vergi->types_id==4) {{' checked'}} @endif>ÖDENECEK</label>
                            <label><input type="radio" class="ui radio checkbox" name="types_id" value="3"@if ($vergi->types_id==3) {{' checked'}} @endif>ÖDENDİ</label>
                        </div>
                        @if ($errors->has('types_id')) <p class="help-block">{{ $errors->first('types_id') }}</p> @endif

                    </div>
                </div>
                <div class="form-group">
                    <label>Ödeneceği Tarih</label>
                    {{Form::date('expiry_date',null,array('class' => 'form-control'))}}
                </div>




                <button type="submit" class="ui yellow basic button" style="float: right;margin-bottom: 20px">Vergi/Sgk Giderini Düzenle</button>
                <br>
                {{Form::close()}}
            </div>
        </div>
    </div>






    <script>
        $("#a21").addClass("active");
    </script>
</div>
@endsection