<?php $this->load->view('layout/header.php'); ?>

<div class="banner">
    <h2>
    <a href="<?=base_url()?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Laporan Peserta</span>

    </h2>
</div>

<div class="blank">
    <div class="blank-page">
        <table  class="table table-bordered table-condenses">
            <tr>
                <td><b>Seluruh Pendaftar</b></td>
                <td>Jumlah Peserta</td>
                <td>
                    <a href="<?=base_url()?>home/cetak" class="btn btn-primary" style="float: left">Download as PDF</a>
                    <a href="#" class="btn btn-primary ">Download as EXCEL</a>
                </td>
            </tr>
            <tr>
                <td><b>Pendaftar Valid</b></td>
                <td>Jumlah Peserta</td>
                <td>
                    <a href="<?=base_url()?>home/cetak/valid" class="btn btn-primary" style="float: left">Download as PDF</a>
                    <a href="#" class="btn btn-primary ">Download as EXCEL</a>
                </td>
            </tr>
            <tr>
                <td><b>Pendaftar Belum Valid</b></td>
                <td>Jumlah Peserta</td>
                <td>
                    <a href="<?=base_url()?>home/cetak/belum_valid" class="btn btn-primary" style="float: left">Download as PDF</a>
                    <a href="#" class="btn btn-primary ">Download as EXCEL</a>
                </td>
            </tr>
        </table>

    </div>
</div>


<?php $this->load->view('layout/footer.php'); ?>


