@extends('layouts.app')
@section('content')
    <section class="content">
    <div class="container">
        @if(count($content)==0)
            @else
        @foreach($content as $s)
            {!! $s->html !!}
        @endforeach
            @endif
        @if(count($contentsub)==0)
                @else
                @foreach($contentsub as $s)
                    {!! $s->html !!}
                @endforeach
            @endif
    </div>
    </section>
    @endsection
  