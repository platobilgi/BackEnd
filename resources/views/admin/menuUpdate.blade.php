@extends('admin.home')
@section('content')
    <div class="container">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Menü Düzenle</h4>
                    <form role="form" class="form-horizontal style-form" method="POST" action="{{URL::route('admin.menuler.update',$menu->id)}}">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Başlık:</label>
                            <div class="col-sm-10">
                                <input id="title" name="title" type="text" value="{{$menu->title}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Url:</label>
                            <div class="col-sm-10">
                                <input id="url" name="url" type="text" value="{{$menu->url}}" class="form-control">
                            </div>
                        </div>
                        @if(is_null($menu->html))
                            <script type="application/javascript">
                                $("#editor").hide();
                            </script>
                        @else <div style="" id="editor" class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tasarımınız:</label>
                            <div class="col-sm-10">
                                <textarea id="ckeditor" name="ckeditor" class=""></textarea>
                                <script>
                                    CKEDITOR.replace( 'ckeditor' );
                                    CKEDITOR.instances.ckeditor.setData('{!! $menu->html !!}');
                                    CKEDITOR.config.fillEmptyBlocks = true;

                                </script>
                            </div>
                        </div>
                    @endif
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Sıra:</label>
                            <div class="col-sm-10">
                                <input id="sortOrder" name="sortOrder" type="number" value="{{$menu->sort_order}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Durum:</label>
                            <div class="col-sm-10">
                                <input id="enabled" name="enabled" type="number" value="{{$menu->is_enabled}}" class="form-control">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-theme">Güncelle</button>
                    </form>
                </div>
            </div><!-- col-lg-12-->
        </div><!-- /row -->
    </div>
@endsection