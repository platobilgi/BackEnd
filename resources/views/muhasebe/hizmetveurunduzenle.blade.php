@extends('layouts.master')
@section('content')
@section('title')
    Hizmet/Ürün Düzenle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Hizmet/Ürün</strong> Düzenle</h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($urun,array('route' => ['stok.urunduzenle',$urun->id] , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Ürün Adı</label>
                    {{Form::text('name', null,array('class'=> 'form-control'))}}
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Ürün Kodu</label>
                    {{Form::text('code', null,array('class'=> 'form-control'))}}

                </div>
                <div class="form-group">
                    <div >
                        <div class="form-group">
                            <label><input type="radio" class="ui radio checkbox" name="tracking" value="0"@if($urun->tracking==0) checked @endif style="margin-right: 5px"> Stok Takibi Yapılsın</label>
                            <label><input type="radio" class="ui radio checkbox" name="tracking" value="1"@if($urun->tracking==1) checked @endif  style="margin-right: 5px"> Stok Takibi Yapılmasın</label>
                        </div>
                        @if ($errors->has('tracking')) <p class="help-block">{{ $errors->first('tracking') }}</p> @endif

                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Miktarı</label>
                    {{Form::number('amount', null,array('class'=> 'form-control'))}}
                    @if ($errors->has('amount')) <p class="help-block">{{ $errors->first('amount') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Ürün Birimi</label>
                    {{Form::text('unit', null,array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Ürün Alış Fiyatı</label>
                    {{Form::number('purchasePrice', null,array('class'=> 'form-control','step'=>'0.001'))}}
                    @if ($errors->has('purchasePrice')) <p class="help-block">{{ $errors->first('purchasePrice') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Ürün Satış Fiyatı</label>
                    {{Form::number('salePrice', null,array('class'=> 'form-control','step'=>'0.001'))}}
                    @if ($errors->has('salePrice')) <p class="help-block">{{ $errors->first('salePrice') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>KDV</label>
                    {{Form::select('valuAddedTax',array('0' => 'KDV %0', '1' => 'KDV %1' , '8' => 'KDV %8', '18' => 'KDV %18'),null,array('class' => 'form-control','id'=>'valuAddedTax','onchange'=>'hesapla()','style'=>'width:100px'))}}
                    @if ($errors->has('valueAddedTax')) <p class="help-block">{{ $errors->first('valueAddedTax') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>OİV</label>
                    {{Form::number('specialCommunicationTax',null,array('class' => 'form-control','id'=>'urun-oiv'))}}
                </div>
                <div class="form-group">
                    <label>Satış ÖTV</label>
                    {{Form::number('specialConsumptionTaxSale',null,array('class' => 'form-control','id'=>'urun-oiv'))}}
                </div>
                <div class="form-group">
                    <label>ALış ÖTV</label>
                    {{Form::number('specialConsumptionTaxPurchase',null,array('class' => 'form-control','id'=>'urun-oiv'))}}
                </div>


                <button type="submit" class="ui purple basic button" style="float: right;margin-bottom: 20px">Hizmet/Ürün Kaydet</button>
                <br>
                {{Form::close()}}
            </div>
        </div>
    </div>

    <script>
        $("#a41").addClass("active");
    </script>
</div>
@endsection