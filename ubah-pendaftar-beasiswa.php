<?php 
  session_start();

  if( !isset($_SESSION["login"]) ){
    header("Location: masuk.php");
    exit;
  }

	require "controller/functions.php";
	//mengecek bila tombol submit ditekan

	//Ambil data id dari url
	$id = $_GET['id_bea'];

	//Query data mahasiswa berdasarkan id
	$bea = query("SELECT * FROM bea WHERE id_bea = $id")[0];

	if(isset( $_POST["submit"]) ){
		//mengecek apakah data sudah ditambahkan atau belum
		if( ubah_pendaftar_beasiswa($_POST) > 0 ){
			echo "
				<script>
					alert('Data berhasil diubah');
					document.location.href = 'jumlah-pendaftar-beasiswa.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Data gagal diubah');
					document.location.href = 'jumlah-pendaftar-beasiswa.php';
				</script>
			";
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" role="button" aria-haspopup="true" aria-expanded="false">
              Menu
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="Preview">
                <!-- <img src="" alt="gambar profil" class="img-circle"> -->
                <h6>Admin</h6>
                <hr>
                <a class="dropdown-item" href="beranda.php">Keluar</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigation -->

    <!-- Form Ubah -->
    <section class="ubah">
    	<div class="container mt-5">
    		<h4 class="text-center">Ubah data beasiswa mahasiswa yang terdaftar apabila terjadi kekeliruan input</h4>
    		<div class="row">
    			<div class="col-md-8 offset-md-2">
    				<form action="" method="post">
    				  <input type="hidden" name="id" value="<?php echo $bea['id_bea']; ?>">
                      <div class="form-group">
                        <label class="col-form-label" for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $bea['nama']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $bea['nim']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $bea['tanggal_lahir']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $bea['jenis_kelamin']; ?>" readonly>
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="gaji">Gaji Ortu/bln</label>
                        <input type="text" class="form-control" name="gaji" id="gaji" value="<?php echo $bea['gaji']; ?>">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="saudara">Saudara</label>
                        <input type="text" class="form-control" name="saudara" id="saudara" value="<?php echo $bea['saudara']; ?>">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?php echo $bea['jurusan']; ?>">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="ipk">IPK</label>
                        <input type="text" class="form-control" name="ipk" id="ipk" value="<?php echo $bea['ipk']; ?>">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary" type="submit" name="submit">
                            Ubah Data</button>
                      </div>
            </form>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- akhir form -->

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Akhir Footer -->