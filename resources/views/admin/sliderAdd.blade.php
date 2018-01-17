@extends('admin.home')
@section('content')
    <div class="container">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Slider Ekle</h4>
                        <form role="form" class="form-horizontal style-form" method="POST" enctype="multipart/form-data" action="{{URL::route('admin.sliderlar.add')}}">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Başlık:</label>
                                <div class="col-sm-10">
                                    <input id="title" name="title" type="text" value="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Açıklama:</label>
                                <div class="col-sm-10">
                                    <input id="description" name="description" type="text" value="" class="form-control">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Fotoğraf:</label>
                                <div class="col-sm-10">
                                    <input type="file" id="file" name="file" class="form-control">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Sıra:</label>
                                <div class="col-sm-10">
                                    <input id="sortOrder" name="sortOrder" type="number" value="" class="form-control">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Durum:</label>
                                <div class="col-sm-10">
                                    <input id="enabled" name="enabled" type="number" value="" class="form-control">
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