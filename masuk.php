<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk | Beasiswa</title>

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
                    <form class="form-signin">
                      <input type="text" class="form-control" placeholder="Nim" required autofocus>
                      <input type="password" class="form-control" placeholder="Password" required>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">
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