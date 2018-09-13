<?php
    require_once "conn.php";
    require_once "function.php";
    include "header.php";

    session_start();

    $table = $_GET['t'];
    $query = "SELECT * FROM $table ORDER BY no";
    $qry = $mysqli->query($query);
?>
<div class="container">
  <div style="margin-top: 20px">
    <h2 style="float: left"> Tabel <?=$table?></h2>
    <form class="form-inline" target="_blank" method="post" action="home.php" style="float: right; margin-top: 20px">
      <div class="form-group">
        <input type="text" class="form-control" id="awal" name="awal" placeholder="Range Awal">
      </div>
      <label>s/d</label>
      <div class="form-group">
        <input type="text" class="form-control" id="akhir" name="akhir" placeholder="Range Akhir">
        <input type="hidden" name="table" value="<?=$table?>">
      </div>
      <button type="submit" class="btn btn-primary">Cetak</button>
    </form>
  </div>
  <table class="table table-bordered" style="clear: both">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
    </thead>
    <tbody>
      <?php
        while ($row = $qry->fetch_assoc()) {
        ?>
        <tr>
            <td><?=$row['no'];?></td>
            <td><?=$row['nama'];?></td>
            <td><a href="cetak_one.php?i=<?=$row['no'];?>&t=<?=$table?>" target="_blank" class="btn btn-primary">Cetak</a></td>
        </tr>
        <?php
        }
      ?>
    </tbody>
  </table>
</div>

