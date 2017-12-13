<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="assets/css/beranda.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="assets/datatables/css/dataTables.bootstrap.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="assets/img/logo.png" style="width: 50px;">
        <a class="navbar-brand" href="beranda.php">BEASISWA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="beranda.php">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.php">Tentang
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="masuk.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Kontak</a>
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
          <h2 class="display-4 text-white">di Website Beasiswa</h2>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- Deskripsi Beasiswa -->
    <section class="deskripsi" id="deskripsi">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Beasiswa</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p>Aplikasi berbasis web yang dibuat untuk memudahkan mahasiswa Fakultas Teknologi Industri Universitas Islam Indonesia dalam mendaftar beasiswa. </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Deskripsi -->

    <!-- Syarat Beasiswa -->
    <section class="syarat">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Syarat Beasiswa</h2>
            <hr>
          </div>
        </div>

        <div class="row align-items-justify">
          <div class="col-md-12">
            <p>Sehubungan dengan adanya surat dari Kementerian Pendidikan dan Kebudayaan Koordinasi Perguruan Tinggi</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-11 offset-md-1">
            <ol>
              <li> Mahasiswa aktif Fakultas Teknologi Industri</li>
              <li> Mengisi formulir pendaftaran online di website Beasiswa</li>
                <li> Slip gaji orang tua yang telah dilegalisir <sup class="text-danger">*</sup></li>
                <li> Krs <sup class="text-danger">*</sup></li>
                <li> Fotocopy KTM dan KTP <sup class="text-danger">*</sup></li>
                <li> Fotocopy buku tabungan yang telah dilegalisir <sup class="text-danger">*</sup></li>

            </ol>
            <p>Keterangan <sup class="text-danger">*</sup> : Dilampirkan saat verifikasi berkas</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Syarat Beasiswa -->

    <!-- Sistem Beasiswa -->
    <section class="buat-akun">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="assets/img/buat-akun.png" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Buat Akun</h2>
              <p>Buat akun Anda terlebih dahulu untuk bisa mengakses pendaftaran Beasiswa.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="daftar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="assets/img/daftar.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3">
              <h2 class="display-4">Daftar Beasiswa</h2>
              <p>Setelah mendaftarkan akun, Anda bisa masuk ke halaman untuk mendaftar Beasiswa.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pengumuman">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="assets/img/pengumuman.png" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Pengumuman</h2>
              <p>Pastikan diri Anda lolos atau tidak dengan melihat pengumuman yang sudah ditentukan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Sistem Beasiswa -->

    <!-- Footer -->
    <?php include "footer.php"; ?>
    <!-- Akhir Footer -->