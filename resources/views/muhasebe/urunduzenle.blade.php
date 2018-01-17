@extends('layouts.master')
@section('content')
@section('title')
    Hizmet/Ürün Ekle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Hizmet/Ürün</strong> Ekle</h2>
            </div>
            <div class="widget-content padding">
                {{Form::open(array('route' => ['stok.urunduzenle',$urunler->id] , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Ürün Adı</label>
                    {{Form::text('urun-adi', $urunler->adi,array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Ürün Kodu</label>
                    {{Form::text('urun-kodu', $urunler->kodu,array('class'=> 'form-control'))}}

                </div>
                <div class="form-group">
                    <div >
                        <div class="form-group">
                            <label><input type="radio" class="ui radio checkbox" name="stok" value="0" id="stok" style="margin-right: 5px" @if ($urunler->stokDurum==1) {{' checked'}} @endif> Stok Takibi Yapılsın</label>
                            <label><input type="radio" class="ui radio checkbox" name="stok" value="1" id="stok" style="margin-right: 5px" @if ($urunler->stokDurum==0) {{' checked'}} @endif> Stok Takibi Yapılmasın</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Miktarı</label>
                    {{Form::text('urun-stokmiktari', $urunler->stokMiktar,array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Ürün Birimi</label>
                    {{Form::text('urun-birimi', $urunler->alSatBirim,array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Ürün Alış Fiyatı</label>
                    {{Form::text('urun-alisfiyat', $urunler->alisFiyat,array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Ürün Satış Fiyatı</label>
                    {{Form::text('urun-satisfiyat', $urunler->satisFiyat,array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>KDV</label>
                    {{Form::select('urun-kdv',array('0' => 'KDV %0', '1' => 'KDV %1' , '8' => 'KDV %8', '18' => 'KDV %18'),$urunler->kdv,array('class' => 'form-control','id'=>'vergi','onchange'=>'hesapla()','style'=>'width:100px'))}}
                </div>
                <div class="form-group">
                    <label>OİV</label>
                    {{Form::text('urun-oiv',$urunler->oiv,array('class' => 'form-control','id'=>'urun-oiv'))}}
                </div>
                <div class="form-group">
                    <label>Satış ÖTV</label>
                    {{Form::text('urun-satisotv',$urunler->satOtv,array('class' => 'form-control','id'=>'urun-oiv'))}}
                </div>
                <div class="form-group">
                    <label>ALış ÖTV</label>
                    {{Form::text('urun-alisotv',$urunler->alOtv,array('class' => 'form-control','id'=>'urun-oiv'))}}
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