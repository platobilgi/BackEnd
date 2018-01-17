@extends('layouts.master')
@section('content')
@section('title')
    Kasa ve Bankalar
@endsection
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="page-heading">

    <div class="row">
        <div class="col-md-12 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Kasalar ve Bankalar</strong> Listesi</h2>
                    <div class="additional-btn">
                        <a href="#" onclick="temizle()" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="data-table-toolbar">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <div class="toolbar-btn-action">
                                    <a style="margin: 5px"href="{{URL::route('nakit.bankaekle')}}" class="ui purple basic button"><i class="fa fa-plus-circle"></i>Yeni Banka Hesabı Ekle</a>
                                    <a style="margin: 5px"href="{{URL::route('nakit.kasaekle')}}" class="ui yellow basic button"><i class="fa fa-plus-circle"></i>Yeni Kasa Hesabı Ekle</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if($liste)

                            <table data-sortable class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Açıklama</th>
                                    <th>IBAN Numarası</th>
                                    <th>Bakiye</th>
                                </tr>
                                </thead>

                                <tbody id="musteri-tablo">
                                @foreach($liste as $list)
                                    <tr>
                                        <td><strong>{{$list->description}}</strong></td>
                                        <td>{{$list->iban}}</td>
                                        <td>{{$list->balance}}</td>
                                        <td>

                                            @if($list->types_id==11)
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{URL::route('nakit.kasaduzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    <a href="{{URL::route('nakit.kasadetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                                </div>
                                            @endif
                                            @if($list->types_id==12)
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{URL::route('nakit.bankaduzenle',$list->id)}}" data-toggle="tooltip" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    <a href="{{URL::route('nakit.bankadetay',$list->id)}}" data-toggle="tooltip" title="Detay" class="btn btn-default"><i class="glyphicon glyphicon-info-sign
"></i></a>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                                <tbody id="aramaSonuclari" style="display: none">
                                </tbody>

                            </table>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#a31").addClass("active");
</script>


@endsection
