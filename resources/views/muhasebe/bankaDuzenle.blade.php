@extends('layouts.master')
@section('content')
@section('title')
    Banka Düzenle
@endsection


<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Banka</strong> Düzenle</h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($banka,array('route' => ['nakit.bankaduzenle',$banka->id] , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Hesap Açıklaması</label>
                    {{Form::text('description', null,array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Bakiye</label>
                    {{Form::number('balance', null,array('class'=> 'form-control'))}}
                    @if ($errors->has('balance')) <p class="help-block">{{ $errors->first('balance') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>IBAN Numarası</label>
                    {{Form::text('iban', null,array('class'=> 'form-control'))}}
                </div>




                <button type="submit" class="ui purple basic button" style="float: right;margin-bottom: 20px">Banka Hesabını Düzenle</button>
                <br>
                {{Form::close()}}
            </div>
        </div>
    </div>

    <script>
        $("#a31").addClass("active");
    </script>


</div>
@endsection