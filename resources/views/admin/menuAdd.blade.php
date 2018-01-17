@extends('admin.home')
@section('content')
    <script type="application/javascript">$("#title").hide();
        $("#url").hide();
        $("#editor").hide();
        $("#sortOrder").hide();
        $("#enabled").hide();
        $("#buton").hide();</script>
    <div class="container">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Menü Ekle</h4>
                        <form role="form" class="form-horizontal style-form" method="POST" action="{{URL::route('admin.menuler.add')}}">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Menü Türü:</label>
                                <div class="col-sm-10">
                                <select id="options" name="options" onload="check()" onchange="check()" class="form-control">
                                    <option selected id="op0">Menü Türünü Seçiniz</option>
                                    <option id="op1">Menü + Bağlantı</option>
                                    <option id="op2">Menü + İçerik</option>
                                </select>
                                </div>
                            </div>
                            <script id="check" type="application/javascript">
                                function check() {
                                    var e = document.getElementById("options");
                                    var strUser = e.options[e.selectedIndex].id;
                                    if(strUser==='op0'){
                                        $("#title").hide();
                                        $("#url").hide();
                                        $("#editor").hide();
                                        $("#sortOrder").hide();
                                        $("#enabled").hide();
                                        $("#buton").hide();
                                    }
                                    if(strUser==='op1'){
                                        $("#title").show();
                                        $("#url").show();
                                        $("#sortOrder").show();
                                        $("#buton").show();
                                        $("#editor").hide();
                                        $("#enabled").show();
                                    }
                                    else if(strUser==='op2'){
                                        $("#title").show();
                                        $("#url").hide();
                                        $("#sortOrder").show();
                                        $("#buton").show();
                                        $("#editor").show();
                                        $("#enabled").show();
                                    }
                                        }
                            </script>
                            <div style="display: none" id="title" class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Başlık:</label>
                                <div class="col-sm-10">
                                    <input id="title" name="title" type="text" value="" class="form-control" >
                                </div>
                            </div>
                            <div style="display: none" id="url" class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Url:</label>
                                <div class="col-sm-10">
                                    <input id="url" name="url" type="text" value="" class="form-control">
                                </div>
                            </div>
                            <div style="display: none" id="editor" class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Tasarımınız:</label>
                                <div class="col-sm-10">
                                <textarea id="ckeditor" name="ckeditor" class=""></textarea>
                                    <script>
                                        CKEDITOR.replace( 'ckeditor' );
                                        CKEDITOR.config.fillEmptyBlocks = true;
                                    </script>
                                </div>
                            </div>
                            <div style="display: none" id="sortOrder" class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Sıra:</label>
                                <div class="col-sm-10">
                                    <input id="sortOrder" name="sortOrder" type="number" value="" class="form-control">
                                </div>
                            </div>
                            <div style="display: none" id="enabled" class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Durum:</label>
                                <div class="col-sm-10">
                                    <input id="enabled" name="enabled" type="number" value="" class="form-control">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                            <button style="display: none" id="buton" type="submit" class="btn btn-theme">Ekle</button>
                        </form>
                </div>
            </div><!-- col-lg-12-->
        </div><!-- /row -->
    </div>
@endsection