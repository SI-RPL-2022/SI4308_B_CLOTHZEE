@extends('layout.template')

@section('konten')
<style type="text/css">
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
<h2 class="text-center"><b>Edit Profile Toko</b></h2>
<hr>
<div class="row mt-4">

    <div class="col-5 text-center">
        <div>
            <img src='{{ url($data_toko->foto_profil) }}' alt="" width="300" height="300">
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
                <p> : @Ujang_Tailor</p>
            </div>
            <div class="d-flex justify-content-center">
                <img src={{ url('/img/logo/whatsapp.png') }} style="width: 28px; height:28px;" alt="">
                <p> : 082219122468</p>
            </div>
        </div>
        <div class="mt-4">
            <h5 class=" text-center mb-2"><b>Lokasi Kami</b> </h5>
            {{!! $data_toko->urL_gmaps !!}}
        </div>
    </div>
    <div class="col-7">
        <form action="{{route('updateToko')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="number" name="id_toko" id="" value="{{$data_toko->id}}" hidden>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Nama Toko</b></label>
                <input type="text" name="nama_toko" class="form-control" id="exampleFormControlInput1" placeholder="{{$data_toko->nama}}" >
            </div>
            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Foto Profile Toko</b></label>
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Tampan Tailor" require>
            </div> -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Social Media (Instagram)</b></label>
                <input type="text" name="instagram" class="form-control" id="exampleFormControlInput1" placeholder="Kosongkan bila tidak ada" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Social Media (Whatsapp)</b></label>
                <input type="text" name="whatsapp" class="form-control" id="exampleFormControlInput1" placeholder="Kosongkan bila tidak ada" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Lokasi</b></label>
                <input type="text" name="url_gmaps" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Link Embed" >
            </div>
            <div class="mb-3">
                <label for="deskripsi_toko" class="form-label"><b>Deskripsi Toko</b></label>
                <textarea name="deskripsi_toko" id="deskripsi_toko" cols="90" rows="10">{{$data_toko->deskripsi}}</textarea>
            </div>
            <div class="d-flex flex-row-reverse">
                <input type="submit" value="Simpan" class="btn btn-success" style="width: 200px;">
            </div>
        </form>
    </div>
</div>


@endsection
</body>

</html>