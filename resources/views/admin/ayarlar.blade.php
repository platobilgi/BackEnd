@extends('admin.home')
@section('content')
    <div class="container">
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Üst Menü Ayarları</h4>
                <form role="form" class="form-horizontal style-form" method="POST" action="{{URL::route('admin.ayarlar')}}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-sm-2 col-sm-2 control-label">Telefon:</label>
                        <div class="col-sm-10">
                            <input id="tel" name="tel" type="tel" value="{{$bar->phone_number}}" class="form-control">
                            @if ($errors->has('tel'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Adres:</label>
                        <div class="col-sm-10">
                            <input id="adres" name="adres" type="text" value="{{$bar->address}}" class="form-control">
                            @if ($errors->has('adres'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('adres') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Facebook:</label>
                        <div class="col-sm-10">
                            <input id="facebook" name="facebook" type="url" value="{{$bar->facebook}}" class="form-control">
                            @if ($errors->has('facebook'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Twitter:</label>
                        <div class="col-sm-10">
                            <input id="twitter" name="twitter" type="url" value="{{$bar->twitter}}" class="form-control">
                            @if ($errors->has('twitter'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Linkedin:</label>
                        <div class="col-sm-10">
                            <input id="linkedin" name="linkedin" type="url" value="{{$bar->linkedin}}" class="form-control">
                            @if ($errors->has('linkedin'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Skype:</label>
                        <div class="col-sm-10">
                            <input id="skype" name="skype" type="text" value="{{$bar->skype}}" class="form-control">
                            @if ($errors->has('skype'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('skype') }}</strong>
                                    </span>
                            @endif
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-theme">Güncelle</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endsection