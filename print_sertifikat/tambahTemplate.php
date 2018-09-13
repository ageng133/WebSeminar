<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    if ($_POST) {

    $image = $_FILES['image']['name'];
    $nama = $_POST['nama'];
    $event = $_POST['event'];

    $target = "Template/".basename($image);

    $sql = "INSERT INTO template (nama, pathlink, event) VALUES ('$nama', '$target', '$event')";
    $hasil = $mysqli->query($sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "<script>
                alert('Update berhasil');
                window.location='template.php';
        </script>"  ;
    }else{
        echo "<script>
                alert('Update Gagal');
                window.location='tempalte.php';
        </script>"  ;
    }
    }

    // print_r($row);
?>
    <div class="container">
    <div class="row">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <legend>Tambah Template</legend>

            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Peserta" required>
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

             <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Tambah Template</button>
        </form>
    </div>
    </div>




<?php
  include "footer.php";
?>