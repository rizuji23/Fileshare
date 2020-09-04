<?php
require 'functions.php';
session_start();
$dir_select = $_POST['dir_select'];
$namaFile = $_FILES["file_upload"]["name"];
$tmpName = $_FILES["file_upload"]["tmp_name"];
$tipe = $_FILES["file_upload"]["type"];
$ukuran = $_FILES["file_upload"]["size"];
$error = $_FILES["file_upload"]["error"];
$dir_select = $_POST['dir_select'];
if ($error === 4) {
    echo "<script>alert('Mohon Masukan File Terlebih Dahulu'); document.location.href ='tambahData.php';
    </script>";

    return false;
}

$extensiGambar = explode('.', $namaFile);
$extensiGambar = strtolower(end($extensiGambar));


$namaFileBaru = $namaFile;
// untuk pengguna windows ganti yang '/opt/lampp/htdocs/FileShare/uploads_files/ menjadi
// 'uploads_files/'
$move = move_uploaded_file($tmpName, '/opt/lampp/htdocs/FileShare/uploads_files/' . $dir_select . '/' . $namaFileBaru);

if ($move) {
    chmod('uploads_files/' . $dir_select . "/" . $namaFileBaru, 0777);
    mysqli_query($koneksi, "INSERT INTO file VALUES(NULL, '$dir_select', '$namaFileBaru', '" . $_SESSION['username'] . "')");
    echo "<script> alert('File Sudah Disimpan Difolder $dir_select'); document.location.href = 'tambahData.php' </script>";
} else {
    echo "gagal";
}

return $namaFileBaru;
