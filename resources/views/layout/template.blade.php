<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
  body {
    background: whitesmoke;
    font-family: 'Poppins', sans-serif;
    color: black;
  }
</style>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClothZEE</title>
</head>

<body>
  <!-- navbar -->
  <form action="{{route('searchToko')}}" method="GET">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color : #A96B1E">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
          <div class="input-group mb-2 me-5">
          @php
            if (!isset($keyword)){
              $keyword = "";
            };
          @endphp
            <input type="text" class="form-control" value = "{{ $keyword }}" placeholder="Search" aria-label="Search" name="keyword">
            <input type="submit" value="Cari" class="btn btn-secondary" id="button-addon2">
          </div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar</a>
            </li>
          </ul>
          <!-- <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar</a>
            </li>
            <li class="nav-item me-1">
              <img src="img/logo/akun.png" style="width: 24px;" alt="">
            </li>
            <li class="nav-item me-4">
              <p style="color: white;">Iqbal</p>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>
  </form>

  <!-- nav -->

  <div class="container">
    @yield('konten')

  </div>















  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>