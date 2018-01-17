@extends('layouts.master')
@section('content')
@section('title')
    Kasa Ekle
@endsection


<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Kasa</strong> Ekle</h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($kasa,array('route' => 'nakit.kasaekle' , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Kasa Açıklaması</label>
                    {{Form::text('description', '',array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Bakiye</label>
                    {{Form::number('balance', '',array('class'=> 'form-control'))}}
                    @if ($errors->has('balance')) <p class="help-block">{{ $errors->first('balance') }}</p> @endif

                </div>





                <button type="submit" class="ui purple basic button" style="float: right;margin-bottom: 20px">Kasa  Ekle</button>
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