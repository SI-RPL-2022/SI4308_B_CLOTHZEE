@extends('layout.template')

@section('konten')
<!-- row atas -->
<div class="row text-center mt-5">

    <p class="mb-1"><b>Selesaikan pembayaran dalam</b></p>
    <p class="mb-1">Maksimal pembayaran </p>
    <p class="mb-1"><b>minggu, 10 april 2022 13.00</b></p>

</div>
<!-- row atas -->

<!-- row bawah -->
<div class="row mt-4">
    <div class="col">
        <div class="rounded-3 shadow">
            <div class="shadow-sm p-2">
                <div class="d-flex mt-2">
                    <h5 style="margin-left: 20px; "><b>Mandiri virtual Account</b></h5>
                    <img src="img/logo/mandiri.png" alt="" style="height: 35px; margin-left: 900px;">
                </div>
            </div>

            <div class="isi mt-4">
                <div class="d-flex">
                    <div>
                        <p style="margin-left: 26px; font-size: 13px;" class="mb-1">Nomor Virtual Account</p>
                        <p style="margin-left: 26px; font-size: 15px;" class="mb-1"><b>884511254846</b></p>
                    </div>
                    <div>
                        <p style="margin-left: 1000px;" class="mt-2"><b>Salin <i class="fas fa-copy"></i></b></p>
                    </div>
                </div>
            </div>

            <div class="isi mt-4">
                <div class="d-flex">
                    <div>
                        <p style="margin-left: 26px; font-size: 13px;" class="mb-1">Total Pembayaran</p>
                        <p style="margin-left: 26px; font-size: 15px;" class="mb-3"><b>Rp.{{$data_pemesanan->total_biaya}}</b></p>
                    </div>
                    <div>
                        <p style="margin-left: 935px;" class="mt-2"><b>Detail Pembayaran</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rounded-3 shadow mt-4">
    <div class="shadow-sm p-4">
        <form action="{{route('uploadBukti')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label"><b>Upload Bukti Pembayaran</b></label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-secondary" placeholder="Bayar Sekarang" style="width: 494px;">Cara Pembayaran</button>
                <input type="submit" class="btn btn-success" placeholder="Bayar Sekarang" style="width: 494px; " value="Kirim Bukti">
            </div>
        </form>
    </div>
</div>
<!-- row bawah -->

@endsection