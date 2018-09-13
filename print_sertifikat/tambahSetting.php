<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    if ($_POST) {

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $event = $_POST['event'];

    $sql = "INSERT INTO peserta (no, nama, event) VALUES ('$no', '$nama', '$event')";
    $hasil = $mysqli->query($sql);

    if ($hasil) {
        echo "<script>
                alert('Update berhasil');
                window.location='peserta.php';
        </script>"  ;
    }else{
        echo "<script>
                alert('Update Gagal');
                window.location='tambahPeserta.php';
        </script>"  ;
    }
    }

    // print_r($row);
?>
    <div class="container">
    <div class="row">
        <form action="" method="POST" role="form">
            <legend>Tambah Setting</legend>

            <div class="form-group">
                <label for="">Nama Setting</label>
                <input type="text" class="form-control" name="nama_setting  " placeholder="Nama Setting" required>
            </div>
            <div class="form-group">
                <label for="">Nama Event</label>
                <select name="nama_event" class="form-control">
                <?php
                    $sql = "SELECT * FROM event";
                    $query = $mysqli->query($sql);
                    while ($row = $query->fetch_assoc()) {

                ?>
                <option value="<?=$row['id']?>"><?=$row['event']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Template Peserta</label>
                <select name="template_peserta" class="form-control">
                <option value="">-- Pilih Template Peserta --</option>
                <?php
                    $sql = "SELECT * FROM template";
                    $query = $mysqli->query($sql);
                    while ($row = $query->fetch_assoc()) {
                        // $eve = $row['event'];
                    $sql = "SELECT event FROM event WHERE id = '$row[event]'";
                    $hasil = $mysqli->query($sql);
                    $event = $hasil->fetch_assoc();
                ?>
                <option value="<?=$row['id']?>"><?=$row['nama']." | ".$event['event']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Template Panitia</label>
                <select name="template_panita" class="form-control">
                <option value="">-- Pilih Template Panitia --</option>
                <?php
                    $sql = "SELECT * FROM template";
                    $query = $mysqli->query($sql);
                    while ($row = $query->fetch_assoc()) {
                        // $eve = $row['event'];
                    $sql = "SELECT event FROM event WHERE id = '$row[event]'";
                    $hasil = $mysqli->query($sql);
                    $event = $hasil->fetch_assoc();
                ?>
                <option value="<?=$row['id']?>"><?=$row['nama']." | ".$event['event']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Template Pembicara</label>
                <select name="template_pembicara" class="form-control">
                <option value="">-- Pilih Template Pembicara --</option>
                <?php
                    $sql = "SELECT * FROM template";
                    $query = $mysqli->query($sql);
                    while ($row = $query->fetch_assoc()) {
                        // $eve = $row['event'];
                    $sql = "SELECT event FROM event WHERE id = '$row[event]'";
                    $hasil = $mysqli->query($sql);
                    $event = $hasil->fetch_assoc();
                ?>
                <option value="<?=$row['id']?>"><?=$row['nama']." | ".$event['event']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Event</button>
        </form>
    </div>
    </div>




<?php
  include "footer.php";
?>