<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beasiswa | Tentang</title>

    <!-- CSS BOOTStrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="assets/css/kontak.css" rel="stylesheet">

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
            <li class="nav-item active">
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
          <h1 class="display-1 text-white">Kontak</h1>
          <h2 class="display-4 text-white">"Kritik dan saran sangat beguna bagi kami"</h2>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- KOntak -->
    <section class="kontak" id="kontak">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <br>
          </div>

          <div class="col-md-8 offset-md-2 mt-5">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
              </div>
              <div class="form-group">
                <label for="telp">No Telepon</label>
                <input type="tel" id="telp" name="telp" class="form-control" placeholder="Masukkan No Telepon">
              </div>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="Masukkan pesan" required></textarea>
              </div>
              <button type="submit" class="btn btn-lg btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <br><br>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Kontak -->

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Akhir Footer -->
    