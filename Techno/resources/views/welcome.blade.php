@extends('layouts.app')

@section('content')
<header>
 <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class=" img-rounded" src="bootstrap3/img/logo.jpg" width="150" height="150" alt="">
                    <div class="intro-text">
                        <span class="name">Bengkel Online</span>

                        <span class="skills">Kami Ada Karena Anda!</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
        <div class="container1 bg-1 text-center">
          <h3>Selamat Datang!</h3>
          <p>Silahkan telusuri</p><br>
          <div class="row">
            <div class="col-sm-6">
              <p><strong>Motor</strong></p>
              <a href="{{url('/login')}} " data-toggle="tooltip"  title="Layanan Motor"><img src="images/motor.jpg" class="img-circle-person" alt="Random Name" width="200" height="200"></a>
            </div>
            <div class="col-sm-6">
              <p><strong>Mobil</strong></p>
              <a href="{{url('/login')}}" data-toggle="tooltip"  title="Layanan Mobil"><img class="img-circle-person" src="images/setir.jpg" alt="Random Name" width="200" width="200"></a>
            </div>
          </div>
          </div>
        </div><br>
           <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
  </header>

@endsection
<!DOCTYPE html>
