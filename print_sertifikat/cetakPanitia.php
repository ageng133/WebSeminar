<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $query = "SELECT * FROM panitia ORDER BY no";
    $qry = $mysqli->query($query);
?>
<div class="container">
  <div>
    <h2 style="float: left"> Cetak Panitia</h2>
    <form class="form-inline" target="_blank" method="post" action="home.php" style="float: right; margin-top: 20px">
      <div class="form-group">
        <input type="text" class="form-control" id="awal" name="awal" placeholder="Range Awal">
      </div>
      <label>s/d</label>
      <div class="form-group">
        <input type="text" class="form-control" id="akhir" name="akhir" placeholder="Range Akhir">
        <input type="hidden" name="table" value="panitia">
      </div>
      <button type="submit" class="btn btn-primary">Cetak</button>
    </form>
  </div>
   <div class="clearfix"></div>
  <table class="table table-bordered" style="clear: both" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Event</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      <?php
        while ($row = $qry->fetch_assoc()) {
          $sql = "SELECT event FROM event WHERE id = '$row[event]'";
          $hasil2 = $mysqli->query($sql);
          $event = $hasil2->fetch_assoc();
        ?>
        <tr>
            <td><?=$row['no'];?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$event['event'];?></td>
            <td><a href="cetak_one.php?p=<?=$row['id']?>&t=panitia" target="_blank" onCLick='myFunction()' class="btn btn-primary">Cetak</a></td>
        </tr>
        <?php
        }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Event</th>
        <th>Aksi</th>
    </tr>
    </tfoot>
  </table>
</div>

<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable();

    // $("#cetakbtn").mouseup(function(){
    //   $("#awal").val("");
    //   $("#akhir").val("");
    //   $("#awal").focus();
    // });
} );

</script>

<?php include "footer.php"; ?>

