<?php $this->load->view('layout/header.php'); ?>

<div class="banner">
    <h2>
    <a href="<?=base_url()?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <a href="<?=base_url()?>home/sudah_bayar">Peserta Valid</a>
    <i class="fa fa-angle-right"></i>
    <span>Detil Peserta</span>

    </h2>
</div>

<div class="blank">
    <div class="blank-page">
        <h2>Detil Peserta</h2>
        <table  class="table table-bordered table-condenses">
            <tr>
                <td><b>Nama</b></td>
                <td><?=ucwords($detil->nama)?></td>
                <td><b>Usia</b></td>
                <td><?=$detil->usia?></td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin</b></td>
                <td>
                    <?php if ($detil->j_kel == "L") {
                        echo "Laki - Laki";
                    }else{
                        echo "Perempuan";
                    } ?>
                </td>
                <td><b>Email</b></td>
                <td><?=$detil->email?></td>
            </tr>
            <tr>
                <td><b>No Telepon</b></td>
                <td><?=$detil->no_telp?></td>
                <td><b>Kode Konfirmasi</b></td>
                <td><?=$detil->invoice?></td>
            </tr>
            <tr>
                <td><b>Tanggal Daftar</b></td>
                <td><?=$detil->tgl_daftar?></td>
                <td><b>Tanggal Tempo</b></td>
                <td><?=$detil->tgl_tempo?></td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td colspan="3"><?=$detil->alamat?></td>
            </tr>

        </table>

    </div>
</div>


<?php $this->load->view('layout/footer.php'); ?>


