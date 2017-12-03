<?php 
  require 'functions.php';

  if( isset($_POST["submit"]) ){

      if( daftar($_POST) > 0 ){
        echo "<script>
                alert('User baru berhasil Dibuat!');
                document.location.href = 'masuk.php';
              </script>";
      }else{
        echo mysqli_error($conn);
      }

  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar | Beasiswa</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/daftar.css">

  </head>
  <body>
    
    <!-- Navigasi -->
    <nav class="navbar fixed-top bg-dark">
      
        
          <a class="navbar-brand" href="index.php">BEASISWA</a>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          </button> -->
          <a class="btn btn-primary" role="button" href="masuk.php">Masuk
          </a>
        
      
    </nav>
    <!-- Akhir Navigasi -->
    
    <!-- section -->
    <section class="main">
      <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="account-wall">
                    <form class="form-signin" action="" method="post">
                      <div class="form-group">
                        <label class="col-form-label" for="nama">Nama <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nim">NIM <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="nim" id="nim" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="password">Password <sup class="bintang">*</sup></label>
                        <input type="password" class="form-control" name="password" id="password" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="konfirmasi">Konfirmasi Password <sup class="bintang">*</sup></label>
                        <input type="password" class="form-control" name="konfirmasi" id="konfirmasi" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir <sup class="bintang">*</sup></label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jenis_kelamin">Jenis Kelamin <sup class="bintang">*</sup></label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                          <option value="p">Pria</option>
                          <option value="w">Wanita</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Daftar</button>
                      </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 offset-md-2"></div>
        </div>
    </div>
    </section>
    <!-- Akhir section -->

    <!-- Footer -->
    <!-- <?php ; ?> -->
    <!-- Akhir Footer -->
