@extends('layouts.appLogin')

@section('content')
<header>
 <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="intro-text">
            <h1>Bahan Bakar</h1>
        </div>
      </div>
    </div>
      <div class="container1  bg-1 text-center">
  <div class="row">
        <div class="col-sm-12 text-center">
          <form class="" action="{{route('fuel.store')}}" method="post">
            {{csrf_field()}}
            <div class=" col-sm-4 text-center">
              <label>Bensin</label><br>
              <input type="hidden" name="categori" value="Bensin">
              <img src="bootstrap3/img/bensin.jpg" width="200" height="200"><br>
              Rp 7000,-/liter<br>
              <button>Pesan</button>
            </div>
          </form>
          <form class="" action="{{route('fuel.store')}}" method="post">
            {{csrf_field()}}
            <div class="col-sm-4 text-center">
              <label>Solar</label></a><br>
              <input type="hidden" name="categori" value="Solar">
              <img src="bootstrap3/img/solar.jpg" width="200" height="200"><br>
              Rp 8000,-/liter<br>
              <button>Pesan</button>
            </div>
          </form>
          <form class="" action="{{route('fuel.store')}}" method="post">
            {{csrf_field()}}
            <div class="col-sm-4 text-center">
              <label>Pertalite</label><br>
              <input type="hidden" name="categori" value="Pertalite">
              <img src="bootstrap3/img/pertalite.jpg" width="200" height="200"><br>
              Rp 9000,-/liter<br>
              <button>Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </form>
 </div>
 </div>
 </div>
@endsection
