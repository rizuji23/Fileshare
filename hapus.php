<?php
require 'functions.php';
session_start();

$id = $_GET['id'];
$id2 = $_GET['id2'];
$file = $_GET['file'];



if (unlink($id)){
    $tanggal = date("d-M-Y");
    mysqli_query($koneksi, "INSERT INTO statistik VALUES(NULL, '$id2', '$file', '" . $_SESSION['username'] . "', 'Delete File', '$tanggal')");
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
