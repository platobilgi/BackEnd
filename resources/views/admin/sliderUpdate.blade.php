@extends('admin.home')
@section('content')
    <div class="container">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Slider Ayarları</h4>
                    <form role="form" class="form-horizontal style-form" method="POST" action="{{URL::route('admin.sliderlar.update',$slider->id)}}">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-sm-2 col-sm-2 control-label">Başlık:</label>
                                <div class="col-sm-10">
                                    <input id="title" name="title" type="text" value="{{$slider->title}}" class="form-control">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Açıklama:</label>
                                <div class="col-sm-10">
                                    <input id="description" name="description" type="text" value="{{$slider->description}}" class="form-control">
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Fotoğraf:</label>
                                <div class="col-sm-10">
                                    <input id="bg_img" name="bg_img" type="url" value="{{$slider->bg_img}}" class="form-control">
                                    @if ($errors->has('bg_img'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bg_img') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Sıra:</label>
                                <div class="col-sm-10">
                                    <input id="sortOrder" name="sortOrder" type="number" value="{{$slider->sort_order}}" class="form-control">
                                    @if ($errors->has('sortOrder'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sortOrder') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Durum:</label>
                                <div class="col-sm-10">
                                    <input id="enabled" name="enabled" type="number" value="{{$slider->is_enabled}}" class="form-control">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if ($errors->has('enabled'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('enabled') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-theme">Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection