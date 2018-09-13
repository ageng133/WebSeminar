<?php
    require_once "conn.php";

    $id = $_POST['id'];
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $event = $_POST['event'];

    $sql = "UPDATE panitia SET no = '$no', nama = '$nama', event = '$event' WHERE id = '$id'";
    $hasil = $mysqli->query($sql);

    if ($hasil) {
        echo "<script>
                alert('Update berhasil');
                window.location='panitia.php';
        </script>"  ;
    }else{
        echo "<script>
                alert('Update Gagal');
                window.location='editPanitia.php?p=".$id."';
        </script>"  ;
    }


?>