@extends('layout.template')

@section('konten')

<br>
<div class="container-fluid">
<h2 class="text-center"><b>DATA PESANAN</b></h2>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer</th>
      <th scope="col">Alamat</th>
      <th scope="col">No HP</th>
      <th scope="col">Barang</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nanda</td>
      <td>Bandung</td>
      <td>1111111</td>
      <td>Sapu</td>
      <td><button class="btn btn-primary" type="submit">Edit ya dek</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jeje</td>
      <td>Bumi Bulat</td>
      <td>22222</td>
      <td>Parfum</td>
      <td><button class="btn btn-primary" type="submit">Edit ya dek</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Naya</td>
      <td>Cikoneng</td>
      <td>3333</td>
      <td>Barang Terlarang</td>
      <td><button class="btn btn-primary" type="submit">Edit ya dek</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Tammara</td>
      <td>Lapten</td>
      <td>44444</td>
      <td>Pelampung</td>
      <td><button class="btn btn-primary" type="submit">Edit ya dek</button></td>
    </tr>
  </tbody>
</table>

</div>

@endsection