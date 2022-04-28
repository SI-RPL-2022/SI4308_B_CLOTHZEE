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
      <img src="{{ url($data_toko->foto_profil) }}" alt="" width="300" height="300">
    </div>

    <div class="mt-4">
      <h5><b>Rating</b></h5>
      <div class="d-flex justify-content-center">
        <img src={{ url('/img/logo/star.png') }} style="width: 24px; height:24px;" alt="" class="m-1">
        <img src={{ url('/img/logo/star.png') }} style="width: 24px; height:24px;" alt="" class="m-1">
        <img src={{ url('/img/logo/star.png') }} style="width: 24px; height:24px;" alt="" class="m-1">
        <img src={{ url('/img/logo/star.png') }} style="width: 24px; height:24px;" alt="" class="m-1">
        <img src={{ url('/img/logo/star.png') }} style="width: 24px; height:24px;" alt="" class="m-1">
      </div>
    </div>
    <div class="mt-4">
      <h5 class=" text-center mb-2"><b>Social Media</b> </h5>
      <div class="d-flex justify-content-center">
        <img src={{ url('/img/logo/instagram.png') }} style="width: 24px; height:24px;" alt="">
        <p> : {{$data_toko->instagram}}</p>
      </div>
      <div class="d-flex justify-content-center">
        <img src={{ url('/img/logo/whatsapp.png') }} style="width: 28px; height:28px;" alt="">
        <p> : {{$data_toko->whatsapp}}</p>
      </div>
    </div>
    <div class="mt-4">
      <h5 class=" text-center mb-2"><b>Lokasi Kami</b> </h5>
      {!! $data_toko->urL_gmaps !!}
    </div>
  </div>

  <div class="col-7">
    <h3 class=" text-center mb-4"><b>Selamat Datang di Konfeksi {{$data_toko->nama}}</b></h3>
    <div style="text-align:justify;">
    @foreach($list_deskripsi as $deskripsi)
      <p>{{$deskripsi}}</p>
    @endforeach
    </div>
  </div>
</div>
<!-- row pertama -->

<div class="pesan text-center mt-5 mb-2">
  <h4><b>PEMESANAN PRODUK & PRODUK YANG DIHASILKAN</b> </h4>
</div>
<form action="{{route('pesanProduk')}}" method="GET">
  <div class="d-flex align-content-between flex-wrap text-center">
  @foreach($produk_toko as $produk)
    <label>
      <input type="radio" name="id_produk" id="emoji" value="{{$produk->id}}">
      <div class="card shadow-lg m-2" style="width: 200px; height : 340px">
        <img src="{{url($produk->foto_produk)}}" style="width: 155px;" class="card-img-top mt-4 mb-4 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>{{$produk->nama}}</b></h5>
          <hr class="m-1">
          <p class="card-text" style="font-size: 12px; text-align:justify;">{{$produk->deskripsi}}</p>
        </div>
      </div>
    </label>
  @endforeach
  </div>
  <div class="d-flex justify-content-center m-4">
    <input type="submit" value="Pesan Sekarang" class="btn btn-success" style="width: 500px;">
  </div>

</form>

@endsection
</body>

</html>