@extends('layouts.appLoginMobil')

@section('content')
<header>
<div class="container  bg-1 text-center">
  <h2>Layanan Mobil</h2><br><br>
 <div class="row">
   <div class="col-sm-6 text-center">
     <label>Service</label><br>
     <a href="{{url('pesananServiceMobil')}}"><img src="images/service.jpg" width="200" height="200"></a>
   </div>
   <div class="col-sm-6 text-center">
     <label>Bahan Bakar</label></a><br>
     <a href="{{url('pesananFuel')}}"><img src="images/bahanbakar.jpg" width="200" height="200"></a>
   </div><br>
   <div class="col-sm-6 text-center">
     <label>Suku Cadang</label><br>
     <a href="{{url('pesananSparepartMobil')}}"><img src="images/sukucadang.jpg" width="200" height="200"></a>
   </div>
   <div class="col-sm-6 text-center">
     <label>Panggil Teknisi</label><br>
     <a href="{{url('pesananReserve')}}"><img src="images/panggil.jpg" width="200" height="200"></a>
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
