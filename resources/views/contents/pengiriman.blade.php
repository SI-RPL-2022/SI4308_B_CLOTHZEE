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
        background-color: #E8ECEE;
        border-radius: 15px;
    }
</style>

<div class="mt-4 text-center">
    <h4><b>Pengiriman</b></h4>
</div>
<div class="row mt-4">
    <div class="col">
        <div class="rounded-3 shadow w-75 mx-auto">
            <div class="shadow-sm p-3">
                <h5 class="text-center"><B>Detail Pemesanan</B></h5>
            </div>
            <div class="p-4">
                <p class="mb-1" style="font-size: 16px;"><b>Pemesanan di {{ $toko->nama }}</b></p>
                <p style="font-size: small;">{{ $toko->lokasi }}</p>
                <div class="d-flex">
                    <img src="img/kemeja.jpeg" class="rounded-3" alt="..." style="width: 135px;">
                    <div class="d-flex">
                        <div>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">{{ $data_pemesanan->nama_produk }}</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">Bahan : {{ $data_pemesanan->bahan }}</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">Ukuran : {{ $data_pemesanan->inlineRadioOptions }}</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1">{{ $data_pemesanan->jumlah_produk }} pcs</p>
                        </div>
                        <div style="margin-left: 50px;">
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1"><b>Durasi : </b>{{ $data_pemesanan->durasi }}</p>
                            <p style="margin-left: 10px; font-size: 15px;" class="mb-1"><b>Berat : </b>{{ $berat }} kg</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 shadow mt-3 w-75 mx-auto">
            <div class="shadow-sm p-3">
                <h5 class="text-center"><B>Pengiriman</B></h5>
            </div>
            <div class="p-4">
                <form action="{{ route('checkoutProduk') }}" method="POST">
                    @csrf
                    <input type="text" name="id_toko" id="" value="{{$toko->id}}" hidden>
                    @foreach ($data_pemesanan->all() as $key => $value)
                    @if (is_array($value))
                    @foreach($value as $v)
                    <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                    @endforeach
                    @else
                    <input type="hidden" name="{{ $key }}" value='{{ $value }}'>
                    @endif
                    @endforeach
                    <!-- <input type="hidden" nama="data_pemesanan" value="{{$data_pemesanan}}"> -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Penerima</label>
                        <input type="text" name="nama_penerima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Hp</label>
                        <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kota & Kecamatan</label>
                        <input type="text" name="kotakecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <hr>
                    <p><b>Pilih Kurir</b></p>
                    <label class="w-100">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/sicepat.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&ensp;&ensp;&nbsp;&nbsp;&ensp;Sicepat</p>
                        </div>
                    </label>
                    <label class="w-100">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/jnt.jpg" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&nbsp;&ensp;J&T</p>
                        </div>
                    </label>
                    <label class="w-100">
                        <input type="radio" name="emoji" id="emoji">
                        <div class="d-flex p-4">
                            <img src="img/logo/jne.png" class="rounded-3" alt="..." style="height: 20px;">
                            <p style="margin-left: 20px;">&ensp;&ensp;&nbsp;&ensp;&nbsp;&ensp;JNE</p>
                        </div>
                    </label>


            </div>
        </div>

        <div class="rounded-3 shadow mt-3 mb-5 w-75 mx-auto">
            <div class="shadow-sm p-3 ">
                <button type="submit" class="btn btn-success mx-auto w-100" placeholder="Bayar Sekarang">Bayar Sekarang</button>
            </div>
        </div>
    </div>

    </form>

</div>
@endsection