<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengumuman | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="assets/css/home-mahasiswa.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">BEASISWA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home-mahasiswa.php">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pengumuman.php">Pengumuman <span class="badge badge-danger">1</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="monev.php">MoNev <span class="badge badge-danger">1</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" role="button" aria-haspopup="true" aria-expanded="false">
              Menu
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="Preview">
                <!-- <img src="" alt="gambar profil" class="img-circle"> -->
                <h6>Halo, Nama User</h6>
                <hr>
                <a class="dropdown-item" href="beranda.php">Keluar</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigation -->

    <!-- Header -->
    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">Selamat Datang</h1>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- Section -->
    <section class="form-daftar">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <h2 class="display-4 text-center">Form Pendaftaran Beasiswa</h2>
            <div class="alert alert-success" role="alert">
              Selamat! Anda lolos seleksi beasiswa! Langkah selanjutnya, silakan datang ke kantor Rektorat untuk mengambil dana beasiswa.
            </div>
            <div class="alert alert-danger" role="alert">
              Maaf, Anda belum lolos seleksi mahasiswa. Anda bisa mendaftar lagi semester depan..
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Section -->


    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Akhir Footer -->

