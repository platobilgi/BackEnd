@extends('layouts.master')
@section('content')
@section('title')
    Çalışan Düzenle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Çalışan</strong> Düzenle</h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($calisan,array('route' => ['giderler.calisanDuzenle',$calisan->id] , 'method' => 'patch'))}}
                <div class="form-group">
                    <label>Ad Soyad</label>
                    {{Form::text('name',null, array('class'=> 'form-control'))}}
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>E-Posta</label>
                    {{Form::email('email',null, array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>IBAN Numarası</label>
                    {{Form::text('iban',null,array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Bakiye</label>
                    {{Form::number('balance',null,array('class' => 'form-control','step'=>'0.0001'))}}
                    @if ($errors->has('balance')) <p class="help-block">{{ $errors->first('balance') }}</p> @endif

                </div>



                <button type="submit" class="ui purple basic button" style="float: right;margin-bottom: 20px">Çalışanı Düzenle</button>
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