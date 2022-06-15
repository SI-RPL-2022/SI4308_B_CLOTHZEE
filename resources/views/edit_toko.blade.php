@extends('layout.template')

@section('konten')
<style type="text/css">
    body {}

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
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Judul Toko</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Tampan Tailor">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Foto Profile Toko</b></label>
            <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Tampan Tailor">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Social Media (Instagram)</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kosongkan bila tidak ada">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Social Media (Whatsapp)</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kosongkan bila tidak ada">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Lokasi</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Link Embed">
        </div>
        <div class="mb-3">
            <label for="deskripsi_toko" class="form-label"><b>Deskripsi Toko</b></label>
            <textarea name="deskripsi_toko" id="deskripsi_toko" cols="90" rows="10"></textarea>
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-success" style="width: 200px;">Simpan</button>
        </div>
    </div>

</div>


@endsection
</body>

</html>