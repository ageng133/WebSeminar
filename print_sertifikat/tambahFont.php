<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    if ($_POST) {

    $font = $_FILES['font']['name'];
    $namafont = $_POST['namafont'];

    $target = "Fonts/".basename($font);

    $sql = "INSERT INTO font (namafont, pathlinkfont) VALUES ('$namafont', '$target')";
    $hasil = $mysqli->query($sql);

    if (move_uploaded_file($_FILES['font']['tmp_name'], $target)) {
        echo "<script>
                alert('Update berhasil');
                window.location='font.php';
        </script>"  ;
    }else{
        echo "<script>
                alert('Update Gagal');
                window.location='font.php';
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
                <input type="text" class="form-control" name="namafont" placeholder="Nama Font" required>
            </div>

             <div class="form-group">
                <label for="">Upload Font</label>
                <input type="file" name="font" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Tambah Font</button>
        </form>
    </div>
    </div>




<?php
  include "footer.php";
?>