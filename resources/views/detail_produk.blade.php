@extends('layout.template')

@section('konten')

<br>
<!-- row pertama -->
<div class="row">

  <div class="col-5 text-center">
    <img src="img/kemeja.jpeg" alt="" width="300" height="300">
  </div>

  <div class="col-7">
    <h3 class=" text-center"><b>Selamat Datang di Konfeksi Ujang Tailor</b></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, porro voluptas! Quibusdam, possimus quisquam maxime libero quis neque? Consectetur odio natus voluptatibus veritatis hic error expedita dolorem earum tempore cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quibusdam corporis perferendis modi excepturi, deleniti nisi, eligendi unde rem necessitatibus, perspiciatis architecto beatae ad porro laborum dolor obcaecati ullam! Possimus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem soluta, numquam tempore voluptatibus, optio, voluptate ducimus molestiae sit possimus rem sunt incidunt totam? Quas deleniti, sapiente nulla obcaecati accusamus voluptatem!</p>
  </div>
</div>
<!-- row pertama -->

<!-- row kedua -->
<div class="row mt-5 ">

  <div class="col-5 ">
    <h5 class=" text-center">Social Media</h5>
    <p> instagram : @dikrandik</p>
    <p>WA : 082219122468</p>
  </div>

  <div class="col-7 text-center">
    <h4>Produk yang dihasilkan</h4>
    <p>Pada konfeksi kami telah menghasilkan beberapa produk dan hasilnya tertera seperti dibawah ini </p>
  <!-- card foto -->
      <div class="card-group">
        <div class="card m-2" style="width: 12rem;">
          <img src="img/celana.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Celana bahan</h5>
          </div>
        </div>
        <div class="card m-2" style="width: 10rem;">
          <img src="img/batik.jpeg" class="card-img-top" alt="...">
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
  <!-- card foto -->
  </div>
</div>
<!-- row kedua -->

<div class="pesan text-center">
  <h4>PEMESANAN PRODUK</h4>




<form action="" method="POST">
<div class="d-flex">

  <div class="card m-2" style="width: 12rem;">
    <label>
      <input type="radio" name="test" value="small" checked>
      <img src="img/celana.jpg">
    </label>
    <h5 class="card-title">Card title</h5>
  </div>

  <div class="card m-2" style="width: 12rem;">
    <label>
      <input type="radio" name="test" value="small" checked>
      <img src="img/celana.jpg">
    </label>
    <h5 class="card-title">Card title</h5>
  </div>

  <div class="card m-2" style="width: 12rem;">
    <label>
      <input type="radio" name="test" value="small" checked>
      <img src="img/celana.jpg">
    </label>
    <h5 class="card-title">Card title</h5>
  </div>

  <div class="card m-2" style="width: 12rem;">
    <label>
      <input type="radio" name="test" value="small" checked>
      <img src="img/celana.jpg">
    </label>
    <h5 class="card-title">Card title</h5>
  </div>

  

  </label>
</form>
<!-- pesanan -->
  <div class="d-flex">

    <div class="card m-2">
      <label>
        <input type="radio" name="test" value="small" checked>
        <img src="https://via.placeholder.com/40x60/0bf/fff&text=A">
      </label>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          
        </div>
    </div>

    <div class="card m-2">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        
      </div>
    </div>

    <div class="card m-2">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        
      </div>
    </div>

    <div class="card m-2">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
      </div>
    </div>
  
  </div>

  <div class="d-flex">

  <div class="card m-2">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
    </div>
  </div>

  <div class="card m-2">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>     
    </div>
  </div>

  <div class="card m-2">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>      
    </div>
  </div>

  <div class="card m-2">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>      
    </div>
  </div>
</div>
</div>
<!-- pesanan -->


@endsection
</body>
</html>