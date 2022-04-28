<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registrasi</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><b>ClothZEE</b></a>
        </div>
    </nav>

    <!-- Registrasi -->
    <div class="p-3 mb-2 bg-secondary bg-opacity-25 mt-5" style="width: 500px; margin: auto; border-radius: 15px;">

        <form action="/register" method="post" style="max-width:400px; margin:auto;">
            @csrf
            <h1 class="h3 mb-3 font-wight-normal text-center">Registrasi</h1>

            <label for="nama" class="form-text"><b>Nama</b></label>
            <input type="text" name="nama" id="nama" class="form-control text-center mb-2" placeholder="Masukkan Nama Lengkap">

            <label for="email" class="form-text"><b>Email</b></label>
            <input type="text" name="email" id="email" class="form-control text-center mb-2" placeholder="Masukkan Alamat Email">

            <label for="sandi" class="form-text"><b>Kata Sandi</b></label>
            <input type="password" name="sandi" id="sandi" class="form-control text-center mb-2" placeholder="Masukkan Kata Sandi">

            <div class="mt-3 text-center">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="registrasi" style="width: 400px;">Daftar</button>
            </div>

            <div class="mt-3 text-center">
                <p>Anda sudah punya akun? <a href="/login">Login</a></p>
            </div>

        </form>

    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-lg-start mt-5 fixed-bottom">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ©2021 Copyright: ClothZEE
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>