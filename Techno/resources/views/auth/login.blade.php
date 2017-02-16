@extends('layouts.app')

@section('content')
<header>
        <div class="container">
            <div class="row">

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-6">
                <div class="col-lg-12">
                    <img class="img-responsive" src="bootstrap3/img/logo.jpg" width="150" height="150" alt="">
                    <div class="intro-text">
                        <h1 class="name">Bengkel Online</h1>

                        <span class="skills">Kami Ada Karena Anda!</span>
                    </div>
                </div>
                    <div class="box animated bounceInDown">
                   <h3> <small class="animated fadeIn" style="animation-delay: 1s;">Silahkan Masuk!</small></h3>
                    <hr />
                        <form action="{{ url('/login') }}" method="POST" class="form-horizontal" role="form">
                          {{ csrf_field() }}
                            <div class="form-group has-feedback animated bounceInLeft" style="animation-delay: 1s;">
                                <input type="text" name="email" id="username" class="form-control" placeholder="Username"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback animated bounceInRight" style="animation-delay: 1s;">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                             </div>

                            <div class="form-group animated bounceInDown" style="animation-delay: 2s;">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary btn-block">Masuk<span class="fa fa-key"></span></button>
                                </div>
                            </div>
                            <div class="form-group text-center">
                            <a href="{{url('/password/reset')}}">Lupa Password?</a><br>
                            Belum Punya akun? <a href="{{url('/register')}}">Buat Akun!</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</header>
@endsection
<!DOCTYPE html>
