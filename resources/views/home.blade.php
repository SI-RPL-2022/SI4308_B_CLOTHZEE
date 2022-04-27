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
        
            <!-- card rekomendasi -->
            <div class="container-fluid" style=" height: 700px; background-color: white">
            <h4 class="pt-3" style="text-align: left;">Rekomendasi</h4><br>
                <div class="container-outline-secondary">
                    <div class="row row-cols-md-4 g-4">
                        <div class="col">
                            <div class="card shadow">
                                <img src="https://i.pinimg.com/originals/5c/a0/c1/5ca0c1ae50976f953d0d55c801e56945.jpg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">UJANG KONFEKSI</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Menerima pesanan Seragam sekolah, seragam kantor, dll</li>
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
                                <img src="https://img.freepik.com/free-vector/watercolor-andala-lotus-flower-drawing_23-2149378843.jpg?w=2000" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Flowers Textile</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Menerima pesanan sarung, seragam sekolah, batik</li>
                                    <li class="list-group-item">Location : Bintaro</li>
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
                                <img src="https://media.istockphoto.com/vectors/happy-hour-neon-sign-vector-id1018834996?k=20&m=1018834996&s=612x612&w=0&h=4NMcwNN9Y639n5CzNgNj9nS5p5OsUXj_-BFcXir87pM=" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">HH Design</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Semua jenis seragam dapat kami kerjakan dengan cepat</li>
                                    <li class="list-group-item">Location : Sragen</li>
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
                                <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/03/09/1186417198.jpeg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Rumah Manusia</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Menerima pesanan batik dalam jumlah yang besar</li>
                                    <li class="list-group-item">Location : Pekalongan</li>
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
                <br><br>
                 <!-- card konfeksi berdasarkan abjad -->
                 <div class="container-fluid" style=" height: 700px; background-color: white">
            <h4 class="pt-3" style="text-align: left;">Berdasarkan Abjad</h4><br>
                <div class="container-outline-secondary">
                    <div class="row row-cols-md-4 g-4">
                        <div class="col">
                            <div class="card shadow">
                                <img src="https://cdn.projects.co.id/upload/usr3ac21f/202101055ff3c27f4f02a.jpg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Anang Taylor</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Menerima pesanan Seragam sekolah, seragam kantor, dll</li>
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
                                <img src="https://dcassetcdn.com/design_img/372372/148486/148486_2983037_372372_image.jpg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Bubu's corner</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Menerima pesanan sarung, seragam sekolah, batik</li>
                                    <li class="list-group-item">Location : Bintaro</li>
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
                                <img src="https://images.tokopedia.net/img/cache/215-square/shops-1/2019/11/14/7199100/7199100_596ef47a-e5ab-4f5a-ba1f-753eebc38638.jpg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Cantika Konveksi</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Semua jenis seragam dapat kami kerjakan dengan cepat</li>
                                    <li class="list-group-item">Location : Sragen</li>
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
                                <img src="https://scalebranding.com/wp-content/uploads/2021/07/D-Dragon-Letter-Logo-Preview.jpg" class="rounded-3" alt="p1" >
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Diantara Design</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Menerima pesanan batik dalam jumlah yang besar</li>
                                    <li class="list-group-item">Location : Pekalongan</li>
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
                <br><br>
@endsection