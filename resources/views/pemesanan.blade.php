@extends('layout.template')

@section('konten')
<div class="text-center mt-4">
    <h4><b>Pemesanan di Ujang Tailor</b></h4>
</div>
<div class="row mt-4">
    <div class="col-5">
        <div class="mt-4">
            <img src="img/kemeja.jpeg" class="img-fluid rounded-3" alt="...">
        </div>
    </div>
    <div class="col-7">
        <form>
            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan</label>
                <select class="form-select" name="bahan" id="bahan" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Nusantara Hall">Sutra</option>
                    <option value="Garuda Hall" selected>Katun</option>
                    <option value="Gedung Serba Guna">Wool</option>
                    <option value="Gedung Serba Guna">Suede</option>
                    <option value="Gedung Serba Guna">Sifon</option>
                    <option value="Gedung Serba Guna">Rajut</option>
                    <option value="Gedung Serba Guna">Polyester</option>
                    <option value="Gedung Serba Guna">Organza</option>
                    <option value="Gedung Serba Guna">Lycra</option>
                </select>
                <div class="invalid-feedback">
                    Pilih bahan yang anda inginkan!
                </div> 
            </div>
            <label for="jumlah_produk" class="mb-1">Jumlah</label>
            <div class="input-group mb-3" id="jumlah_produk">
                <input type="number" class="form-control" placeholder="Jumlah produk yang diinginkan" aria-label="Recipient's username" aria-describedby="button-addon2" id="jumlah_produk">
                <span class="input-group-text">Pcs</span>
            </div>

            <div class="mb-3">
                <label for="radio" class="mb-1">Ukuran</label>
                <div id="ukuran">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">S</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">L</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">XL</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">XXL</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <select class="form-select" name="durasi" id="durasi" required>
                    <option value="Nusantara Hall" selected>1 Minggu</option>
                    <option value="Garuda Hall" >2 Minggu</option>
                    <option value="Gedung Serba Guna">4 Minggu</option>
                    <option value="Gedung Serba Guna">6 Minggu</option>
                    <option value="Gedung Serba Guna">8 Minggu</option>
                </select>
                <div class="invalid-feedback">
                    Pilih bahan yang anda inginkan!
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-success" style="width: 500px;">Pesan Sekarang</button>
            </div>
        </form>
    </div>
    <div class="mt-4">
        <h4><b>Deskripsi</b></h4>
        <p>Mohon membaca keterangan deskripsi terlebih dahulu sebelum memesan. Apabila terdapat kesalahan pemesanan karena tidak membaca deskripsi
            maka hal tersebut diluar dari tanggung jawab kami!.
            <br>
        <h5 class="text-center"><b>Ukuran baju/kemeja</b></h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Size</th>
                    <th scope="col">S</th>
                    <th scope="col">M</th>
                    <th scope="col">L</th>
                    <th scope="col">XL</th>
                    <th scope="col">XXL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Lingkar Dada</th>
                    <td>84</td>
                    <td>88</td>
                    <td>92</td>
                    <td>96</td>
                    <td>100</td>
                </tr>
                <tr>
                    <th scope="row">Lingkar Pinggang</th>
                    <td>64</td>
                    <td>68</td>
                    <td>72</td>
                    <td>76</td>
                    <td>80</td>
                </tr>
                <tr>
                    <th scope="row">Lingkar Panggul</th>
                    <td>94</td>
                    <td>98</td>
                    <td>102</td>
                    <td>106</td>
                    <td>110</td>
                </tr>
            </tbody>
        </table>

        <br>
        <h5 class="text-center"><b>Ukuran Celana/Rok</b></h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Size</th>
                    <th scope="col">S</th>
                    <th scope="col">M</th>
                    <th scope="col">L</th>
                    <th scope="col">XL</th>
                    <th scope="col">XXL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Lingkar Pinggang</th>
                    <td>56</td>
                    <td>66</td>
                    <td>76</td>
                    <td>86</td>
                    <td>96</td>
                </tr>
                <tr>
                    <th scope="row">Lebar Paha</th>
                    <td>71</td>
                    <td>73</td>
                    <td>75</td>
                    <td>77</td>
                    <td>79</td>
                </tr>
                <tr>
                    <th scope="row">Panjang Kaki</th>
                    <td>80</td>
                    <td>80</td>
                    <td>84</td>
                    <td>84</td>
                    <td>88</td>
                </tr>
            </tbody>
        </table>


    </div>
    @endsection