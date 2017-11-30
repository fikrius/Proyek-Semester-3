<?php 
	include "functions.php";
	//Menampilkan semua data mahasiswa di tabel akun
	$sql = "SELECT * FROM akun";
	$result = mysqli_query($conn, $sql);
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

    <!-- Tabel Jumlah User yang membuat akun -->
    <section class="jumlah-user">
      <div class="container mt-5">
        <div class="row-md-12">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
            	<?php $i = 1; ?>
            	<?php while($row = mysqli_fetch_assoc($result)): ?>
	                <tr>
	                  <td><?php echo $i; ?></td>
	                  <td><?php echo $row['nama']; ?></td>
	                  <td><?php echo $row['nim']; ?></td>
	                  <td><?php echo $row['tanggal_lahir']; ?></td>
	                  <td><?php echo $row['jenis_kelamin']; ?></td>
	                  <td><a href="ubah.php?id_mhs=<?php echo $row['id_mhs']; ?>" class="btn btn-primary">Ubah</a> | <a href="hapus_user.php?id_mhs=<?php echo $row['id_mhs']; ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">Hapus</a></td>
	                </tr>
	            	<?php $i++; ?>
            	<?php endwhile; ?>
            	
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Akhir tabel -->

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Akhir Footer -->