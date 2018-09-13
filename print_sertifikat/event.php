<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $query = "SELECT * FROM event";
    $qry = $mysqli->query($query);
?>

<div class="container">
<div>
<h3>Master Event</h3>

</div>
  <table class="table table-bordered" id="example" style="clear: both">
    <thead>
    <tr>
        <th>No</th>
        <th>Event</th>
        <th>Tanggal</th>
        <th style="width: 200px">Action <a href="tambahEvent.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
    </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
        while ($row = $qry->fetch_assoc()) {
        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['event'];?></td>
            <td><?=$row['tgl'];?></td>
            <td>
                <a href="editEvent.php?e=<?=$row['id'];?>" class="btn btn-primary">Edit</a>
                <a href="deleteEvent.php?p=<?=$row['id'];?>" onclick="return confirm('Are you sure you want to delete event <?=$row['event']?>?');" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
        }
      ?>
    </tbody>
    <tfoot>
        <tr>
        <th>No</th>
        <th>Event</th>
        <th>Tanggal</th>
        <th style="width: 200px">Action <a href="tambahEvent.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
    </tr>
    </tfoot>
  </table>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();

    $(document).keypress(function(e){
        // e.preventDefault();
    if (e.which == 96){
        window.location.href = "http://localhost/print_sertifikat/tambahEvent.php";
        // alert('berhasil');
    }
    });
} );

</script>




<?php
  include "footer.php";
?>