<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    // no sertifikat terakhir
    $sql = "SELECT no FROM peserta ORDER BY no DESC LIMIT 1";
    $query = $mysqli->query($sql);
    $terakhir = $query->fetch_assoc();

    if ($_GET) {
        $id = $_GET['p'];
        $sql = "SELECT * FROM peserta WHERE id = '$id'";
        $query = $mysqli->query($sql);
        $row = $query->fetch_assoc();
    }

    // print_r($row);
?>
    <div class="container">
    <div class="row">
        <form action="updatePeserta.php" method="POST" role="form">
            <legend>Edit Peserta</legend>

            <div class="form-group">
                <label for="">No Sertifikat</label>
                <input type="text" class="form-control" name="no" placeholder="No Sertifikat" required value="<?=$row['no']?>">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Peserta" required value="<?=$row['nama']?>">
            </div>
            <div class="form-group">
                <label for="">Event</label>
                <select name="event" class="form-control">
                <?php
                    $sql = "SELECT * FROM event";
                    $query = $mysqli->query($sql);
                    while ($eve = $query->fetch_assoc()) {
                ?><?php if ($row['event'] == $eve['id']): ?>
                    <option value="<?=$eve['id']?>" selected><?=$eve['event']?></option>
                <?php else: ?>
                    <option value="<?=$eve['id']?>"><?=$eve['event']?></option>
                <?php endif ?>

                <?php
                }
                ?>
                </select>
            </div>
            <input type="hidden" name="id" value="<?=$row['id']?>">
            <button type="submit" class="btn btn-primary">Update Peserta</button>
        </form>
    </div>
    </div>




<?php
  include "footer.php";
?>