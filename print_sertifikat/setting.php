<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $query = "SELECT * FROM setting";
    $qry = $mysqli->query($query);
?>

<div class="container">
<div>
<h3>Master Template</h3>

</div>
  <table class="table table-bordered" id="example" style="clear: both">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama Event</th>
        <th>Template Peserta</th>
        <th>Template Panitia</th>
        <th>Template Pembicara</th>
        <th>Font</th>
        <th>Tempat No</th>
        <th>Tempat Nama</th>
        <th>Size No</th>
        <th>Size Nama</th>
        <th>Active</th>
        <th style="width: 200px">Action <a href="tambahSetting.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; while ($row = $qry->fetch_assoc()) {
            $sql = "SELECT event FROM event WHERE id = '$row[nama_event]'";
            $hasil2 = $mysqli->query($sql);
            $event = $hasil2->fetch_assoc();

            $sql = "SELECT * FROM template WHERE id = '$row[template_peserta]'";
            $hasil3 = $mysqli->query($sql);
            $temp_peserta = $hasil3->fetch_assoc();

            $sql = "SELECT * FROM template WHERE id = '$row[template_panita]'";
            $hasil4 = $mysqli->query($sql);
            $temp_panitia = $hasil4->fetch_assoc();

            $sql = "SELECT * FROM template WHERE id = '$row[template_pembicara]'";
            $hasil5 = $mysqli->query($sql);
            $temp_pembicara = $hasil5->fetch_assoc();

            $sql = "SELECT * FROM font WHERE id = '$row[font]'";
            $hasil6 = $mysqli->query($sql);
            $font = $hasil6->fetch_assoc();

            $sql = "SELECT * FROM font WHERE id = '$row[font]'";
            $hasil6 = $mysqli->query($sql);
            $font = $hasil6->fetch_assoc();
            ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$event['event'];?></td>
            <td><?=$temp_peserta['nama'];?></td>
            <td><?=$temp_peserta['nama'];?></td>
            <td><?=$temp_pembicara['nama'];?></td>
            <td><?=$font['namafont'];?></td>
            <td><?=$row['no_place'];?></td>
            <td><?=$row['nama_place'];?></td>
            <td><?=$row['no_size'];?></td>
            <td><?=$row['nama_size'];?></td>
            <td><?php if ($row['is_active'] == 'y'){
                echo 'Aktif';
            }else{
                echo "Tidak Aktif";
            } ?>

            </td>
            <td><img src="<?=$row['pathlink']?>" class="img img-responsive" alt="" width="50px"></td>
            <td>
                <a href="editTemplate.php?p=<?=$row['id'];?>" class="btn btn-primary">Edit</a>
                <a href="deleteTemplate.php?p=<?=$row['id'];?>" class="btn btn-danger" >Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
        <th>No</th>
        <th>Nama Event</th>
        <th>Template Peserta</th>
        <th>Template Panitia</th>
        <th>Template Pembicara</th>
        <th>Font</th>
        <th>Tempat No</th>
        <th>Tempat Nama</th>
        <th>Size No</th>
        <th>Size Nama</th>
        <th>Active</th>
        <th style="width: 200px">Action <a href="tambahSetting.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
        </tr>
    </tfoot>
  </table>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>



<?php
  include "footer.php";
?>