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

  label>input+div {
    /* style gambar */
    cursor: pointer;
    border: 2px solid transparent;
  }

  label>input:checked+div {
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
    </div>
    <div class="mt-4">
      <h5 class=" text-center mb-2"><b>Lokasi Kami</b> </h5>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1352.508778191931!2d107.62967354599189!3d-6.973348231919107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1650262140146!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="col-7">
    <h3 class=" text-center mb-4"><b>Selamat Datang di Konfeksi Ujang Tailor</b></h3>
    <div style="text-align:justify;">
      <p> Sejak tahun 2000 kami menggunakan para tukang jahit murah, mengawali dari kualitas biasa terus bertumbuh menambah peralatan mesin dan tukang-tukang hingga menemukan importir berkualitas untuk mendukung hasilkan jahitan kualitas tinggi.
        Sejak pandemi 2020 kami terus melakukan inovasi baru demi memberikan pelayanan yang baik kepada para pelanggan kami dengan bergabungnya kami ke tempat penjulanan konveksi terbaik di Indonesia yaitu Clothzee.
      </p>
      <p>Berbagai macam jenis pakaian sudah pasti dapat kami kerjakan dan sesuai dengan kualitas yang diinginkan oleh para pelanggan. Prioritas utama kami menjunjung kualitas pelayanan terhadap pelanggan yang menjadikan toko kami cukup terkenal di berbagai macam kalangan.</p>


      <p style="text-align: justify;">Online sangat membantu kami menghadirkan pelanggan jauh lebih banyak kedalam bisnis kami sepanjang waktu. Seperti Anda sekarang yang bisa dengan mudah menemukan kami di halaman ini & bisa lanjut berkomunikasi online.</p>

  
      <p style="text-align: justify;">Kami memiliki beberapa Rumah Produksi Sendiri dengan tukang- tukang yang ahli di bidangnya dari jahitan pria hingga wanita, dari jahitan konveksi kualitas plus hingga jahitan tailor kualitas tinggi. Karena itu, harga kami bisa lebih murah.</p>


      <p style="text-align: justify;">Kami fokus pada pilihan Kualitas, Harga, & Waktu. Biaya sewa tempat, karyawan dan layanan tambahan dipilih yang minimum. Alamat kami di area toko group bisnis dengan fasilitas & layanan minimalis. Karena itu, harga sangat murah.</p>

    </div>
  </div>
</div>
<!-- row pertama -->

<div class="pesan text-center mt-5 mb-2">
  <h4><b>PEMESANAN PRODUK & PRODUK YANG DIHASILKAN</b> </h4>
</div>
<form>
  <div class="d-flex align-content-between flex-wrap text-center">

    <label>
      <input type="radio" name="emoji" id="emoji">
      <div class="card shadow-lg m-2" style="width: 200px; height : 340px">
        <img src="img/kaos.png" style="width: 155px;" class="card-img-top mt-4 mb-4 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Kaos Pria</b></h5>
          <hr class="m-1">
          <p class="card-text" style="font-size: 12px; text-align:justify;">Kualitas Kaos terbaik ditoko kami dan sudah terkenal dimanapun!</p>
        </div>
      </div>
    </label>

    <label>
      <input type="radio" name="emoji" id="emoji">
      <div class="card shadow-lg m-2" style="width: 200px; height : 340px">
        <img src="img/celana.png" style="width: 155px;" class="card-img-top mt-4 mb-4 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Celanan Wanita</b></h5>
          <hr class="m-1">
          <p class="card-text" style="font-size: 12px; text-align:justify;">Kualitas Celana Wanita terbaik ditoko kami dan sudah terkenal dimanapun!</p>
        </div>
      </div>
    </label>

    <label>
      <input type="radio" name="emoji" id="emoji">
      <div class="card shadow-lg m-2" style="width: 200px; height : 340px">
        <img src="img/kemeja.jpeg" style="width: 155px;" class="card-img-top mt-4 mb-4 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Kemeja Pria</b></h5>
          <hr class="m-1">
          <p class="card-text" style="font-size: 12px; text-align:justify;">Kualitas kemeja panjang kami terbaik ditoko kami dan sudah terkenal dimanapun!</p>
        </div>
      </div>
    </label>

    <label>
      <input type="radio" name="emoji" id="emoji">
      <div class="card shadow-lg m-2" style="width: 200px; height : 340px">
        <img src="img/rok.jpg" style="width: 155px;" class="card-img-top mt-4 mb-4 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Rok Wanita</b></h5>
          <hr class="m-1">
          <p class="card-text" style="font-size: 12px; text-align:justify;">Kualitas Rok Wanita kami terbaik ditoko kami dan sudah terkenal dimanapun!</p>
        </div>
      </div>
    </label>

    <label>
      <input type="radio" name="emoji" id="emoji">
      <div class="card shadow-lg m-2" style="width: 200px; height : 340px">
        <img src="img/jaket.png" style="width: 155px;" class="card-img-top mt-4 mb-4 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Jaket</b></h5>
          <hr class="m-1">
          <p class="card-text" style="font-size: 12px; text-align:justify;">Kualitas jaket di kami terbaik ditoko kami dan sudah terkenal dimanapun!</p>
        </div>
      </div>
    </label>

    <label>
      <input type="radio" name="emoji" id="emoji">
      <div class="card shadow-lg m-2" style="width: 200px; height : 340px">
        <img src="img/kaos.png" style="width: 155px;" class="card-img-top mt-4 mb-4 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Kaos Santai</b></h5>
          <hr class="m-1">
          <p class="card-text" style="font-size: 12px; text-align:justify;">Kualitas kaos santai kami terbaik ditoko kami dan sudah terkenal dimanapun!</p>
        </div>
      </div>
    </label>
  </div>

  <div class="d-flex justify-content-center m-4">
    <button type="button" class="btn btn-success" style="width: 500px;">Pesan Sekarang</button>
  </div>

</form>

@endsection
</body>

</html>