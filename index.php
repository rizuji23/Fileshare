<?php
session_start();
error_reporting(0);
if ($_SESSION['username']) {
   header("location:dashboard.php");
} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <title>FileShare | Login</title>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

   <?php
   require 'functions.php';
   if (isset($_POST['login'])) {
      // code...




      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password' ");
      $result = mysqli_fetch_array($query);

      if ($result['username'] == $username && $result['password'] == $password) {
         $_SESSION['username'] = $username;
         header("location:dashboard.php");
      } else {
         echo "<script> alert('Username Atau Password Salah'); document.location.href = 'index.php' </script>";
      }
   }

   if (isset($_POST['daftar'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = mysqli_query($koneksi, "INSERT INTO login VALUES(NULL, '$username', '$password')");

      if ($query) {
         echo "<script> alert('Username Atau Password Kamu Sudah Didaftarkan'); document.location.href = 'index.php' </script>";
      } else {
         echo "gagag" . mysqli_error($koneksi);
      }
   }



   ?>


   <div class="sidenav">
      <div class="login-main-text">
         <h2>FileShare Beta Version.</h2>
         <p>Login disini untuk mengakses file dan folder anda.</p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form method="post">
               <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username">
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
               </div>
               <button type="submit" name="login" class="btn btn-primary">Login</button>
               <button type="submit" name="daftar" class="btn btn-info">Daftar Akun Baru</button>
            </form>
         </div>
      </div>
   </div>

   <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
         <a href="#"> Rizki Fauzi</a>
      </div>
   </footer>


   <script src="assets/js/jquery-3.4.1.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>