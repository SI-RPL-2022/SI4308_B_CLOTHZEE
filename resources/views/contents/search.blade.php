@extends('layout.template')

@section('konten')
<br><br><br>
<h5 style="text-align:Left;">Menampilkan konfeksi untuk "{{$keyword}}"</h5>
<br><br>

<div class="container-fluid" style=" height: 900px; ">
    <div class="container-outline-secondary">
        <div class="row row-cols-md-4 g-4">
            @foreach($list_toko as $toko)
            <div class="col">
                <div class="card shadow">
                    <img src="{{ $toko->foto_profil }}" class="rounded-3" alt="p1">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center;">{{ $toko->nama}}</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $toko->deskripsi}}</li>
                        <!-- <li class="list-group-item">Jenis Kain : Jersey, Katun, dll</li> -->
                        <li class="list-group-item">Location : {{ $toko->lokasi}}</li>
                        <li class="list-group-item">
                            <div class="d-flex">
                                <img src="img/logo/star.png" style="width: 20px; height:20px;" alt="" class="m-1">
                                <p class="pt-1">4.9 | terjual 130+</p>
                            </div>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('lihatToko', ['id' => $toko->id ])}}" class="card-link">Lihat detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection