<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $query = "SELECT * FROM panitia";
    $qry = $mysqli->query($query);
?>

<div class="container">
<div>
<h3>Master Panitia</h3>

</div>
  <table class="table table-bordered" style="clear: both" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Nomer sertifikat</th>
        <th>Nama</th>
        <th>Event</th>
        <th style="width: 200px">Action <a href="tambahPanitia.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
    </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
        while ($row = $qry->fetch_assoc()) {
            $sql = "SELECT event FROM event WHERE id = '$row[event]'";
            $hasil2 = $mysqli->query($sql);
            $event = $hasil2->fetch_assoc();
        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['no'];?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$event['event'];?></td>
            <td>
                <a href="editPanitia.php?p=<?=$row['id'];?>" class="btn btn-primary">Edit</a>
                <a href="deletePanitia.php?p=<?=$row['id'];?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus panitia <?=$row['nama']?>?');">Hapus</a>
            </td>
        </tr>
        <?php
        }
      ?>
    </tbody>
    <tfoot>
        <tr>
        <th>No</th>
        <th>Nomer sertifikat</th>
        <th>Nama</th>
        <th>Event</th>
        <th style="width: 200px">Action <a href="tambahPanitia.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
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
        window.location.href = "http://localhost/print_sertifikat/tambahPanitia.php";
        // alert('berhasil');
    }
    });
} );

</script>

<?php
  include "footer.php";
?>