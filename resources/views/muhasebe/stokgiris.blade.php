@extends('layouts.master')
@section('content')
@section('title')
    Stok Giriş Ekle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Stok</strong> Giriş <strong>Ekle</strong></h2>
            </div>

            <div class="widget-content padding">
                {{Form::model($stok,array('route' => ['stok.stokgiris',$stok->id] , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Açıklama</label>
                    {{Form::text('description', null,array('class'=> 'form-control'))}}
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

                </div>
                <div class="form-group">

                    <label>Tedarikçi</label>
                    {{Form::text("suppliers",null,array('class'=>'form-control','id'=>'suppliers'))}}
                    {{Form::text("suppliers_id",null,array('class'=>'form-control','id'=>'suppliers_id','hidden'))}}
                    @if ($errors->has('suppliers_id')) <p class="help-block">{{ $errors->first('suppliers_id') }}</p> @endif


                </div>
                <div class="form-group">
                    <label>Adres</label>
                    {{Form::text("address",null,array('class'=>'form-control'))}}
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <span>İl</span>
                            <select name="cities_id" id="cities_id" class="form-control">
                                @foreach($cities as $cit)
                                    <option value="{{$cit->id}}">{{$cit->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('cities_id')) <p class="help-block">{{ $errors->first('cities_id') }}</p> @endif


                        </div>
                        <div class="col-md-3">
                            <span>İlçe</span>
                            <select name="states_id" id="states_id" class="form-control">
                                @foreach($states as $stat)
                                    <option value="{{$stat->id}}">{{$stat->name}}</option>
                                @endforeach

                            </select>
                            @if ($errors->has('states_id')) <p class="help-block">{{ $errors->first('states_id') }}</p> @endif

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Düzenlenme Tarihi</label>
                    {{Form::date('dateOfIssue',null,array('class' => 'form-control'))}}
                    @if ($errors->has('dateOfIssue')) <p class="help-block">{{ $errors->first('dateOfIssue') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>İrsaliye No</label>
                    {{Form::text('waybillNumber',null,array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Sevk Tarihi</label>
                    {{Form::date('shipmentDate',null,array('class' => 'form-control'))}}
                    @if ($errors->has('shipmentDate')) <p class="help-block">{{ $errors->first('shipmentDate') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Ürün</label>
                    {{Form::text('products',null,array('class' => 'form-control','id'=>'products'))}}
                    {{Form::text('products_id',null,array('class' => 'form-control','style'=>'display:none','id'=>'products_id'))}}
                    @if ($errors->has('products_id')) <p class="help-block">{{ $errors->first('products_id') }}</p> @endif


                </div>
                <div class="form-group">
                    <label>Miktar</label>
                    {{Form::number('amount',null,array('class' => 'form-control','id'=>'miktar'))}}
                    @if ($errors->has('amount')) <p class="help-block">{{ $errors->first('amount') }}</p> @endif


                </div>
                <div class="form-group">
                    <label>Birim</label>
                    {{Form::text('unit',null,array('class' => 'form-control','id'=>'miktar'))}}

                </div>

                <button type="submit" class="ui yellow basic button" style="float: right;margin-bottom: 20px">Stok Girişi Ekle</button>
                <br>


                {{Form::close()}}
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $( "#products" ).autocomplete({


                source:'{{URL::route('autocomplete.products')}}',

                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('#products').val(ui.item.value);
                    $('#products_id').val(ui.item.id);

                }

            } );

        });

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
                    $('#customer_id').val(ui.item.id);

                }

            } );

        });

    </script>
    <script>
        $(function () {
            $( "#suppliers" ).autocomplete({


                source:'{{URL::route('autocomplete.suppliers')}}',

                minlength:1,
                autoFocus:true,

                select:function(e,ui)
                {
                    $('#suppliers').val(ui.item.value);
                    $('#suppliers_id').val(ui.item.id);

                }

            } );

        });

    </script>




    <script>
        $("#a42").addClass("active");
    </script>
</div>
@endsection

