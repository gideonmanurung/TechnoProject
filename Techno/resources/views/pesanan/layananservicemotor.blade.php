@extends('layouts.appLogin')

@section('content')
<header>
<div class="container">
  <div class="row">
    <div class="row">
      <div class="col-sm-12 text-center">




<h2>Jenis Layanan Service {{$category}}</h2>
<br><br>
        <form class="" action="{{route('pesananServiceMotor.store')}}" method="post">
          {{csrf_field()}}
          <div class=" col-sm-6 text-center">
            <label>Perawatan</label><br>
            <input type="hidden" name="email" value="{{Auth::user()->email}}">
            <input type="hidden" name="alamat" value="{{Auth::user()->alamat}}">
            <input type="hidden" name="jenis" value="{{$jenis}}">
            <input type="hidden" name="category" value="{{$category}}">
            <input type="hidden" name="jangka" value="1">
            <p>Service untuk sekali saja</p><br><br><br><br>
          <button>Pesan Sekarang</button>
          </div>
        </form>

        <form class="" action="{{route('pesananServiceMotor.store')}}" method="post">
          {{csrf_field()}}
          <div class="col-sm-6 text-center">
            <label>Service Berkala</label></a><br>
            <p>Service dalam jangka waktu tertentu</p>
            <p> Jangka waktu</p>
            <input type="hidden" name="email" value="{{Auth::user()->email}}">
            <input type="hidden" name="alamat" value="{{Auth::user()->alamat}}">
            <input type="hidden" name="jenis" value="{{$jenis}}">
            <input type="hidden" name="category" value="{{$category}}">
            <select name="jangka">

                <option value="">1</option>

               <?php for($i=2;$i<=10;$i++){

                 echo" <option>$i</option>";

                 } ?>

          </select>/Bulan<br><br>
           <button>Pesan Sekarang</button>
          </div>
        </form>
      </div>
    </div>
  </div>
 </div>
<br>
<br>
<br>
<br>
</header>
@endsection
