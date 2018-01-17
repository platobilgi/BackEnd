@extends('admin.home')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <h4><i class="fa fa-angle-right"></i> Menüler</h4>
            <a href="{{URL::route('admin.menuler.add')}}"> <button type="submit" class="btn btn-theme col-md-12">Menü Ekle</button></a>
        @foreach($menuler as $menu)
            <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Menü Adı</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Url</th>
                    <th><i class="fa fa-bookmark"></i> Sıra</th>
                    <th><i class=" fa fa-edit"></i> Durum</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$menu->title}}</td>
                    <td>{{$menu->url}}</td>
                    <td>{{$menu->sort_order}} </td>
                    @if($menu->is_enabled===1)
                    <td><span class="label label-success label-mini">Aktif</span></td>
                    @elseif($menu->is_enabled===0)
                    <td><span class="label label-danger label-mini">Deaktif</span></td>
                    @endif

                    <td>
                        <a href="{{URL::route('admin.menuler.activator',$menu->id)}}" ><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                        <a href="{{URL::route('admin.menuler.update',$menu->id)}}" ><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{URL::route('admin.menuler.delete',$menu->id)}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>
                </tr>

                <tr>
                    <th><i class="fa fa-bullhorn"></i>Alt Menüler</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Url</th>
                    <th><i class="fa fa-bookmark"></i> Sıra</th>
                    <th><i class=" fa fa-edit"></i> Durum</th>
                    <th></th>
                </tr>
                @if($menu->has_dropdown===1)
                    @foreach($alt_menuler as $alt_menu)
                        @if($alt_menu->menus_id === $menu->id)
                <tr>
                    <td>{{$alt_menu->title}}</td>
                    <td>{{$alt_menu->url}}</td>
                    <td>{{$alt_menu->sort_order}}</td>
                    @if($alt_menu->is_enabled ===1)
                    <td><span class="label label-success label-mini">Aktif</span></td>
                    @elseif($alt_menu->is_enabled ===0)
                    <td><span class="label label-danger label-mini">Deaktif</span></td>
                    @endif
                    <td>
                        <a href="{{URL::route('admin.menuler.activatorsub',$alt_menu->id)}}" ><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                        <a href="{{URL::route('admin.menuler.updatesub',$alt_menu->id)}}" ><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{URL::route('admin.menuler.deletesub',$alt_menu->id)}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>
                </tr>

                @endif
                @endforeach
                    <tr>
                         <td><a href="{{URL::route('admin.menuler.addsub',$menu->id)}}"><button class="btn btn-theme">Alt Menü Ekle</button></a></td>
                    </tr>
                @else
                <tr>
                    <td>Alt Menü Mevcut Değil</td>
                    <td> <a href="{{URL::route('admin.menuler.addsub',$menu->id)}}"> <button class="btn btn-theme">Alt Menü Ekle</button></a></td>
                </tr>
                    @endif
                </tbody>

            </table>
            @endforeach
            <hr>

        </section>
    </section>

    </section>


@endsection