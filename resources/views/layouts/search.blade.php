@extends('layouts.app')
@section('content')
<section id="blog" class="container">
    <div class="center">
        <h2>Sonuçlar</h2>
        <p class="lead"></p>
    </div>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                @foreach($sonuc as $s)
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="{{URL::route('ana')}}/images/slider/{{$s->bg_img}}" width="100%" alt="" />
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h2>{{$s->title}}</h2>
                            <p>{{$s->description}}</p>
                        </div>
                    </div>
                </div>
                    <hr>
                    @endforeach
            </div>
        </div>

    </div>

</section>
    @endsection
