<?php
session_start();
if (isset($_POST['simpan'])){
    require 'functions.php';

    $dir_select = $_POST['dir_select'];
    $namaFile = $_FILES["file_upload"]["name"];
    $tmpName = $_FILES["file_upload"]["tmp_name"];
    $tipe = $_FILES["file_upload"]["type"];
    $ukuran = $_FILES["file_upload"]["size"];
    $error = $_FILES["file_upload"]["error"];
    $dir_select = $_POST['dir_select'];
    if ($error === 4) {
        echo "Mohon Masukan File Terlebih Dahulu";

        return false;
    }

    $extensiGambar = explode('.', $namaFile);
    $extensiGambar = strtolower(end($extensiGambar));


    $namaFileBaru = $namaFile;
    // untuk pengguna windows ganti yang '/opt/lampp/htdocs/FileShare/uploads_files/ menjadi
    // 'uploads_files/'
    $move = move_uploaded_file($tmpName, '/var/www/rizuji23/fileshare/uploads_files/' . $dir_select . '/' . $namaFileBaru);

    if ($move) {
        chmod('uploads_files/' . $dir_select . "/" . $namaFileBaru, 0777);
        $tanggal = date("d-M-Y");
        mysqli_query($koneksi, "INSERT INTO statistik VALUES(NULL, '$dir_select', '$namaFileBaru', '" . $_SESSION['username'] . "', 'Upload', '$tanggal')");
        echo "berhasil";
    } else {
        echo "gagal";
    }

    return $namaFileBaru;
}
