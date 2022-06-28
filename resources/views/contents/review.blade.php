@extends('layout.template')

@section('konten')
<style>
.rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #FCD900;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #FCD900;
}    
</style>
<!-- row bawah -->
<div class="row mt-5">
    <div class="col">
        <div class="rounded-3 shadow">
            <div class="shadow-sm p-4 text-center">
                    <h5 ><b>Review Konfeksi</b></h5>
            </div>

            <div class="isi mt-4 text-center p-2">
                <img src="img/konveksi.jpg" alt="" style="height: 180px;">
                <h5 class=" mt-3"><b>UJANG TAILOR</b></h5>
                <form class="rating">
                <label>
                    <input type="radio" name="stars" value="1" />
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="stars" value="2" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="stars" value="3" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>   
                </label>
                <label>
                    <input type="radio" name="stars" value="4" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="stars" value="5" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
            </form>
                
            </div>

            <div class=" text-center">
                <p style="margin-right: 430px;"><b>Ulasan :</b></p>
                <textarea name="ulasan" id="" cols="62" rows="3" placeholder="Silahkan tulis ulasan anda "></textarea>
            </div>

            <div class=" text-center p-4">
                <button type="submit" class="btn btn-success" placeholder="Kirim" style="width: 494px; ">Kirim</button>
            </div>
        </div>
    </div>
</div>


<!-- row bawah -->

@endsection