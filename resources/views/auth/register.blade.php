@extends('layouts.back')

@section('content')
    <div id="login-page">
        <div class="container">
            <form class="form-login" role ="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <h2 class="form-login-heading">Zeplin'e Hoşgeldiniz!</h2>
                    <div class="login-wrap">
                        <input id="name" name="name" type="text" class="form-control" placeholder="Adınzı giriniz" autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                        <br>
                        <input id="email" name="email" type="email" class="form-control" placeholder="E Mail adresinizi giriniz" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <br>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Parola giriniz.">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <br>
                        <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Parolayı tekrar giriniz.">
                        <br>
                        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Kayıt Ol</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection