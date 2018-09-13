<?php
    require_once "conn.php";

    $id = $_POST['id'];
    $event = $_POST['event'];
    $tgl = $_POST['tgl'];
    $tempat = $_POST['tempat'];

    $sql = "UPDATE event SET event = '$event', tgl = '$tgl', tempat = '$tempat' WHERE id = '$id'";
    $hasil = $mysqli->query($sql);

    if ($hasil) {
        echo "<script>
                alert('Update berhasil');
                window.location='event.php';
        </script>"  ;
    }else{
        echo "<script>
                alert('Update Gagal');
                window.location='editEvent.php?e=".$id."';
        </script>"  ;
    }


?>