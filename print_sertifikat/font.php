<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $query = "SELECT * FROM font";
    $qry = $mysqli->query($query);
?>

<div class="container">
<div>
<h3>Master Font</h3>

</div>
  <table class="table table-bordered" id="example" style="clear: both">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th style="width: 200px">Action <a href="tambahFont.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; while ($row = $qry->fetch_assoc()) { ?>
        <tr>
            <td><?=$no++?></td>
            <td><a href="<?=$row['pathlinkfont'];?>"><?=$row['namafont'];?></a></td>
            <td>
                <a href="editFont.php?p=<?=$row['id'];?>" class="btn btn-primary">Edit</a>
                <a href="deleteFont.php?p=<?=$row['id'];?>" class="btn btn-danger" >Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th style="width: 200px">Action <a href="tambahTemplate.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
        </tr>
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