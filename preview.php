<?php

$file = $_GET['file'];
if (empty($file)) {
  header('location:lihatData.php');
} else {

  $files = ltrim($file, 'uploads_files/');

?>

  <!DOCTYPE html>
  <html lang="lang" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>FileShare | Preview</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>




    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">FileShare | Network Server | <b>Preview</b> </a>
      <div class="navbar-nav">
        <a class="nav-item nav-link " href="lihatData.php">Kembali Ke Lihat Data <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="logout.php">Logout</a>

      </div>
    </nav>

    <div id="myNav" class="overlay" onclick="closeNav()">
      <div class="overlay-content">
        <a href="dashboard.php">Home</a>
        <a href="lihatData.php">Lihat Data</a>
        <a href="tambahData.php">Tambah Data</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>



    <div class="jumbotron">

      <h2> <?php echo $files; ?> </h2>
      <br>
      <?php $info = pathinfo($files);
      $info['extension'];
      $extensions_gambar = array('jpg', 'png', 'gif', 'jpeg');
      $extensions_video = array('mp4', 'mkv');
      $extensions_music = array('mp3', 'ogg');
      if (in_array($info['extension'], $extensions_gambar)) {

      ?>

        <img class="img-fluid" src="<?php echo $file; ?>" alt="">
      <?php
      } elseif (in_array($info['extension'], $extensions_video)) {


      ?>
        <div class="embed-responsive embed-responsive-16by9" align="center">
          <video id="video" controlsList="nodownload"  controls src="<?php echo $file; ?>" autoplay poster="ac.jpg">
          </video>
        </div>

      <?php } elseif (in_array($info['extension'], $extensions_music)) {
      ?>

        <div class="text-center">
          <audio style="width: 100%;" controls src="<?php echo $file; ?>" autoplay poster="ac.jpg">
          </audio>
        </div>

      <?php } else {
        header("location:download.php?file=$file");
      } ?>




      <br><br>
      <a href="download.php?file=<?php echo $file ?>" class="btn btn-primary">Download</a>

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