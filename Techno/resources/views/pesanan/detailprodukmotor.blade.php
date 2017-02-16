@extends('layouts.appLoginMotor')

@section('content')
<header>
<div class="container">
<div class="row">
                <div class="col-lg-12">
  <h3>Detail Produk</h3>
  <br><br>
  </div>
  </div>
<div class="row" align="center">
<div class="col-sm-11">
<div class="col-sm-6">
              <div class="thumbnail">
              
    <input type="hidden" name="nama" value="Noken As Yamaha Mio" >
    <img src="bootstrap3/img/1.jpg" width="200" height="200" alt="">
</div>
</div>
<div class="col-sm-6">
<table>
<tr>
<th>Nama Produk :</th>
</tr>
<br>
<tr>
<th>Stok Barang :</th>
</tr>
<br>
<tr>
<th>Deksripsi Barang :</th>
</tr>
<br>
<tr>
<th>Jumlah Barang</th>
<th><input type="text" name="jumlah"></th>
</tr>
</table>
<br>
<br>
<a href=""><button align="center">Beli</button></a>
</div>
</div>
</div>
</div>
</header>
@endsection