@extends('layout.template')

@section('konten')
<style type="text/css">
  body {
    text-align: center;
  }

  label>input {
    /* Menyembunyikan radio button */
    visibility: hidden;
    position: absolute;
  }

  label>input+img {
    /* style gambar */
    cursor: pointer;
    border: 2px solid transparent;
  }

  label>input:checked+img {
    /* (RADIO CHECKED) style gambar */
    border: 2px solid #f00;
  }
</style>
<br>
<!-- row pertama -->
<div class="row mt-4">

  <div class="col-5 text-center">
    <div>
      <img src="img/kemeja.jpeg" alt="" width="300" height="300">
    </div>

    <div class="mt-4">
      <h5><b>Rating</b></h5>
      <div class="d-flex justify-content-center">
        <img src="img/logo/star.png" style="width: 24px; height:24px;" alt="" class="m-1">
        <img src="img/logo/star.png" style="width: 24px; height:24px;" alt="" class="m-1">
        <img src="img/logo/star.png" style="width: 24px; height:24px;" alt="" class="m-1">
        <img src="img/logo/star.png" style="width: 24px; height:24px;" alt="" class="m-1">
        <img src="img/logo/star.png" style="width: 24px; height:24px;" alt="" class="m-1">
      </div>
    </div>
    <div class="mt-4">
      <h5 class=" text-center mb-2"><b>Social Media</b> </h5>
      <div class="d-flex justify-content-center">
        <img src="img/logo/instagram.png" style="width: 24px; height:24px;" alt="">
        <p> : @Ujang_Tailor</p>
      </div>
      <div class="d-flex justify-content-center">
        <img src="img/logo/whatsapp.png" style="width: 28px; height:28px;" alt="">
        <p> : 082219122468</p>
      </div>
      <div class="d-flex justify-content-center">
        <img src="img/logo/facebook.png" style="width: 28px; height:28px;" alt="">
        <p> : Ujang_Tailor</p>
      </div>
    </div>
    <div class="mt-4">
      <h5 class=" text-center mb-2"><b>Lokasi Kami</b> </h5>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1352.508778191931!2d107.62967354599189!3d-6.973348231919107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1650262140146!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="col-7">
    <h3 class=" text-center mb-4"><b>Selamat Datang di Konfeksi Ujang Tailor</b></h3>
    <div style="text-align:justify;">
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, porro voluptas! Quibusdam, possimus quisquam
        maxime libero quis neque? Consectetur odio natus voluptatibus veritatis hic error expedita dolorem earum tempore cum.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quibusdam corporis perferendis modi excepturi,
        deleniti nisi, eligendi unde rem necessitatibus, perspiciatis architecto beatae ad porro laborum dolor obcaecati
        ullam! Possimus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem soluta, numquam tempore voluptatibus,
        optio, voluptate ducimus molestiae sit possimus rem sunt incidunt totam? Quas deleniti, sapiente nulla obcaecati
        accusamus voluptatem!</p>
      <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quibusdam, autem eos dolore labore sint inventore nihil! Voluptatem totam, omnis assumenda, blanditiis quas explicabo rem autem nobis fugiat dolorum quod.</p>
    </div>

    <div class="mt-5">
      <h4 class="mb-2"><b>Produk yang dihasilkan</b> </h4>
      <p>Pada konfeksi kami telah menghasilkan beberapa produk dan hasilnya tertera seperti dibawah ini </p>
      <!-- card foto -->

      <!-- carousel -->
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="card-group">
              <div class="card m-2" style="width: 12rem;">
                <img src="img/celana.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Celana bahan</h5>
                </div>
              </div>
              <div class="card m-2" style="width: 10rem;">
                <img src="img/batik.jpeg" style="width: 231px; height:233px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kemeja</h5>
                </div>
              </div>
              <div class="card m-2" style="width: 12rem;">
                <img src="img/rok.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Rok</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="card-group">
              <div class="card m-2" style="width: 12rem;">
                <img src="img/celana.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Celana bahan</b></h5>
                </div>
              </div>
              <div class="card m-2" style="width: 50px;">
                <img src="img/batik.jpeg" style="width: 231px; height:233px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Kemeja</b></h5>
                </div>
              </div>
              <div class="card m-2" style="width: 12rem;">
                <img src="img/rok.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Rok</b></h5>
                </div>
              </div>
            </div>
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
    </div>
  </div>
</div>
<!-- row pertama -->

<div class="pesan text-center mt-5 mb-2">
  <h4><b>PEMESANAN PRODUK</b> </h4>
</div>
<form>
  <div class="d-flex align-content-between flex-wrap text-center">


    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>
    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>
    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>
    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>
    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>
    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>
    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>
    <div class="card m-2">
      <label>
        <input type="radio" name="emoji" id="emoji">
        <img src="img/celana.jpg" width="300px">
        <div class="card-body">
          <h5 class="card-title"><b>Celana Panjang</b> </h5>
        </div>
      </label>
    </div>

  </div>

  <div class="d-flex justify-content-center m-4">
    <button type="button" class="btn btn-success" style="width: 500px;">Pesan Sekarang</button>
  </div>

</form>
<!-- pesanan -->


@endsection
</body>

</html>