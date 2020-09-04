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
    <title>FileShare | Tambah Data</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#" onclick="openNav()">&#9776; FileShare | Network Server</a>
    </nav>

    <div id="myNav" class="overlay" onclick="closeNav()">
      <div class="overlay-content">
        <a href="dashboard.php">Home</a>
        <a href="lihatData.php">Lihat Data</a>
        <a href="tambahData.php">Tambah Data</a>
        <a href="" onclick="logout()">Logout</a>
      </div>
    </div>
    <div class="container-fluid">
      <div class="jumbotron">
        <?php

        if (isset($_POST['simpan'])) {
          $dir = $_POST['nama_folder'];

          if (is_dir($dir) === false) {
            mkdir("uploads_files/" . $dir, 0777, true);
            chmod("uploads_files/" . $dir, 0777);
            echo "<script> alert('Dibuat'); document.location.href = 'tambahData.php'; </script>";
          } else {
            echo "<script> alert('Gagak Dibuat!'); document.location.href = 'tambahData.php'; </script>";
          }
        }



        ?>

        <form method="post">
          <div class="form-group">
            <label style="color:white">Buat Baru Folder (Optional)</label>
            <input type="text" required class="form-control" placeholder="Masukan Nama Folder" name="nama_folder" value="">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" name="simpan" value="Buat">
          </div>
        </form>

        <?php

        require 'functions.php';

        $dir2 = "uploads_files/";
        $texts = glob($dir2);


        ?>

        <form method="post" action="upload.php" id="myForm" name="frmupload" enctype="multipart/form-data">
          <div class="form-group">
            <label style="color: white;">Upload File</label>
            <div class="file-loading">
              <input type="file" id="file-0" name="file_upload" required><br>
            </div>
          </div>

          <div class="form-group">
            <label style="color: white;">Simpan Ke Folder</label>
            <select name="dir_select" class="form-control" required>
              <option value="">--- Pilih Folder ---</option>
              <?php foreach (glob($dir2 . '*', GLOB_ONLYDIR) as $dirs) {
                $dirs = str_replace($dir2, '', $dirs);
              ?>
                <option value="<?php echo $dirs; ?>"> <?php echo $dirs; ?></option>

              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="simpan" class="btn btn-primary" value="Simpan"><br>
          </div>
        </form>
      </div>

    </div>
    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> Rizki Fauzi</a>
      </div>
    </footer>
    <script>
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }
    </script>
    <script>
      function logout() {
        var x = confirm("Ingin Keluar?");
        if (x) {
          window.location.href = 'logout.php';
        } else {

        }
      }
    </script>


    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="assets/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="assets/js/fileinput.min.js" type="text/javascript"></script>
    <script src="assets/js/locales/fr.js" type="text/javascript"></script>
    <script src="assets/js/locales/es.js" type="text/javascript"></script>
    <script src="assets/themes/fas/theme.js"></script>
    <script src="assets/js/jquery.form.min.js"></script>

    <script>
      $(document).ready(function() {
        $("#file-0").fileinput({
          theme: "fas",
          showUpload: false,
          browseClass: "btn btn-primary",
          showCaption: false,
          initialPreviewAsData: true,

          overwriteInitial: true,
          showUpload: false
        });
      });
    </script>
  </body>

  </html>
<?php } ?>