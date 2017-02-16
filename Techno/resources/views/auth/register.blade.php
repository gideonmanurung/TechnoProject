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
                  <h2> <small class="animated fadeIn" style="animation-delay: 1s;">Silahkan Buat Akun!</small></h2>
                    <hr />
                    <form action="{{url('/register')}}" method="POST" class="form-horizontal" role="form">
                           {{ csrf_field() }}
                           <fieldset>
                             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                               <label class="control-label col-xs-3" for="Name">Nama:</label>
                               <div class="col-xs-9">
                                 <input name="name" type="text" class="form-control" id="Nama" placeholder="Nama Anda" value="{{ old('name') }}" required autofocus>
                                 @if ($errors->has('name'))
                                 <span class="help-block">
                                   <strong>{{ $errors->first('name') }}</strong>
                                 </span>
                                 @endif
                               </div>
                             </div>
                             <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                               <label class="control-label col-xs-3" for="Alamat">Alamat:</label>
                               <div class="col-xs-9">
                                 <textarea name="alamat" rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap" value="{{ old('alamat') }}" required autofocus></textarea>
                                 @if ($errors->has('alamat'))
                                 <span class="help-block">
                                   <strong>{{ $errors->first('alamat') }}</strong>
                                 </span>
                                 @endif
                               </div>
                             </div>
                             <div class="form-group{{ $errors->has('noTelp') ? ' has-error' : '' }}">
                               <label class="control-label col-xs-3" for="telp">No. Telp:</label>
                               <div class="col-xs-9">
                                 <input name="noTelp" type="tel" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone" value="{{ old('noTelp') }}" required autofocus>
                                 @if ($errors->has('noTelp'))
                                 <span class="help-block">
                                   <strong>{{ $errors->first('noTelp') }}</strong>
                                 </span>
                                 @endif
                               </div>
                             </div>
                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                               <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                               <div class="col-xs-9">
                                 <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                 @if ($errors->has('email'))
                                 <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                                 @endif
                               </div>
                             </div>
                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                               <label class="control-label col-xs-3" for="inputPassword">Kata Sandi:</label>
                               <div class="col-xs-9">
                                 <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Masukan Kata Sandi" value="{{ old('password') }}" required autofocus>
                                 @if ($errors->has('password'))
                                 <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                                 </span>
                                 @endif
                               </div>
                             </div>
                             <div class="form-group">
                            <label for="password-confirm" class="control-label col-xs-3">Confirm Password</label>
                            <div class="col-xs-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            </div>
                             <div class="form-group">
                               <div class="col-xs-offset-3 col-xs-9">
                                 <label class="checkbox-inline">
                                   <input type="checkbox" value="Setuju">Saya Setuju dengan <a href="{{url('/kebijakan')}}">Kebijakan dan Ketentuan</a> yang berlaku.
                                 </label>
                               </div>
                             </div><br>
                             <div class="form-group">
                               <div class="col-xs-offset-3 col-xs-9">
                                 <input type="submit" class="btn btn-primary" value="Kirim">
                                 <input type="reset" class="btn btn-default" value="Reset">
                               </div>
                             </div>
                           </fieldset>
                         </form>
                       </div>
                     </div>
                   </div>
                   </div>
                   </header>

@endsection
<!DOCTYPE html>
