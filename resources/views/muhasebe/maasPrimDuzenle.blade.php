@extends('layouts.master')
@section('content')
@section('title')
    Maaş/Prim Gideri Ekle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Maaş/Prim</strong> Gideri<strong> Ekle</strong></h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($maas,array('route' => ['giderler.maasprimDuzenle',$maas->id] , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Açıklama</label>
                    {{Form::text('description', null,array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Hakediş Tarihi</label>
                    {{Form::date('issue_date',null,array('class' => 'form-control'))}}
                    @if ($errors->has('issue_date')) <p class="help-block">{{ $errors->first('issue_date') }}</p> @endif


                </div>
                <div class="form-group">
                    <label>Toplam Tutar</label>
                    {{Form::number('fee', null ,array('class'=> 'form-control','step'=>'0.001'))}}
                    @if ($errors->has('fee')) <p class="help-block">{{ $errors->first('fee') }}</p> @endif

                </div>
                <div class="form-group">
                    <div >
                        <div class="form-group">
                            <label><input type="radio" class="ui radio checkbox" name="types_id" value="4"@if ($maas->types_id==4) {{' checked'}} @endif>ÖDENECEK</label>
                            <label><input type="radio" class="ui radio checkbox" name="types_id" value="3"@if ($maas->types_id==3) {{' checked'}} @endif>ÖDENDİ</label>
                        </div>
                        @if ($errors->has('types_id')) <p class="help-block">{{ $errors->first('types_id') }}</p> @endif

                    </div>
                </div>
                <div class="form-group">
                    <label>Ödeneceği Tarih</label>
                    {{Form::date('expiry_date',null ,array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    {{Form::label('tedarikci','Çalışan', array('class' => '','id'=>'tedarikci'))}}
                    <input id="demo5" type="text" class="form-control" placeholder="" autocomplete="off"  value="{{$worker->name}}"/>
                    <input id="workers_id" type="hidden" class="form-control" placeholder="" autocomplete="off" name="workers_id" value="{{$maas->workers_id}}" />
                    @if ($errors->has('workers_id')) <p class="help-block">{{ $errors->first('workers_id') }}</p> @endif

                </div>




                <button type="submit" class="ui yellow basic button" style="float: right;margin-bottom: 20px">Maaş/Prim Giderini Kaydet</button>
                <br>
                {{Form::close()}}
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $( "#demo5" ).autocomplete({


                source:'{{URL::route('autocomplete.workers')}}',

                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('#demo5').val(ui.item.value);
                    $('#workers_id').val(ui.item.id);

                }

            } );

        });

    </script>


    <script>
        $("#a21").addClass("active");
    </script>
</div>
@endsection