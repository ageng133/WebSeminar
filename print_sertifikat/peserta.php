<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    $query = "SELECT * FROM peserta";
    $qry = $mysqli->query($query);
?>

<div class="container">
<div>
<h3>Master Peserta</h3>

</div>
  <table class="table table-bordered" id="example" style="clear: both">
    <thead>
        <tr>
        <th>No</th>
        <th>Nomer sertifikat</th>
        <th>Nama</th>
        <th>Event</th>
        <th style="width: 200px">Action <a href="tambahPeserta.php" style="float: right;" class="btn btn-primary btn-sm"> + atau tekan ` </a></th>
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
                <a href="editPeserta.php?p=<?=$row['id'];?>" class="btn btn-primary">Edit</a>
                <a href="deletePeserta.php?p=<?=$row['id'];?>" onclick="return confirm('Anda yakin akan menghapus peserta <?=$row['nama']?>?');" class="btn btn-danger" >Hapus</a>
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
        <th style="width: 200px">Action <a href="tambahPeserta.php" style="float: right;" class="btn btn-primary btn-sm"> + </a></th>
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
        window.location.href = "http://localhost/print_sertifikat/tambahPeserta.php";
        // alert('berhasil');
    }
    });
} );

</script>



<?php
  include "footer.php";
?>