<?php $this->load->view('layout/header.php'); ?>

<div class="banner">
    <h2>
    <a href="<?=base_url()?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Peserta Seminar</span>
    <i class="fa fa-angle-right"></i>
    <span>Peserta OTS</span>

    </h2>
</div>

<div class="blank">
    <div class="blank-page">
        <h2>Daftar Peserta OTS</h2>
        <table id="seluruh_peserta_table" class="table table-bordered table-condenses">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Status</th>
                    <th>No Invoice</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                <?php foreach($ots as $data){?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->nama;?></td>
                    <td><?=$data->nim;?></td>
                    <td><?=$data->status;?></td>
                    <td><?=$data->invoice;?></td>
                </tr>
                 <?php }?>
            </tbody>
            <tfoot>
                <tr>
                   <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>No Invoice</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>

    </div>
</div>


<script type="text/javascript">
  $(document).ready( function () {
      $('#seluruh_peserta_table').DataTable();
  } );
</script>

<?php $this->load->view('layout/footer.php'); ?>


