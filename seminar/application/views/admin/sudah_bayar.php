<?php $this->load->view('layout/header.php'); ?>

<div class="banner">
    <h2>
    <a href="<?=base_url()?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Peserta Seminar</span>
    <i class="fa fa-angle-right"></i>
    <span>Daftar Peserta Valid</span>

    </h2>
</div>

<div class="blank">
    <div class="blank-page">
        <h2>Daftar Peserta Valid</h2>
        <table id="belum_peserta_table" class="table table-bordered table-condenses">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kode</th>
                    <th>Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                <?php foreach($sudah_bayar as $data){?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->nama;?></td>
                    <td><?=$data->email;?></td>
                    <td><?=$data->invoice;?></td>
                    <td>
                        <?php
                            if ($data->is_bayar == 'y') {
                                echo "Sudah";
                            }else{
                                echo "Belum";
                            }
                        ?>
                    </td>
                    <td>
                        <a href="<?=base_url()?>home/detil_peserta/<?=$data->id?>" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
                 <?php }?>
            </tbody>
            <tfoot>
                <tr>
                   <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kode</th>
                    <th>Bayar</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>

    </div>
</div>


<script type="text/javascript">
  $(document).ready( function () {
      $('#belum_peserta_table').DataTable();
  } );
</script>

<?php $this->load->view('layout/footer.php'); ?>


