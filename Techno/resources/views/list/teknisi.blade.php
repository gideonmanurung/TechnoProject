@extends('layouts.appLogin')

@section('content')
<header>
  <div class="container">
  <div class="row">
  <div class="title"><h3>Daftar Teknisi Bengkel Online</h3>
  <br>
  <br>
   <br>
  <br></div>

<table class="table table-hover table-condensed">
<tr>
<th><center>Nama</center></th>
<th><center>No Telepon/Handphone</center></th>
<th><center>Alamat</center></th>
<th><center>Email</center></th>
</tr>
<tr>
  <td>{{$teknisi->name}}</td>
  <td>{{$teknisi->noTelp}}</td>
  <td>{{$teknisi->alamat}}</td>
  <td>{{$teknisi->email}}</td>
</tr>
</table>
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
