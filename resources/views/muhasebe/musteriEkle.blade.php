@extends('layouts.master')
@section('content')
@section('title')
    Müşteri Ekle
@endsection

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Müşteri</strong>  Ekle</h2>
            </div>
            <div class="widget-content padding">
                {{Form::model($customer,array('route' => 'satislar.musteriekle' , 'method' => 'post'))}}
                <div class="form-group">
                    <label>Müşteri Adı</label>
                    {{Form::text('name', '',array('class'=> 'form-control'))}}
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

                </div>
                <div class="form-group">
                    <label>Kısa İsim</label>
                    {{Form::text('short_name','',array('class' => 'form-control'))}}

                </div>
                <div class="form-group">
                    <label>E-Posta Adresi</label>
                    {{Form::email('email', '',array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Telefon</label>
                    {{Form::number('phone_number', '',array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Faks</label>
                    {{Form::number('fax', '',array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>IBAN Numarası</label>
                    {{Form::text('iban', '',array('class'=> 'form-control'))}}
                </div>
                <div class="form-group">
                    <label>Adres</label>
                    {{Form::text('address', '',array('class'=> 'form-control'))}}
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
                    <div >
                        <div class="form-group">
                            <label onclick="gercekkisi()"><input type="radio" onselect="gercekkisi()" class="ui radio checkbox" name="types_id" value="1"  style="margin-right: 5px"> Gerçek Kişi</label>
                            <label onclick="tuzelkisi()"><input type="radio" onselect="tuzelkisi()" class="ui radio checkbox" name="types_id" value="2"  checked style="margin-right: 5px"> Tüzel Kişi</label>
                        </div>
                        @if ($errors->has('types_id')) <p class="help-block">{{ $errors->first('types_id') }}</p> @endif

                    </div>
                </div>
                <div class="form-group">
                    <label id="tax_number_lb">Vergi Numarası / TC Kimlik Numarası</label>
                    {{Form::number('tax_number', '',array('class'=> 'form-control','id'=>'tax_number'))}}
                </div>
                <div class="form-group">
                    <label id="identification_numberlb" hidden>TC Kimlik Numarası</label>
                    {{Form::number('identification_number', '',array('class'=> 'form-control','id'=>'identification_number','hidden'))}}

                </div>
                <div class="form-group">
                    <label id="tax_administratorlb">Vergi Dairesi</label>
                    {{Form::text('tax_administrator', '',array('class'=> 'form-control','id'=>'tax_administrator'))}}
                </div>
                <div class="form-group">
                    <label>Açılış Bakiyesi</label>
                    {{Form::number('balance', '',array('class'=> 'form-control','id'=>'balance','step'=>'0.001'))}}
                    @if ($errors->has('balance')) <p class="help-block">{{ $errors->first('balance') }}</p> @endif

                </div>
            </div>

            <button type="submit" class="ui purple basic button" style="float: right;margin-bottom: 20px">Müşteriyi Kaydet</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Yetkili</strong>  Ekle</h2>
            </div>
            <div class="widget-content padding">
                <table id="tablocuk" style="width: 100%">
                    <tr>
                        <th>Yetkili Kişinin Adı</th>
                        <th>E-Posta</th>
                        <th>Telefon</th>
                        <th>Notlar</th>
                    </tr>

                    <tr>
                        <td>{{Form::text('manager_name', '',array('class'=> 'form-control'))}}</td>
                        <td>{{Form::email('manager_email', '',array('class'=> 'form-control'))}}</td>
                        <td>{{Form::number('manager_phone','',array('class' => 'form-control' ))}}</td>
                        <td>{{Form::text('manager_notes','',array('class' => 'form-control' ))}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
{{Form::close()}}


<script>
    function gercekkisi() {
        $("#tax_number").hide();
        $("#tax_number_lb").hide();
        $("#tax_administrator").hide();
        $("#tax_administratorlb").hide();
        $("#identification_number").show();
        $("#identification_numberlb").show();




    }
</script>
<script>
    function tuzelkisi() {
        $("#tax_number").show();
        $("#tax_number_lb").show();
        $("#tax_administrator").show();
        $("#tax_administratorlb").show();
        $("#identification_number").hide();
        $("#identification_numberlb").hide();


    }
</script>



<script>
    $("#a13").addClass("active");
</script>
</div>
@endsection