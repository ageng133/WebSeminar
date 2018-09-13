<div class="container">
  <h2>Sertifikat Online (Beta Test)</h2>
  <table class="table table-bordered" id="tab-table" class="display">
    <thead>
      <tr>
        <th>No</th>
        <th>Table</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $query = $mysqli->query("show tables");
        while ($table = $query->fetch_array(MYSQLI_NUM)) {
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$table[0];?></td>
            <td>
                <a href="view_table.php?t=<?=$table[0]?>" class="btn btn-primary">Enter Data</a>
                <!-- <a href="delete_table?t=<?=$table[0]?>" class="btn btn-danger">Delete Table</a> -->
                <!-- <div class="btn-group">
                  <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Export <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <form action="export_excel.php" method="post">
                        <input type="submit" name="export_excel" value="Excel" class="btn btn-success btn-block">
                        <input type="hidden" name="table" value="<?=$table[0]?>">
                      </form>
                    </li>
                  </ul>
                </div> -->

            </td>
        </tr>
        <?php
        }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tab-table').DataTable();
  } );
</script>

<script>
function myFunction() {
    $("#awal").val("");
    $("#akhir").val("");
    $("#awal").focus();
}
</script>