<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    if ($_POST) {


    $event = $_POST['event'];
    $tgl = $_POST['tgl'];
    $tempat = $_POST['tempat'];

    $sql = "INSERT INTO event (event, tgl, tempat) VALUES ('$event', 'tgl', 'tempat')";
    $hasil = $mysqli->query($sql);

    if ($hasil) {
        echo "<script>
                alert('Update berhasil');
                window.location='event.php';
        </script>"  ;
    }else{
        echo "<script>
                alert('Update Gagal');
                window.location='tambahEvent.php';
        </script>"  ;
    }
    }

    // print_r($row);
?>
    <div class="container">
    <div class="row">
        <form action="" method="POST" role="form">
            <legend>Tambah Event</legend>

            <div class="form-group">
                <label for="">Nama Event</label>
                <input type="text" class="form-control" name="event" placeholder="Nama Event" >
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" class="form-control" name="tgl" placeholder="Nama Event">
            </div>
            <div class="form-group">
                <label for="">Tempat</label>
                <textarea name="tempat" cols="10" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Event</button>
            <a href="#" onclick="history.back()" class="btn btn-warning">Kembali</a>
        </form>
    </div>
    </div>




<?php
  include "footer.php";
?>