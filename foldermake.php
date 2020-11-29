<?php 

require 'functions.php';
if (isset($_POST['simpan'])) {
  $dir = $_POST['nama_folder'];

  if (is_dir($dir) === false) {
    $tanggal = date('d-M-Y');
    $sql = mysqli_query($koneksi, "INSERT INTO folder VALUES(NULL, '$dir', '$tanggal')");
    if ($sql) {
        mkdir("uploads_files/" . $dir, 0777, true);
        chmod("uploads_files/" . $dir, 0777 );
        echo "<script> alert('Dibuat'); document.location.href = 'tambahData.php'; </script>";
    }
  } else {
    echo "<script> alert('Gagak Dibuat!'); document.location.href = 'tambahData.php'; </script>";
  }
} else if (isset($_POST['simpan2'])){
    $dir = $_POST['nama_folder'];

  if (is_dir($dir) === false) {
    $tanggal = date('d-M-Y');
    $sql = mysqli_query($koneksi, "INSERT INTO folder VALUES(NULL, '$dir', '$tanggal')");
    if ($sql) {
        mkdir("uploads_files/" . $dir, 0777, true);
        chmod("uploads_files/" . $dir, 0777 );
        echo "<script> alert('Dibuat'); document.location.href = 'lihatData.php'; </script>";
    }
  } else {
    echo "<script> alert('Gagak Dibuat!'); document.location.href = 'lihatData.php'; </script>";
  }
}

?>