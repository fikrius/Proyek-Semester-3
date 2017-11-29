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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="monev.php">MoNev</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" role="button" aria-haspopup="true" aria-expanded="false">
              Menu
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="Preview">
                <img src="assets/img/buat-akun.png" alt="gambar profil" class="img-circle">
                <h6>Nama User</h6>
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
            <form>
                      <div class="form-group">
                        <label class="col-form-label" for="nama">Nama <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" disabled>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nim">NIM <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim Anda" disabled>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="tanggal-lahir">Tanggal Lahir <sup class="bintang">*</sup></label>
                        <input type="date" class="form-control" name="tanggal-lahir" id="tanggal-lahir" placeholder="Tanggal Anda" disabled>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jenis-kelamin">Jenis Kelamin <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="jenis-kelamin" id="jenis-kelamin" placeholder="P" disabled>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="gaji">Total Gaji Orang Tua <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="gaji" id="gaji" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="ipk">Semester <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="semester" id="semester" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="ipk">IPK <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="ipk" id="ipk" required>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary" type="submit">
                            Daftar Beasiswa</button>
                      </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Section -->


    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Akhir Footer -->

