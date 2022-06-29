@extends('layout.template')

@section('konten')
<div class="profile shadow border border-1 rounded-3 m-5 p-2">
    <div class="fs-3 text-center mb-2">Profil Toko</div>
    <div class="row">
        <div class="col-3">
            <img src="{{$data_toko->foto_profil}}" alt="" width="300">
        </div>
        <div class="col-1"></div>
        <div class="col-8">
            <table class="table ">
                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>: {{$data_toko->nama}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Deskripsi</th>
                        <td>: {{$data_toko->deskripsi}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Lokasi</th>
                        <td>: {{$data_toko->lokasi}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Gmaps</th>
                        <td>{{!! $data_toko->urL_gmaps !!}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="{{route('editToko')}}" class="btn btn-primary w-100">Ubah Data</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="profile shadow border border-1 rounded-3 m-5 p-2">
    <div class="fs-3 text-center mb-2">List Produk</div>
    @foreach($daftar_produk as $produk)
    <div class="card" style="width: 18rem;">
        <img src="{{$produk->foto_produk}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $produk->nama }}</h5>
            <p class="card-text">{{ $produk->deskripsi }}</p>
            <form action="{{route('editProduct')}}" method="POST">
                @csrf
                <input type="number" name="id_produk" id="" value="{{ $produk->id }}" hidden>
                <input type="submit" value="Edit Data Produk" class="btn btn-primary">
            </form>
        </div>
    </div>
    @endforeach
    <a href="" class="btn btn-primary mt-3 w-100">Tambah Produk</a>
</div>
@endsection