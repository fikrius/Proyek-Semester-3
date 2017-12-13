<?php  
  session_start();

  require "controller/functions.php";

  if( !isset($_SESSION["login"]) ){
    header("Location: masuk.php");
    exit;
  }

  if( isset($_POST["submit"]) ){
          if( daftar_beasiswa($_POST) > 0 ){
            echo "<script>
                    alert('Berhasil mendaftar beasiswa, tunggu pengumuman kelulusan!');
                    header('home-mahasiswa.php');
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
        <img src="assets/img/logo.png" style="width: 50px;">
        <a class="navbar-brand" href="home-mahasiswa.php">BEASISWA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home-mahasiswa.php">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pengumuman.php">Pengumuman <span class="badge badge-danger">1</span></a>
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
                <a class="dropdown-item" href="session/logout.php">Keluar</a>
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
          <div class="col-md-8 offset-md-2 mt-4">
            <h2 class="display-4 text-center">Form Pendaftaran Beasiswa</h2>
            <form action="" method="post" id="formDaftar" >
                      <div class="form-group">
                        <label class="col-form-label" for="nama">Nama <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $_SESSION['nama'] ;?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nim">NIM <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $_SESSION['nim'] ;?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir <sup class="text-danger">*</sup></label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $_SESSION['tanggal_lahir'] ;?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jenis_kelamin">Jenis Kelamin <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $_SESSION['jenis_kelamin'] ;?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="gaji">Total Gaji Orang Tua/bulan <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="gaji" id="gaji" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="saudara">Jumlah Saudara <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="saudara" id="saudara" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jurusan">Jurusan<sup class="text-danger">*</sup></label>
                        <select id="jurusan" name="jurusan" required>
                          <option value="Teknik Elektro">Teknik Elektro</option>
                          <option value="Teknik Kimia">Teknik Kimia</option>
                          <option value="Teknik Industri">Teknik Industri</option>
                          <option value="Teknik Informatika">Teknik Informatika</option>
                          <option value="Teknik Mesin">Teknik Mesin</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="semester">Semester <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="semester" id="semester" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="ipk">IPK <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="ipk" id="ipk" required>
                      </div>
                      <div class="form-group">
                        <button id="btnSubmit" name="submit" class="btn btn-lg btn-primary" type="submit">
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


    

    
