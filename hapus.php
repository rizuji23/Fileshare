<?php
<<<<<<< HEAD
require 'functions.php';
session_start();

$id = $_GET['id'];
$id2 = $_GET['id2'];
$file = $_GET['file'];



if (unlink($id)){
    $tanggal = date("d-M-Y");
    mysqli_query($koneksi, "INSERT INTO statistik VALUES(NULL, '$id2', '$file', '" . $_SESSION['username'] . "', 'Delete File', '$tanggal')");
=======
$id = $_GET['id'];
$id2 = $_GET['id2'];

if (unlink($id)){
>>>>>>> bbb9169f4352ac7ff7d4659c6e2fe6fa8bb19b95
    echo "
    <head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    
    </head>
    <body><script src='assets/js/sweetalert2.all.min.js'></script>
        <script>
        Swal.fire({
            title: 'Sudah Dihapus',
            icon: 'success',
            confirmButtonText: 'Oke'
        }).then((result) => {
            if (result.value) {
                window.location = 'lihatData.php?dir_select=" . $id2 . "';
            }
        });
        </script>
        </body>
    ";
}
