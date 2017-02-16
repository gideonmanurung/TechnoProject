@extends('layouts.appLoginMobil')

@section('content')
<header>
 <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 <div class="intro-text">
            <h1>Layanan Service Mobil</h1>
            </div>
            </div>
            </div>


  <div class="row" align="center">
      <div class="col-sm-11">
            <h5>Kategori Layanan:</h5>
            <div class="row" align="center">
              <form class="" action="{{route('service.store')}}" method="post">
                {{csrf_field()}}
                <div class="col-sm-4">
                <div class="thumbnail">
                <h3>Service Lengkap</h3><br>
                <p>Waktu Layanan</p>
                <h4>1-2 jam</h4>
                <p>Layanan seperti pembersihan busi,pembersihan danpenyetelan karburator,pembersihan saringan udara, ganti oli,pelumas rantai,pemeriksaan roda,ban,baut,mur,kabel gas, stang kemudi,dll</p>
                <br>
                <br>
                <input type="hidden" name="category" value="Lengkap">
                <input type="hidden" name="jenis" value="Mobil">
                <button>Berlangganan</button>
                </div>
                </div>
              </form>

              <form class="" action="{{route('service.store')}}" method="post">
                {{csrf_field()}}
                <div class="col-sm-4">
                 <div class="thumbnail">
                <h3>Service Ringan</h3><br>
                <p>Waktu Layanan</p>
                <h4>30 menit - 1 jam</h4>
                <p>Layanan yang kami berikan hanya pembersihan,penyetelan dan pemeriksaan dari kerburator,oli,rantai,dan aki.</p><br><br><br><br><br><br>
                <input type="hidden" name="category" value="Ringan">
                <input type="hidden" name="jenis" value="Mobil">
                <button>Berlangganan</button>
                </div>
                </div>
              </form>

              <form class="" action="{{route('service.store')}}" method="post">
                {{csrf_field()}}
                <div class="col-sm-4">
                <div class="thumbnail">
                <h3>Service Berat</h3><br>
                <p>Waktu Layanan</p>
                <h4>Tergantung banyaknya kerusakan</h4>
                <p>Layanan ini mencakup penggantian spare part di dalam ruang bakar(Piston set) dan komponen-komponen di dalam ruang transmisi.</p><br><br><br><br>
                <br>
                <input type="hidden" name="category" value="Berat">
                <input type="hidden" name="jenis" value="Mobil">
                <button>Berlangganan</button>
                </div>
                </div>
              </form>
              </div>
              </div>
            </div>


            </header>
@endsection
