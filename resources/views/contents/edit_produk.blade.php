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
            <form action="{{route('updateProduct')}}" method="POST">
                @csrf
                <input type="number" name="id_produk" id="" value="{{$data_produk->id}}" hidden>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Nama Produk</b></label>
                    <input type="text" name="nama_produk" class="form-control" id="exampleFormControlInput1" placeholder="{{$data_produk->nama}}">
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Gambar Produk</b></label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div> -->
                <div class="mb-3">
                    <label for="deskripsi_toko" class="form-label"><b>Deskripsi Produk</b></label>
                    <textarea name="deskripsi" id="deskripsi" cols="90" rows="10">{{$data_produk->deskripsi}}</textarea>
                </div>
                <div class="d-flex flex-row-reverse">
                    <input type="submit" value="Simpan" class="btn btn-success"style="width: 200px;">
                </div>
            </form>
        </div>
        <div class="col-5">
            <img src='{{ url($data_produk->foto_produk) }}' alt="" width="300" height="300" class="mx-auto d-block">
        </div>
    </div>
</div>
<br><br>
@endsection