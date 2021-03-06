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
        /* border: 2px solid #f00; */
        background-color: #E8ECEE;
        border-radius: 15px ;
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
                <p class="mb-1" style="font-size: 16px;"><b>Pemesanan di {{$toko->nama}}</b></p>
                <p style="font-size: small;">{{$toko->lokasi}}</p>
                <div class="d-flex">
                    <img src="img/kemeja.jpeg" class="rounded-3" alt="..." style="width: 135px;">
                    <div class="d-flex">

                        <table class=" ms-4">
                            <tr>
                                <td colspan="2">{{$data_pemesanan->nama_produk}}</td>
                            </tr>
                            <tr>
                                <td>Bahan</td>
                                <td>: {{$data_pemesanan->bahan}}</td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td>: {{$data_pemesanan->inlineRadioOptions}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$data_pemesanan->jumlah_produk}} pcs</td>
                            </tr>
                        </table>

                        <table class=" ms-5">
                            <tr>
                                <td><b>Durasi</b></td>
                                <td>: {{$data_pemesanan->durasi}}</td>
                            </tr>
                            <tr>
                                <td><b>Harga Pemesanan</b></td>
                                <td>: Rp.{{$total_biaya - 100000}}</td>
                            </tr>
                            <tr>
                                <td><b>Harga Ongkir</b></td>
                                <td>: Rp.100000</td>
                            </tr>
                            <tr>
                                <td><b>Total</b></td>
                                <td>: Rp.{{$total_biaya}}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 shadow mt-4">
            <div class="shadow-sm p-3">
                <h5 class="text-center"><B>Pengiriman</B></h5>
            </div>
            <div class="p-4">
                <form action="{{route('prosesPembayaran')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_produk" value="{{$data_pemesanan->id_produk}}">
                    <input type="hidden" name="total_biaya" value="{{$total_biaya}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Penerima</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pemesanan->nama_penerima}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Hp</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pemesanan->no_hp}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pemesanan->alamat}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kota & Kecamatan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pemesanan->kotakecamatan}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pemesanan->kode_pos}}" readonly>
                    </div>
                    <hr>
                    <p><b>Pilih Kurir</b></p>
                    <label class="w-100">
                        <input type="radio" name="emoji" id="emoji" checked>
                        <div class="d-flex p-4">
                            <img src="img/logo/sicepat.png" class="rounded-3" alt="..." style="height: 20px;" >
                            <p style="margin-left: 20px;">&ensp;&ensp;&nbsp;&nbsp;&ensp;Sicepat</p>
                        </div>
                    </label>
                    <label class="w-100">
                        <input type="radio" name="emoji" id="emoji" onclick="this.checked=false;">
                        <div class="d-flex p-4">
                            <img src="img/logo/jnt.jpg" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&nbsp;&ensp;J&T</p>
                        </div>
                    </label>
                    <label class="w-100">
                        <input type="radio" name="emoji" id="emoji" onclick="this.checked=false;">
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