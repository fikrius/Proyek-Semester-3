<?php 
	require "functions.php";
	//mengecek bila tombol submit ditekan

	//Ambil data id dari url
	$id = $_GET['id_mhs'];

	//Query data mahasiswa berdasarkan id
	$mhs = query("SELECT * FROM akun WHERE id_mhs = $id")[0];

	if(isset( $_POST["submit"]) ){
		//mengecek apakah data sudah ditambahkan atau belum
		if( ubah($_POST) > 0 ){
			echo "
				<script>
					alert('Data berhasil diubah');
					document.location.href = 'jumlah-user.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Data gagal diubah');
					document.location.href = 'jumlah-user.php';
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

    <!-- CSS BOOTStrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="assets/css/dasbor.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">ADMIN BEASISWA</a>
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
    		<h4 class="text-center">Ubah data akun yang terdaftar apabila terjadi kekeliruan input</h4>
    		<div class="row">
    			<div class="col-md-8 offset-md-2">
    				<form action="" method="post">
    				  <input type="hidden" name="id" value="<?php echo $mhs['id_mhs']; ?>">
                      <div class="form-group">
                        <label class="col-form-label" for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $mhs['nama']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $mhs['nim']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="tanggal-lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal-lahir" id="tanggal-lahir" value="<?php echo $mhs['tanggal_lahir']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jenis-kelamin">Jenis Kelamin</label>
                        <select id="jenis-kelamin" name="jenis-kelamin">
                        	<option value="<?php echo $mhs['jenis_kelamin']; ?>">P</option>
                        	<option>W</option>
                        </select>
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