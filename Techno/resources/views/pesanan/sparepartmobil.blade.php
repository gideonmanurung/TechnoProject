@extends('layouts.appLoginMobil')

@section('content')
<header>
 <div class="container">
            <div class="row">
                <div class="col-lg-12">

  <h3>Suku Cadang Mobil Kami!</h3>
  <br>
  <br>
  <br>
  <br>
  </div>
  </div>
  <div class="row" align="center">
   <div class="col-sm-12">
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Kaliper Kit-Toyota</h6>
                  <input type="hidden" name="idBarang" value="10">
                  <img src="bootstrap3/img/10.jpg" width="100" height="100" alt="">
                  <p>Rp 66.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Spring Buffer Datsun</h6>
                  <input type="hidden" name="idBarang" value="11">
                  <img src="bootstrap3/img/11.jpg" width="100" height="100" alt="">
                  <p>Rp 310.600,-</p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Pompa Solar Panther</h6>
                  <input type="hidden" name="idBarang" value="12">
                  <img src="bootstrap3/img/12.jpg" width="100" height="100" alt="">
                  <p>Rp 155.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Swicth Spion Retract Toyota Honda Nissan</h6>
                  <input type="hidden" name="idBarang" value="13">
                  <img src="bootstrap3/img/13.jpg" width="100" height="100" alt="">
                  <p>Rp 150.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Motor Fan Radiator Nissan </h6>
                  <input type="hidden" name="idBarang" value="14">
                  <img src="bootstrap3/img/14.jpg" width="100" height="100" alt="">
                  <p>Rp 400.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Brake Drum/Tromol-Innova</h6>
                  <input type="hidden" name="idBarang" value="15">
                  <img src="bootstrap3/img/15.png" width="100" height="100" alt="">
                  <p>Rp 407.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Busi BOSCH Platinum Plus</h6>
                  <input type="hidden" name="idBarang" value="16">
                  <img src="bootstrap3/img/16.jpg" width="100" height="100" alt="">
                  <p>Rp 60.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Filter Evaporator AC Honda Jazz</h6>
                  <input type="hidden" name="idBarang" value="17">
                  <img src="bootstrap3/img/17.jpg" width="100" height="100" alt="">
                  <p>Rp 65.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
                  </p>
                </div>
              </div>
            </form>
            <form class="" action="{{route('pengirimansparepart.store')}}" method="post">
              {{csrf_field()}}
              <div class="col-sm-4">
                <div class="thumbnail">
                  <h6>Sensor Spedomotor Maestro</h6>
                  <input type="hidden" name="idBarang" value="18">
                  <img src="bootstrap3/img/18.jpg" width="100" height="100" alt="">
                  <p>Rp 225.000,-</p>
                  <p>
                  <button class="btn btn-primary">Beli</button>
                  <a href="" class="btn btn-info">Detail</a>
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
