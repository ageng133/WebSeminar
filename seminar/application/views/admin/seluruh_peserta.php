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
        <h2>Daftar Seluruh Peserta</h2>
        <table id="seluruh_peserta_table" class="table table-bordered table-condenses">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>No Invoice</th>
                    <th>Aksi <a href="#" class="btn btn-primary btn-sm pull-right">+</a></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                <?php foreach($seluruh_peserta as $data){?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->nama;?></td>
                    <td><?=$data->nim;?></td>
                    <td><?=$data->invoice;?></td>
                    <td>
                        <a href="<?=base_url()?>home/edit_peserta/<?=$data->id?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href="<?=base_url()?>home/delete_peserta/<?=$data->id?>" class="btn btn-warning"><i class="fa fa-trash"></i></a>
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


