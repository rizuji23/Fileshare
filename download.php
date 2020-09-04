<?php

$file = $_GET['file'];

  $files = ltrim($file, 'uploads_files/');

?>

  <!DOCTYPE html>
  <html lang="lang" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>FileShare | Download Page</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">FileShare | Network Server | <b>Download</b> </a>
      <div class="navbar-nav">
        <a class="nav-item nav-link " href="lihatData.php">Kembali Ke Lihat Data <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="logout.php">Logout</a>

      </div>
    </nav>

    <div class="jumbotron">
      <h1 class="display-4">Anda Ingin Mendownload File :</h1>
      <p class="lead">
        Dari Folder :
        <?php echo $files; ?></p>
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="<?php echo $file; ?>" role="button" download>Download</a>
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
