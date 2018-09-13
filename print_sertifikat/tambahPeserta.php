<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    // no sertifikat terakhir
    $sql = "SELECT no FROM peserta ORDER BY no DESC LIMIT 1";
    $query = $mysqli->query($sql);
    $terakhir = $query->fetch_assoc();

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

    // autonumber
    $number[1] = explode("P", $terakhir['no']);
    $angka = (int)implode("", $number[1]) + 1;

    // print_r($row);
?>
    <div class="container">
    <div class="row">
        <form action="" method="POST" role="form">
            <legend>Tambah Peserta</legend><p style="float: right;">No Sertifikat Terakhir:  <b><?=$terakhir['no']?></b> </p>

            <div class="form-group">
                <label for="">No Sertifikat</label>
                <input type="text" class="form-control" name="no" id="no_sertifikat" value="<?=$angka?>" placeholder="No Sertifikat" required>
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Peserta" required>
            </div>
            <div class="form-group">
                <label for="">Event</label>
                <select name="event" class="form-control">
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
            <button type="submit" class="btn btn-primary">Tambah Peserta</button>
            <a href="#" onclick="history.back()" class="btn btn-warning">Kembali</a>
        </form>
    </div>
    </div>


<script type="text/javascript">
    // MEMBUAT INPUT MENJADI HURUF BESAR

    $(document).ready(function(){
        $('#nama').focus();
    });

    jQuery('#nama').keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });

    // MEMBUAT INPUT HANYA ANGKA
    $("#no_sertifikat").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            alert('Hanya gunakan angka pada input ini');
            e.preventDefault();
        }
    });



</script>

<?php
  include "footer.php";
?>