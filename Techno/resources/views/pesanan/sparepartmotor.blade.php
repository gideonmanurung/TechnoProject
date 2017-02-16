@extends('layouts.appLoginMotor')

@section('content')
<header>
 <div class="container">
            <div class="row">
                <div class="col-lg-12">
  <h3>Suku Cadang Motor Kami!</h3>
  </div>
  </div>
  <div class="row" align="center">
   <div class="col-sm-11">
      <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
      {{csrf_field()}}
        <div class="col-sm-4">
          <div class="thumbnail">
            <h6>Noken As Yamaha Mio</h6>
            <input type="hidden" name="idBarang" value="1">
            <img src="bootstrap3/img/1.jpg" width="70" height="70" alt="">
            <p>Rp 200.000,-</p>
            <p>
              <button class="btn btn-primary">Beli</button>
              <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
            </p>
          </div>
        </div>
      </form>
      <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
      {{csrf_field()}}
        <input type="hidden" name="email" value="{{Auth::user()->email}}">
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Karburator Original Honda Mega Pro 2010</h6>
              <input type="hidden" name="idBarang" value="2">
              <img src="bootstrap3/img/2.jpg" width="100" height="100" alt="">
              <p>Rp 1.530.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
        <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Busi Iridium Ninja</h6>
              <input type="hidden" name="idBarang" value="3">
              <img src="bootstrap3/img/5.jpg" width="100" height="100" alt="">
              <p>Rp 100.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
        <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Ganda Kopling Assy KMR-Mio</h6>
              <input type="hidden" name="idBarang" value="4">
              <img src="bootstrap3/img/3.jpg" width="100" height="100" alt="">
              <p>Rp 180.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
        <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Aki kering/Tiger 2000 Honda</h6>
              <input type="hidden" name="idBarang" value="5">
              <img src="bootstrap3/img/3.jpg" width="100" height="100" alt="">
              <p>Rp 265.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
        <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Bohlam Yamaha Vixion</h6>
              <input type="hidden" name="idBarang" value="6">
              <img src="bootstrap3/img/6.jpg" width="100" height="100" alt="">
              <p>Rp 25.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
        <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Rumah Roller Komplit Beat</h6>
              <input type="hidden" name="idBarang" value="7">
              <img src="bootstrap3/img/7.jpg" width="100" height="100" alt="">
              <p>Rp 95.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
        <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Pirigan Rem Cakram</h6>
              <input type="hidden" name="idBarang" value="8">
              <img src="bootstrap3/img/3.jpg" width="100" height="100" alt="">
              <p>Rp 85.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
        <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-4">
            <div class="thumbnail">
              <h6>Gir Kopling Raccy</h6>
              <input type="hidden" name="idBarang" value="9">
              <img src="bootstrap3/img/3.jpg" width="100" height="100" alt="">
              <p>Rp 72.000,-</p>
              <p>
                <button class="btn btn-primary">Beli</button>
                <a href="{{route('detail.store')}}" class="btn btn-info">Detail</a>
              </p>
            </div>
          </div>
        </form>
      </div>
      </div>
      </div>
      <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
      </div>
      </div>
    </header>




@endsection
