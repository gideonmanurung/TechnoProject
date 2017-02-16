@extends('layouts.appLoginMotor')

@section('content')
<header>
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
 <h3>Detail Pembelian Anda</h3>
 <br>
  </div>
</div>
  <div class="row" align="center">
<div class="col-sm-12">
<div class="col-sm-12">
<div class="thumbnail">
<form method="post" action="{{route('pesananSparepartMotor.store')}}">
<table>
  {{csrf_field()}}
  <input type="hidden" name="idBarang" value="{{$barang->id}}">
  <input type="hidden" name="email" value="{{Auth::user()->email}}">
 <h4>Alamat Pengiriman</h4>
  <tr><th>Nama Sparepart </th><td>{{$barang->namaProduk}}</td></tr>
  <tr><th>Deskripsi </th><td>{{$barang->description}}</td></tr>
  <tr><th>Harga </th><td>Rp {{$barang->harga}}</td></tr>
<tr><th>Alamat</th><td><textarea name="alamat"></textarea></td></tr>
  <tr><th>Nomor Handphone</th><th><input type="text" name="nomor" value="{{Auth::user()->noTelp}}"></th></tr>
  <tr><th>Jumlah</th>
    <td><select name="jumlah">

        <option value="">1</option>

       <?php for($i=2;$i<=10;$i++){

         echo" <option>$i</option>";

         } ?>

  </select></td>
  </tr>
  <br>
  </table>
 <br>
</div>
</div>

</div>
<button class="btn btn-primary" align="left">Pesan</button>
</form>
</header>
@endsection
