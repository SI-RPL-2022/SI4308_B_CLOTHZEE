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
<div class="container-fluid">
<h2 class="text-center"><b>Edit Produk</b></h2>
<hr>
<div class="row mt-4">

    <div class="col-7">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Nama Produk</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Seragam Sekolah">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Gambar Produk</b></label>
            <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>zal aku gatau isinya apa jadi ni aku tetep kasih tempat hehe</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kosongkan bila tidak ada">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>zal aku gatau isinya apa jadi ni aku tetep kasih tempat hehe</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kosongkan bila tidak ada">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>zal aku gatau isinya apa jadi ni aku tetep kasih tempat hehe</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Link Embed">
        </div>
        <div class="mb-3">
            <label for="deskripsi_toko" class="form-label"><b>Deskripsi Produk</b></label>
            <textarea name="deskripsi_toko" id="deskripsi_toko" cols="90" rows="10"></textarea>
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-success" style="width: 200px;">Simpan</button>
        </div>
    </div>

</div>
</div>
<br><br>
@endsection
