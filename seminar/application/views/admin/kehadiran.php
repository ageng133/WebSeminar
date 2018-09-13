<?php $this->load->view('layout/header.php'); ?>

<div class="banner">
    <h2>
    <a href="<?=base_url()?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Peserta Seminar</span>
    <i class="fa fa-angle-right"></i>
    <span>Daftar Seluruh Peserta</span>

    </h2>
</div>

<div class="blank">
    <div class="blank-page">
        <h2>Daftar Regis Ulang</h2>
        <table id="seluruh_peserta_table" class="table table-bordered table-condenses">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>No Invoice</th>
                    <th>Regis Ulang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                <?php foreach($kehadiran as $data){?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->nama;?></td>
                    <td><?=$data->nim;?></td>
                    <td><?=$data->invoice;?></td>
                    <?php if ($data->is_regis_ulang == 'y'): ?>
                    <td><b>Hadir</b></td>
                    <?php else: ?>
                    <td><b>Belum Hadir</b></td>
                    <?php endif ?>
                    <td>
                        <?php if ($data->is_regis_ulang == 'y'): ?>
                            <a href="<?=base_url()?>admin/kehadiran/aksi_regis/y/<?=$data->id?>" class="btn btn-danger btn-sm">Batal Konfirmasi</a>
                        <?php else: ?>
                            <a href="<?=base_url()?>admin/kehadiran/aksi_regis/n/<?=$data->id?>" class="btn btn-primary btn-sm">Konfirmasi</a>
                        <?php endif ?>
                    </td>
                </tr>
                 <?php }?>
            </tbody>
            <tfoot>
                <tr>
                   <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>No Invoice</th>
                    <th>Regis Ulang</th>
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


