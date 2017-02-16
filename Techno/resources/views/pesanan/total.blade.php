@extends('layouts.appLogin')

@section('content')
<header>
  <div class="container">
  <div class="row">
  <div class="title"><h3>Keranjang Belanja Anda</h3>
  <br>
  <br>
   <br>
  <br></div>

<table class="table table-hover table-condensed">
<tr>
<th><center>Nama Barang</center></th>
<th><center>Jumlah Barang</center></th>
<th><center>Sub Total</center></th>
<th><center>Pilihan</center></th>
</tr>
@foreach($fuels as $fuel)
        <tr>
          <td>{{$fuel->kategori}}</td>
          <td>{{$fuel->jumlah}}</td>
          <td>{{$fuel->totalHarga}}</td>
          <td><a href="{{route('pesananFuel.edit', $fuel->idPemesanan)}}">Ubah</a>
          </td>
        </tr>
@endforeach
<tr>
<th><center>Total Belanja Anda</center></th>
</tr>
</table>
  </div>
  <div class="container">
  <div class="row">
  <div class="title"><h3>Daftar Layanan Service Anda</h3>
  <br>
  <br>
   <br>
  <br></div>

<table class="table table-hover table-condensed">
<tr>
<th><center>Kategori</center></th>
<th><center>Alamat</center></th>
<th><center>Jangka Waktu</center></th>
<th><center>Pilihan</center></th>
</tr>
@foreach($services as $service)
        <tr>
          <td>{{$service->kategori}}</td>
          <td>{{$service->alamat}}</td>
          <td>{{$service->jangkaWaktu}}</td>
        </tr>
@endforeach
</table>
  <ul class="pager">
  <li class="previous"><a href="{{url('/home')}}">Home</a></li>
  <li class="next"><a href="#">Selanjutnya</a></li>
</ul>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  </div>
</header>

@endsection
