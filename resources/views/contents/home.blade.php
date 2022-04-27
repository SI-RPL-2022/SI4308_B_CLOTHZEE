@extends('layout.template')

@section('konten')
<br>
<!-- carousel -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="gambar5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="gambar4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br><br>

<!-- card konfeksi berdasarkan abjad -->
<div class="container-fluid" style=" height: 1400px; background-color: white">
    <h4 class="pt-3" style="text-align: left;">Semua Konfeksi</h4><br>
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
            @endforeach
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection