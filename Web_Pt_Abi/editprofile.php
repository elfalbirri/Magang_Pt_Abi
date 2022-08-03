<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css"/>

    <title>PT ABI</title>
  </head>
  <body style="background-color : #F9F2EA; ">
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color : white;">
  <div class="container">
    <a class="navbar-brand" href="index.php">Global Sanitary</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="akunsaya.php">Akun saya</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- end navbar -->

    <!-- jumbotron -->
    <section class="jumbotron pt-5 pb-5" style="height : 605px; ">

    <div class="container">
    <div class="row pt-5">
    <div class="col-4">
    <img src="img/profile.jpg" width="250px" title="Profile" alt="Gambar Profile" class="rounded-circle">
    </div>
    <div class="col-8">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Pengguna yang Baru</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama pengguna yang baru">
    </div>
    
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Masukkan Email yang Baru</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Masukkan Password yang Baru</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Minimal 6 karakter">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Konfirmasi Password yang Baru</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ulangi password yang baru">
    </div>
    
    <a class="btn btn-dark" href="akunsaya.php" role="button" style="background-color : #9F2E32; ">Edit Profile</a>
    </div>
  </div>

    </section>

    <!-- end jumbotron -->

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