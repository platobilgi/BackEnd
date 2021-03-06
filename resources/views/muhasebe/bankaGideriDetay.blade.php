@extends('layouts.master')
@section('content')
@section('title')
    Banka Gideri Detay
@endsection
<div class="row">
    <div class="col-sm-9 ">
        <div class="widget">
            <div class="widget-header ">
                <h2><i class="icon-chart-pie-1"></i> <strong>Banka</strong> Gideri <strong>Detay</strong></h2>
                <div class="additional-btn">

                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3" >
                        <a href="{{URL::route('giderler.bankagiderDuzenle',$gider->id)}}"> <button style="float: right" class="ui olive basic button">Düzenle</button></a>
                        <button onclick="sor()" style="float: right;" class="ui red button">Sil</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic olive label" style="width: 100%">Açıklama :</a></div>
                        <div class="col-md-4"><a class="ui basic olive label" style="border: none;width: 100%" >{{$gider->description}}</a></div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic olive label" style="width: 100%">Düzenlenme Tarihi :</a></div>
                        <div class="col-md-4"><a class="ui basic olive label" style="border: none;width: 100%">{{$gider->issue_date}}</a></div>
                        <div class="col-md-2"><a class="ui basic olive label" style="width: 100%">Ödeme Tarihi :</a></div>
                        <div class="col-md-4"><a class="ui basic olive label" style="border: none;width: 100%">{{$gider->expiry_date}}</a></div>


                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"><a class="ui basic olive label" style="width: 100%">Toplam Tutar :</a></div>
                        <div class="col-md-4"><a class="ui basic olive label" style="border: none;width: 100%">{{$gider->fee}}<i class="fa fa-try"></i> </a></div>


                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="col-sm-3 portlets">
        <div class="widget red-1">
            <div class="widget-header">
                <h2><strong>Ödeme</strong> Yap</h2>
                <div class="additional-btn">
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1"><button class="ui inverted white button md-trigger" data-modal = "md-fade-in-scale-up"style="width: 100%" >Ödeme Ekle</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-md-offset-3"><h4 class="ui inverted  header">Kalan : {{$gider->fee}} <i class="fa fa-try"></i></h4>
                    </div>
                    <hr class="col-md-9 col-md-offset-1">

                    <br>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                        @if($gider->expiry_date>$gider->issue_date)
                            Ödemeye {{(new Carbon\Carbon($gider->expiry_date))->diffInDays(new Carbon\Carbon($gider->issue_date))}} gün kaldı!
                        @endif
                        @if($gider->expiry_date<$gider->issue_date)
                            Ödeme {{(new Carbon\Carbon($gider->expiry_date))->diffInDays(new Carbon\Carbon($gider->issue_date))}} gün gecikti!
                        @endif
                        @if($gider->expiry_date==$gider->issue_date)
                            Ödeme günü bugün!
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div id="calc" class="widget darkblue-2">
            <div class="widget-header">
                <div class="additional-btn left-toolbar">
                    <div class="btn-group">
                        <a class="additional-icon" id="dropdownMenu2" data-toggle="dropdown">
                            Hesap Makinesi
                        </a>
                    </div>
                </div>

            </div>
            <div id="calculator" class="widget-content">
                <div class="calc-top col-xs-12">
                    <div class="row">
                        <div class="col-xs-3"><span class="calc-clean">C</span></div>
                        <div class="col-xs-9"><div class="calc-screen"></div></div>
                    </div>
                </div>

                <div class="calc-keys col-xs-12">
                    <div class="row">
                        <div class="col-xs-3"><span>7</span></div>
                        <div class="col-xs-3"><span>8</span></div>
                        <div class="col-xs-3"><span>9</span></div>
                        <div class="col-xs-3"><span class="calc-operator">+</span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3"><span>4</span></div>
                        <div class="col-xs-3"><span>5</span></div>
                        <div class="col-xs-3"><span>6</span></div>
                        <div class="col-xs-3"><span class="calc-operator">-</span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3"><span>1</span></div>
                        <div class="col-xs-3"><span>2</span></div>
                        <div class="col-xs-3"><span>3</span></div>
                        <div class="col-xs-3"><span class="calc-operator">÷</span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3"><span>0</span></div>
                        <div class="col-xs-3"><span>.</span></div>
                        <div class="col-xs-3"><span class="calc-eval">=</span></div>
                        <div class="col-xs-3"><span class="calc-operator">x</span></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<script>
    function sor() {
        $('.ui.basic.modal')
            .modal('show')
        ;
    }

    ;
</script>
<div class="ui basic modal">
    <div class="ui icon header">
        <i class="archive icon"></i>
        Banka Gideri Siliniyor
    </div>
    <div class="content">
        <p>Bu işlemi onaylamanız durumunda banka gideri geri dönüşü olmaksızın silinecektir.Devam etmek istediğinize emin misiniz?</p>
    </div>
    <div class="actions">
        <div class="ui red basic cancel inverted button">
            <i class="remove icon"></i>
            Hayır
        </div>
        <a href="{{URL::route('giderler.bankasil',$gider->id)}}"> <div class="ui green ok inverted button">
                <i class="checkmark icon"></i>
                Evet
            </div></a>
    </div>
</div>
<div class="md-modal md-fade-in-scale-up" id="md-fade-in-scale-up">
    <div class="md-content">
        <h3><strong>Ödeme</strong> Ekle</h3>
        <div>
            {{Form::model($payment,array('route' => ['giderler.vergiodemeekle',$gider->id] , 'method' => 'post'))}}
            <div class="col-md-12">
                <span>Ödemenin Yapılacağı Hesap</span>
                <hr>
                <select name="banks_id" id="banks_id" class="form-control">
                    @foreach($banks as $bank)
                        <option value="{{$bank->id}}">{{$bank->description}} - {{$bank->balance}}</option>
                    @endforeach
                </select>
                <hr>

                <span>Ödemenin Miktarı</span>
                <hr>
                <input name="odeme" id="odeme" type="text" class="form-control">
                <hr>



            </div>
            {{Form::button('Ödemeyi Kaydet',array('class'=>'btn btn-success','type'=>'submit'))}}
            <button type="button" class="btn btn-danger md-close">Kapat!</button>

            {{Form::close()}}
        </div>
        <div>

        </div>
    </div><!-- End div .md-content -->
</div>





@endsection