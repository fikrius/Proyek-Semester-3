<?php  
  session_start();

  if( !isset($_SESSION["login"]) ){
    header("Location: masuk.php");
    exit;
  }

  require "controller/functions.php";
  //menghitung jumlah data di dalam database
  $user = hitung_user();
  $feedback = hitung_feedback();
  $pendaftar_beasiswa = hitung_pendaftar_beasiswa();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Beasiswa</title>

    <?php include "favicon.html"; ?>

    <!-- CSS BOOTStrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="assets/css/dasbor.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="assets/img/logo.png" style="width: 50px;">
        <a class="navbar-brand" href="home-admin.php">ADMIN BEASISWA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home-admin.php">Dasbor<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">Feedback<span class="badge badge-danger"><?php echo $feedback; ?></span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" role="button" aria-haspopup="true" aria-expanded="false">
              Menu
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="Preview">
                <!-- <img src="" alt="gambar profil" class="img-circle"> -->
                <h6>Admin</h6>
                <hr>
                <a class="dropdown-item" href="session/logout.php">Keluar</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigation -->

    <!-- ISI -->
    <section class="isi">
      <div class="container text-center">
        <div class="row">
          <!-- Jumbotron -->
          <div class="jumbotron">
            <h1 class="display-3">Halo Admin!</h1>
            <hr class="my-4">
            <p>Admin dapat mengelola data pendaftar Beasiswa, dan dapat menentukan waktu pengumuman.</p>
            <p class="lead">
              <a class="btn btn-success btn-lg" href="pelajari.php" role="button">Pelajari</a>
            </p>
          </div>
          <!-- Akhir Jumbotron -->

        <!-- Cards -->
        <div class="row">
          <div class="col-md-4 offset-md-2 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                Jumlah Akun User
              </div>
              <div class="card-body">
                <h4 class="card-title"><?php echo $user; ?></h4>
                <p class="card-text">Untuk melihat lengkapnya, silakan klik Lihat Detail</p>
                <a href="jumlah-user.php" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                Jumlah Pendaftar Beasiswa
              </div>
              <div class="card-body">
                <h4 class="card-title"><?php echo $pendaftar_beasiswa; ?></h4>
                <p class="card-text">Untuk melihat lengkapnya, silakan klik Lihat Detail</p>
                <a href="jumlah-pendaftar-beasiswa.php" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-4 offset-md-2 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                Pendaftar Laki-laki
              </div>
              <div class="card-body">
                <h4 class="card-title">0</h4>
                <p class="card-text">Untuk melihat lengkapnya, silakan klik Lihat Detail</p>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                Pendaftar Perempuan
              </div>
              <div class="card-body">
                <h4 class="card-title">0</h4>
                <p class="card-text">Untuk melihat lengkapnya, silakan klik Lihat Detail</p>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Cards -->
        </div>
      </div>
    </section>
    <!-- Akhir Isi -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Footer -->
    <?php include "footer.php" ;?>
    <!-- Akhir Footer -->