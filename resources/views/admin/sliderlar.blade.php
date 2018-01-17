@extends('admin.home')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Sliderlar</h4>
                            <a href="{{URL::route('admin.sliderlar.add')}}"> <button type="submit" class="btn btn-theme col-md-12">Slider Ekle</button></a>

                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Başlık</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Açıklama</th>
                                <th><i class="fa fa-bookmark"></i> Fotoğraf</th>
                                <th><i class=" fa fa-edit"></i> Sıra</th>
                                <th><i class=" fa fa-edit"></i> Durum</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliderlar as $slider)
                                <tr>
                                <td>{{$slider->title}}</td>
                                <td class="hidden-phone">{{$slider->description}}</td>
                                <td><div class="project-wrapper">
                                        <div class="project">
                                            <div class="">
                                                <div class="photo">
                                                    <img class="img-responsive" style="width: 250px; height: 150px" src="{{URL::route('ana')}}/images/slider/{{$slider->bg_img}}" alt="">
                                                </div>
                                                <div class="overlay"></div>
                                            </div>
                                        </div>
                                    </div></td>
                                <td>{{$slider->sort_order}}</td>
                                    @if($slider->is_enabled === 1)
                                <td><span class="label label-success label-mini">Aktif</span></td>
                                    @endif
                                    @if($slider->is_enabled=== 0)
                                        <td><span class="label label-danger label-mini">Deaktif</span></td>
                                    @endif
                                <td>
                                    @if($slider->is_enabled===1)
                                    <a href="{{URL::route('admin.sliderlar.activator',$slider->id)}}"><button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-minus-circle"></i></button></a>
                                    @endif
                                    @if($slider->is_enabled===0)
                                            <a href="{{URL::route('admin.sliderlar.activator',$slider->id)}}"><button type="submit" class="btn btn-success btn-xs" ><i class="fa fa-check"></i></button></a>
                                    @endif
                                        <a href="{{URL::route('admin.sliderlar.update',$slider->id)}}" ><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                        <a href="{{URL::route('admin.sliderlar.delete',$slider->id)}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>


                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
    @endsection