<?php 
    require 'functions.php';

    $sql = mysqli_query($koneksi, "SELECT * FROM folder");

    $result = array();

    while ($row = mysqli_fetch_array($sql)){
        array_push($result, array(
            'folder' => $row['folder'],
        ));
    }

    echo json_encode(array('result'=>$result));

    mysqli_close($koneksi);

?>