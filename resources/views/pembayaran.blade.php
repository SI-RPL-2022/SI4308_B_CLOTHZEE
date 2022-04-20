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

<div class="mt-4 text-center">
    <h4><b>Checkout Pemesanan</b></h4>
</div>

<div class="row mt-4">
    <div class="col-7">
        <div class="rounded-3 shadow">
            <div class="shadow-sm p-3">
                <h5 class="text-center"><B>Detail Pemesanan</B></h5>
            </div>
            <div class="p-4">
                <p class="mb-1" style="font-size: 16px;"><b>Pemesanan di Ujang Tailor</b></p>
                <p style="font-size: small;">Jakarta Utara</p>
                <div class="d-flex">
                    <img src="img/kemeja.jpeg" class="rounded-3" alt="..." style="width: 135px;">
                    <div class="d-flex">
                        <div>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">Kemeja lengan panjang</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">Bahan : Sutra</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">Ukuran : L</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">100 pcs</p>
                        </div>
                        <div style="margin-left: 50px;">
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1"><b>Durasi : </b>4-6 Minggu</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1"><b>Total : </b>Rp.5.000.000,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 shadow mt-4">
            <div class="shadow-sm p-3">
                <h5 class="text-center"><B>Pengiriman</B></h5>
            </div>
            <div class="p-4">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Penerima</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Hp</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kota & Kecamatan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <hr>
                    <p><b>Pilih Kurir</b></p>
                    <label style="width: 670px;">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/sicepat.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&ensp;&ensp;&nbsp;&nbsp;&ensp;Sicepat</p>
                        </div>
                    </label>
                    <label style="width: 670px;">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/jnt.jpg" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&nbsp;&ensp;J&T</p>
                        </div>
                    </label>
                    <label style="width: 670px;">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/jne.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&ensp;&ensp;&nbsp;&ensp;&nbsp;&ensp;JNE</p>
                        </div>
                    </label>

               
            </div>
        </div>

    </div>
    <div class="col-5">
        <div class="rounded-3 shadow">
            <div class="shadow-sm p-3">
                <h5 class="text-center"><B>Pembayaran</B></h5>
            </div>
            <div>
                    <label style="width: 528px;">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/bca.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&ensp;&ensp;&nbsp;BCA Virtual Account</p>
                        </div>
                    </label>

                    <label style="width: 528px;">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/mandiri.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;"> &ensp;&ensp;&ensp;Mandiri Virtual Account</p>
                        </div>
                    </label>

                    <label style="width: 528px;">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/bni.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;"> &ensp;&ensp;&nbsp;BNI Virtual Account</p>
                        </div>
                    </label>

                    <label style="width: 528px;">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/bri.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">BRI Virtual Account</p>
                        </div>
                    </label>
            </div>
        </div>
        <div class="rounded-3 shadow mt-4">
            <div class="shadow-sm p-3">
                <button type="submit" class="btn btn-success" placeholder="Bayar Sekarang" style="width: 494px;">Bayar Sekarang</button>
            </div>
        </div>

        </form>

    </div>
    @endsection