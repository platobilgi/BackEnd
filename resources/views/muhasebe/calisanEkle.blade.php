@extends('layouts.master')
@section('content')
@section('title')
   Çalışan Ekle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Çalışan</strong> Ekle</h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($worker,array('route' => 'giderler.calisanEkle' , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Ad Soyad</label>
                    {{Form::text('name', '',array('class'=> 'form-control'))}}
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>E-Posta</label>
                    {{Form::email('email', '',array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>IBAN Numarası</label>
                    {{Form::text('iban','',array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Bakiye</label>
                    {{Form::number('balance','',array('class' => 'form-control','step'=>'0.0001'))}}
                    @if ($errors->has('balance')) <p class="help-block">{{ $errors->first('balance') }}</p> @endif

                </div>



                <button type="submit" class="ui purple basic button" style="float: right;margin-bottom: 20px">Çalışanı Kaydet</button>
                <br>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
<script>
    $("#a23").addClass("active");
</script>
@endsection