<?php  
  session_start();

  if( !isset($_SESSION["login"]) ){
    header("Location: masuk.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengumuman | Beasiswa</title>

    <?php include "favicon.html"; ?>

    <!-- CSS BOOTStrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="assets/css/pengumuman.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="assets/img/logo.png" style="width: 50px;">
        <a class="navbar-brand" href="home-mahasiswa.php">BEASISWA</a>
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
              <a class="nav-link" href="pengumuman.php">Pengumuman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="monev.php">MoNev <span class="badge badge-danger">x</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" role="button" aria-haspopup="true" aria-expanded="false">
              Menu
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="Preview">
                <!-- <img src="" alt="gambar profil" class="img-circle"> -->
                <h6>Halo, <?php echo $_SESSION['nama'] ;?></h6>
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
          <div id="clockdiv">
            <div>
              <span class="days"></span>
              <div class="smalltext">Hari</div>
            </div>
            <div>
              <span class="hours"></span>
              <div class="smalltext">Jam</div>
            </div>
            <div>
              <span class="minutes"></span>
              <div class="smalltext">Menit</div>
            </div>
            <div>
              <span class="seconds"></span>
              <div class="smalltext">Detik</div>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- Section -->
    <section class="pengumuman">
      <div class="container mt-4 mb-4" style="height: 400px;">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <h2 class="display-4 text-center mb-3">Pengumuman</h2>
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
    <script src="assets/js/countdown.js"></script>

