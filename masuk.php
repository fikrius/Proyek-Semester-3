<?php  
  session_start();
  
  require "controller/functions.php";

  if( isset($_POST['submit']) ){
    $nim = $_POST["nim"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM akun WHERE nim='$nim'";
    $result = mysqli_query($conn, $sql);

    //mengecek nim sudah ada apa belum
    if(mysqli_num_rows($result) === 1){

      //mengecek password
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row["password"])){
        //set session
        $_SESSION["login"] = true;

        //membuat session untuk ditampilkan di home-mahasiswa
        
        $_SESSION['nama'] = $row['nama']; // set session untuk nama
        $_SESSION['nim'] = $row['nim']; // set session untuk nim
        $_SESSION['tanggal_lahir'] = $row['tanggal_lahir']; // set session untuk tanggal lahir
        $_SESSION['jenis_kelamin'] = $row['jenis_kelamin']; // set session untuk jkel
        header("Location: home-mahasiswa.php");
        exit;
      }
    }else if( $nim === 'admin' && $password === 'admin' ){
      $_SESSION["login"] = true;
      header("Location: home-admin.php");
      exit;
    }

    $error = true;

  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk | Beasiswa</title>

    <?php include "favicon.html"; ?>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/masuk.css">

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 offset-md-4">
                <div class="account-wall">
                    <img class="profile-img" src="assets/img/profil.png"
                        alt="Profil Masuk">

                    <form class="form-signin" action="" method="post">
                      <input name="nim" type="text" class="form-control" placeholder="Nim" required autofocus>
                      <input name="password" type="password" class="form-control" placeholder="Password" required>
                      <?php if( isset($error) ): ?>
                        <p style="color: red; font-style: italic" class="text-center">NIM atau password salah!</p>
                      <?php endif; ?>
                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                          Masuk</button>
                      <label class="checkbox pull-left">
                          <input type="checkbox" value="remember-me">
                          Ingat saya
                      </label>
                      <a href="daftar.php" class="text-center new-account pull-right">Belum punya akun? </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>