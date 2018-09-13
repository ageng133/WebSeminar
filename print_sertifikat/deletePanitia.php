<?php
    require_once "conn.php";

    $id = $_GET['p'];

    $sql = "DELETE FROM panitia WHERE id = '$id'";
    $hasil = $mysqli->query($sql);

    if ($hasil) {
        echo "<script>
                alert('Delete berhasil');
                window.location='panitia.php';
        </script>"  ;
    }else{
        echo "<script>
                alert('Update Gagal');
                window.location='panitia.php';
        </script>"  ;
    }


?>