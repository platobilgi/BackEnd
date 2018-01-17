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
                {{Form::model($gider,array('route' => 'giderler.maasprimEkle' , 'method' => 'post','id'=>"Ex" ,'name'=>'FaturaEkle'))}}
                <div class="form-group">
                    <label>Açıklama</label>
                    {{Form::text('description', '',array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Hakediş Tarihi</label>
                    {{Form::date('issue_date',\Carbon\Carbon::now(),array('class' => 'form-control'))}}
                    @if ($errors->has('issue_date')) <p class="help-block">{{ $errors->first('issue_date') }}</p> @endif


                </div>
                <div class="form-group">
                    <label>Toplam Tutar</label>
                    {{Form::number('fee', '',array('class'=> 'form-control','step'=>'0.001'))}}
                    @if ($errors->has('fee')) <p class="help-block">{{ $errors->first('fee') }}</p> @endif

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
                        {{Form::label('tedarikci','Çalışan', array('class' => '','id'=>'tedarikci'))}}
                            <input id="worker" type="text" class="form-control" placeholder="" autocomplete="off"/>
                            <input id="workers_id" type="hidden" class="form-control" placeholder="" autocomplete="off" name="workers_id" />
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
            $( "#worker" ).autocomplete({


                source:'{{URL::route('autocomplete.workers')}}',

                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('#worker').val(ui.item.value);
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