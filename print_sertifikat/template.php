<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $query = "SELECT * FROM template";
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
        <th>Nama</th>
        <th>Event</th>
        <th>Gambar</th>
        <th style="width: 200px">Action <a href="tambahTemplate.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; while ($row = $qry->fetch_assoc()) {
            $sql = "SELECT event FROM event WHERE id = '$row[event]'";
            $hasil2 = $mysqli->query($sql);
            $event = $hasil2->fetch_assoc();
            ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$event['event'];?></td>
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
        <th>Nama</th>
        <th>Event</th>
        <th>Gambar</th>
        <th style="width: 200px">Action <a href="tambahTemplate.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
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