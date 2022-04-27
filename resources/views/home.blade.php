@extends('layout.template')

@section('konten')
        <br>
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
           
            <div class="container-fluid" style=" height: 500px; background-color: white">
            <h4 style="text-align: left;">Rekomendasi</h4><br>
                <div class="container-outline-secondary">
                    <div class="row row-cols-md-4 g-4">
                        <div class="col">
                            <div class="card shadow">
                                <img src="http://www.bastelindo.com/wp-content/uploads/2019/01/sejarah-konveksi-bandung-e1547664632904.jpeg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">UJANG KONFEKSI</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Jenis Kain : Jersey, Katun, dll</li>
                                    <li class="list-group-item">Location : Buah Batu</li>
                                    <li class="list-group-item">
                                    <div class="d-flex">
                                        <img src="img/logo/star.png" style="width: 20px; height:20px;" alt="" class="m-1">
                                        <p class="pt-1">4.9 | terjual 130+</p> 
                                    </div> 
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <a href="detail_produk" class="card-link">Lihat detail</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow">
                                <img src="http://www.bastelindo.com/wp-content/uploads/2019/01/sejarah-konveksi-bandung-e1547664632904.jpeg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Lotus Textile</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Jenis Kain : Jersey, Katun, dll</li>
                                    <li class="list-group-item">Location : Buah Batu</li>
                                    <li class="list-group-item">
                                    <div class="d-flex">
                                        <img src="img/logo/star.png" style="width: 20px; height:20px;" alt="" class="m-1">
                                        <p class="pt-1">4.7 | terjual 100+</p> 
                                    </div> 
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <a href="detail_produk" class="card-link">Lihat detail</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow">
                                <img src="http://www.bastelindo.com/wp-content/uploads/2019/01/sejarah-konveksi-bandung-e1547664632904.jpeg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Bahagia Selalu</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Jenis Kain : Jersey, Katun, dll</li>
                                    <li class="list-group-item">Location : Buah Batu</li>
                                    <li class="list-group-item">
                                    <div class="d-flex">
                                        <img src="img/logo/star.png" style="width: 20px; height:20px;" alt="" class="m-1">
                                        <p class="pt-1">4.9 | terjual 150+</p> 
                                    </div> 
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <a href="detail_produk" class="card-link">Lihat detail</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow">
                                <img src="http://www.bastelindo.com/wp-content/uploads/2019/01/sejarah-konveksi-bandung-e1547664632904.jpeg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">TULUS's HOUSE</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Jenis Kain : Jersey, Katun, dll</li>
                                    <li class="list-group-item">Location : Buah Batu</li>
                                    <li class="list-group-item">
                                    <div class="d-flex">
                                        <img src="img/logo/star.png" style="width: 20px; height:20px;" alt="" class="m-1">
                                        <p class="pt-1">4.6 | terjual 80+</p> 
                                    </div> 
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <a href="detail_produk" class="card-link">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            
@endsection