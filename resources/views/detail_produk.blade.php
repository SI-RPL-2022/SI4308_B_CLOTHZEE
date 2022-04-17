@extends('layout.template')

@section('konten')
<div class="row">
    <div class="col">
        <div class="row m-5">
        <div class="container">
              <section id="reserve" class="reserve">
                <div class="row pt-1 mb-1">
                  <div class="col">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="row m-1" style="width: 18rem;">
                      <img src="img/kemeja.jpeg" alt="">
                    </div>
                  </div>

                  <div class="col">
                    <form method="POST" action="check.php">
                      <div class="mb-3 d-flex justify-content-center">
                          <h3><b>Selamat Datang di Konfeksi Ujang Tailor</b> </h3>
                      </div>
                      <div class="mb-3 text-justify">
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente non eaque esse deserunt illum, nam ab facere aliquam eligendi molestiae voluptatum vel. Veritatis doloremque temporibus corporis, animi saepe sit est.
                              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo in repudiandae et, deserunt maxime reprehenderit eligendi voluptas sint dolor nobis, quis commodi sed placeat similique maiores iste dicta ipsa officia?
                      </div>
                      <div class="mb-3">

                      </div>
                      <div class="mb-3">
                        <label for="duration" class="form-label">Duration (Hours)</label>
                        <input type="number" class="form-control" name="duration" id="duration" Required>
                      </div>
                      <div class="mb-3">
                        <label for="building" class="form-label">Building Type</label>
                        <select class="form-select" name="building" id="building" required>
                          <option selected disabled value="">Choose...</option>
                          <option value="Nusantara Hall">Nusantara Hall</option>
                          <option value="Garuda Hall" selected>Garuda Hall</option>
                          <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                        </select>
                        <div class="invalid-feedback">
                          Pilih gedung yang anda inginkan!
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="phone" id="phone" aria-describedby="text">
                      </div>

                      <label for="service" class="form-label">Add Service(s)</label> 
                      <div class="form-check" id="service" >
                        <input class="form-check-input" type="checkbox" value="Catering" id="flexCheckDefault" name="service">
                        <label class="form-check-label" for="flexCheckDefault">
                          Catering / $700
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Decoration" id="flexCheckChecked" name="service[]" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                          Decoration / $450
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Sound System" id="flexCheckChecked" name="service[]" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                          Sound System / $250
                        </label>
                      </div>
                      
                      <div class="d-grid gap-2" style="padding-top: 20px;">
                        <button class="btn btn-primary" type="submit" name="input">Book Now</button>
                      </div>
                  </form>
                  </div>
              </section>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>