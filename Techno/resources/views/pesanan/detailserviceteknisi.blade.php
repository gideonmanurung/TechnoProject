@extends('layouts.appLoginMotor')

@section('content')
<header>
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
 <h3>Detail Layanan Service</h3>
 <br>
  </div>
  </div>
  <div class="row" align="center">
<div class="col-sm-16">
<div class="col-sm-4">
<form align="center">
<table class="table table-hover table-condensed" align="center">
  <tr>
  <th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Keterangan Service</th>
<th>Harga</th>
<th>Pilihan</th>

</tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><button class="btn btn-danger">Terima</button>
    </tr>

  </table>
</form>
<a href=""><button class="btn btn-primary">Terima</button></a>
</div>
</div>
</div>
</div>
</header>

@endsection