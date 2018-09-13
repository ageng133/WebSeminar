<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $id = $_GET['e'];
    $sql = "SELECT * FROM event WHERE id = '$id'";
    $hasil = $mysqli->query($sql);
    $row = $hasil->fetch_assoc();
    // print_r($row);
?>
    <div class="container">
    <div class="row">
        <form action="updateEvent.php" method="POST" role="form">
            <legend>Edit Event</legend>

            <div class="form-group">
                <label for="">Nama Event</label>
                <input type="text" class="form-control" name="event" placeholder="Nama Event" value="<?=$row['event']?>">
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" class="form-control" name="tgl" placeholder="Nama Event" value="<?=$row['tgl']?>">
            </div>
            <div class="form-group">
                <label for="">Tempat</label>
                <textarea name="tempat" cols="10" rows="5" class="form-control"><?=$row['tempat']?></textarea>
            </div>
            <input type="text" name="id" value="<?=$row['id']?>">
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
    </div>




<?php
  include "footer.php";
?>