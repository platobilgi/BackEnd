@extends('layouts.back')

@section('content')
    <div id="login-page">
        <div class="container">
            <form class="form-login" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h2 class="form-login-heading">Zeplin'e Hoşgeldiniz!</h2>
                <div class="login-wrap">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" name="email" type="email" class="form-control" placeholder="E Mail" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <br>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Parolamı Unuttum</a>

		                </span>
                        </label>
                        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Giriş Yap</button>
                        <hr>
                        <div class="registration">
                            Hesabınız yok mu?<br/>
                            <a class="" href="{{URL::route('register')}}">
                                Hesap Oluştur
                            </a>
                        </div>
                    </div>
                    <!-- Modal -->


                </div>
            </form>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Parolamı Unuttum</h4>
                            </div>
                            <div class="modal-body">
                                <p>Parolanızı sıfırlamak için mail adresinizi giriniz.</p>
                                <input type="text" id="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">İptal</button>
                                <button class="btn btn-theme" type="submit">Sıfırla</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection