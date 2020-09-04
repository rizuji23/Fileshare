<?php
session_start();
if (empty($_SESSION['username'])) {
  header('location:index.php');
} else {


?>

  <!DOCTYPE html>
  <html lang="lang" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>FileShare | Dashboard</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">FileShare | Network Server</a>
      <div class="navbar-nav">

      </div>
    </nav>

    <div class="jumbotron">
      <h1 class="display-4">Selamat Datang Di FileSharing</h1>
      <p class="lead">Silahkan download, melihat atau menambah data di server folder anda sendiri.</p>
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="lihatData.php" role="button">Lihat Data</a>
      </p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="tambahData.php" role="button">Tambah File Atau Folder</a>
      </p>
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
<?php } ?>