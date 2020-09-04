<?php
$id = $_GET['id'];

if (rmdir('uploads_files/' . $id)) {
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
                window.location = 'lihatData.php';
            }
        });
        </script>
        </body>
    ";
} else {
    echo "<head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    
    </head>
    <body><script src='assets/js/sweetalert2.all.min.js'></script>
        <script>
        Swal.fire({
            title: 'Gagal Dihapus',
            icon: 'error',
            confirmButtonText: 'Oke'
        }).then((result) => {
            if (result.value) {
                window.location = 'lihatData.php';
            }
        });
        </script>
        </body>";
}
