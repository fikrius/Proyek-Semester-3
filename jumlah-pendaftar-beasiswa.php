<?php 
  session_start();

  if( !isset($_SESSION["login"]) ){
    header("Location: masuk.php");
    exit;
  }

	require "controller/functions.php";
	//Menampilkan semua data mahasiswa di tabel akun
	$sql = "SELECT * FROM bea";
	$result = mysqli_query($conn, $sql);

  //jumlah feedback
  $feedback = hitung_feedback();
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

    <!-- Data Tables -->
    <link href="assets/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="home-admin.php">Dasbor<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">Feedback<span class="badge badge-danger"><?php echo $feedback; ?>
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
    <section class="jumlah-user" style="margin-top: 5rem; height: 40rem;">
      <div class="container-fluid mt-5">
        <div class="row-md-12">
          <table id="table_user" class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Gaji Ortu/bln</th>
                <th scope="col">Saudara</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Smt</th>
                <th scope="col">IPK</th>
                <th scope="col">Tunjangan</th>
                <th class="text-center" scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
            	<?php $i = 1; ?>
            	<?php while($row = mysqli_fetch_assoc($result)): ?>
	                <tr>
	                  <td><?php echo $i; ?></td>
	                  <td><?php echo $row['nama']; ?></td>
	                  <td><?php echo $row['nim']; ?></td>
	                  <td class="text-center"><?php echo $row['tanggal_lahir']; ?></td>
	                  <td class="text-center" ><?php echo $row['jenis_kelamin']; ?></td>
                    <td class="text-center"><?php echo $row['gaji']; ?></td>
                    <td class="text-center" ><?php echo $row['saudara']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td class="text-center"><?php echo $row['semester']; ?></td>
                    <td class="text-center" ><?php echo $row['ipk']; ?></td>
                    <td class="text-center" ><?php echo $row['tunjangan']; ?></td>
	                  <td class="text-center"><a href="ubah-pendaftar-beasiswa.php?id_bea=<?php echo $row['id_bea']; ?>" class="btn btn-primary">Ubah</a> | <a href="hapus-pendaftar-beasiswa.php?id_bea=<?php echo $row['id_bea']; ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">Hapus</a></td>
	                </tr>
	            	<?php $i++; ?>
            	<?php endwhile; ?>
            </tbody>
          </table>
          <a href="peserta-lolos.php" class="btn btn-success">Peserta Lolos</a>
        </div>
      </div>
    </section>
    <!-- Akhir tabel -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script>
      $(document).ready(function(){
          $('#table_user').DataTable();
      })
    </script>

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Akhir Footer -->

    <!-- Include dataTables  -->
    <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/js/dataTables.bootstrap.js"></script>