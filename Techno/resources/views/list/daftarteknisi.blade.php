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
</tr>
@foreach($teknisis as $teknisi)
    <form class="" action="{{route('profilteknisi.store')}}" method="post">
      {{csrf_field()}}
      <tr>
        <td>{{$teknisi->name}}</td>
        <td>{{$teknisi->noTelp}}</td>
        <td>{{$teknisi->alamat}}</td>
        <td><button class="btn btn-info">Detail</button></td>
        <input type="hidden" name="username" value="{{$teknisi->username}}">
      </tr>
    </form>
@endforeach
</table>
  <ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>

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
