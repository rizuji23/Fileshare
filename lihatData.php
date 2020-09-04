<?php
session_start();
if (empty($_SESSION['username'])) {
  header('location:index.php');
} else {

  error_reporting(0);

?>

  <!DOCTYPE html>
  <html lang="lang" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>FileShare | Lihat Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="assets/css/style.css">
    <style media="screen">
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>

  <body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#" onclick="openNav()">&#9776; FileShare | Network Server</a>
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
      <?php

      $dir2 = "uploads_files/";
      $texts = glob($dir2);


      ?>
      <form method="get">
        <?php foreach (glob($dir2 . '*', GLOB_ONLYDIR) as $dirs) {
          $dirs = str_replace($dir2, '', $dirs);
        ?>

          <a class="a-lihat" href='lihatData.php?dir_select=<?php echo $dirs; ?>'>
            <div class="box-table">
              <img width="100" src="assets/img/<?php echo "folder.png" ?>" alt="">
              <div class="content"><?php echo $dirs; ?>
              </div>
              <a href="hapusFolder.php?id=<?php echo "$dirs" ?>" class="hapus" style="color: #FB613E;">Hapus</a>
            </div>
          </a>
        <?php } ?>
      </form>

      <div class="text-center" id="boxLihat">
        <?php

        $dir3 = $_GET['dir_select'];
        $die = "uploads_files/" . $dir3;

        if (empty($dir3)) {
          echo "
          <img class='rounded mx-auto d-block' src='assets/img/404.png' width='200'>
          <p align='center'>Tidak Ada Yang Dipilih</p>";
        } else {
          echo "<hr><p align='center'>Anda Memilih Folder <b>" . $dir3 . "</b></p><hr>";


        ?>

          <?php

          if (is_dir($die)) {
            if ($dh = opendir($die)) {
              $id = 1;

              while (($file = readdir($dh)) !== false) {

          ?>
                <?php $info = pathinfo("uploads_files/$dir3/$file");
                $info['extension'];
                $extensions_gambar = array('jpg', 'png', 'gif', 'jpeg');
                $extensions_video = array('mp4', 'mkv');
                $extensions_dokumen = array('pdf', 'doc');
                $extensions_pack = array('rar', 'zip', '7z');
                $extensions_music = array('mp3', 'ogg');
                if (in_array($info['extension'], $extensions_gambar)) {

                ?>

                  <a class="a-lihat" href='preview.php?file=<?php echo "uploads_files/$dir3/$file" ?>'>
                    <div class="box-table justify-content-between">
                      <img width="100" src="<?php echo "uploads_files/$dir3/$file" ?>" alt="">
                      <div class="content"> <?php echo $file; ?>
                      </div>
                      <a href="hapus.php?id=<?php echo "uploads_files/$dir3/$file" ?>&id2=<?php echo "$dir3" ?>" class="hapuss" style="color: #FB613E;">Hapus</a>
                    </div>

                  </a>

                <?php
                } elseif (in_array($info['extension'], $extensions_video)) {


                ?>
                  <a class="a-lihat" href='preview.php?file=<?php echo "uploads_files/$dir3/$file" ?>'>
                    <div class="box-table">
                      <video width="160" height="190" class="video-pre" src="<?php echo "uploads_files/$dir3/$file"; ?>" autoplay loop muted poster="ac.jpg">
                      </video>
                      <div class="content"> <?php echo $file; ?>
                      </div>
                      <a href="hapus.php?id=<?php echo "uploads_files/$dir3/$file" ?>&id2=<?php echo "$dir3" ?>" class="hapus" style="color: #FB613E;">Hapus</a>
                    </div>
                  </a>

                <?php } elseif (in_array($info['extension'], $extensions_dokumen)) {
                ?>

                  <a class="a-lihat" href='preview.php?file=<?php echo "uploads_files/$dir3/$file" ?>'>
                    <div class="box-table">
                      <img width="100" src="assets/img/<?php echo "dokumen.png" ?>" alt="">
                      <div class="content"> <?php echo $file; ?>
                      </div>
                      <a href="hapus.php?id=<?php echo "uploads_files/$dir3/$file" ?>&id2=<?php echo "$dir3" ?>" class="hapus" style="color: #FB613E;">Hapus</a>
                    </div>
                  </a>
                <?php } elseif (in_array($info['extension'], $extensions_pack)) {
                ?>

                  <a class="a-lihat" href='preview.php?file=<?php echo "uploads_files/$dir3/$file" ?>'>
                    <div class="box-table">
                      <img width="100" src="assets/img/<?php echo "pack.png" ?>" alt="">
                      <div class="content"> <?php echo $file; ?>
                      </div>
                      <a href="hapus.php?id=<?php echo "uploads_files/$dir3/$file" ?>&id2=<?php echo "$dir3" ?>" class="hapus" style="color: #FB613E;">Hapus</a>
                    </div>
                  </a>
                <?php
                } elseif (in_array($info['extension'], $extensions_music)) {
                ?>

                  <a class="a-lihat" href='preview.php?file=<?php echo "uploads_files/$dir3/$file" ?>'>
                    <div class="box-table">
                      <img width="100" src="assets/img/<?php echo "music.png" ?>" alt="">
                      <div class="content" id="namaFile"> <?php echo $file; ?>
                      </div>
                      <a href="hapus.php?id=<?php echo "uploads_files/$dir3/$file" ?>&id2=<?php echo "$dir3" ?>" class="hapus" style="color: #FB613E;">Hapus</a>
                    </div>
                  </a>

                <?php } else { ?>
                  <?php if ($file == '.' or $file == '..') { ?>
                    continue;
                  <?php } else {  ?>

                    <a class="a-lihat" href='preview.php?file=<?php echo "uploads_files/$dir3/$file" ?>'>
                      <div class="box-table">
                        <img width="100" src="assets/img/<?php echo "custom.png" ?>" alt="">
                        <div class="content" id="namaFile"> <?php echo $file; ?>
                        </div>
                        <a href="hapus.php?id=<?php echo "uploads_files/$dir3/$file" ?>&id2=<?php echo "$dir3" ?>" class="hapus" style="color: #FB613E;">Hapus</a>
                      </div>
                    </a>

                  <?php } ?>


        <?php
                }
              }
              closedir($dh);
            }
          }
        }
        ?>
      </div>
    </div>

    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> Rizki Fauzi</a>
      </div>
    </footer>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>

    <script>
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }

      function show() {
        $('.hapuss').css('display', 'block');
      }

      function hide() {
        $('.hapuss').css('display', 'none');
      }
    </script>
    <script>
      jQuery(document).ready(function($) {
        $('.hapus').on('click', function() {
          var getlink = $(this).attr('href');
          Swal.fire({
            title: 'Apakah Ingin Dihapus?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya'
          }).then((result) => {
            if (result.value) {
              window.location = getlink;
            }
          });
          return false;
        });
      });
    </script>
    <script>
      jQuery(document).ready(function($) {
        $('.hapus').on('click', function() {
          var getlink = $(this).attr('href');
          Swal.fire({
            title: 'Apakah Ingin Dihapus?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya'
          }).then((result) => {
            if (result.value) {
              window.location = getlink;
            }
          });
          return false;
        });
      });
    </script>
  </body>

  </html>
<?php } ?>