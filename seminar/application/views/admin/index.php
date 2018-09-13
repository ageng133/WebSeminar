<?php $this->load->view('layout/header.php'); ?>

<div class="banner">
    <h2>
    <a href="<?=base_url()?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Dashboard</span>
    </h2>
</div>


<div class="content-top" style="min-height: 100%">
    <div class="col-md-4">
        <div class="content-top-1">
        <div class="col-md-6 top-content">
            <h5>Peserta Daftar</h5>
            <label><?=$seluruh_peserta;?></label>
        </div>
        <div class="col-md-6 top-content1">
            <?php $persen = (($seluruh_peserta / 300) * 100) ?>
            <div id="demo-pie-1" class="pie-title-center" data-percent="<?=$persen?>"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-4 ">
    <div class="content-top-1">
        <div class="col-md-6 top-content">
            <h5><a href="#">Kuota Tersedia</a></h5>
            <label><?=$tersedia = 100 - $seluruh_peserta?></label>
        </div>
        <div class="col-md-6 top-content1">
            <?php $persen = (($tersedia / 100) * 100) ?>
            <div id="demo-pie-2" class="pie-title-center" data-percent="<?=$persen?>"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-4" style="margin-bottom: 20px">
        <div class="content-top-1">
        <div class="col-md-6 top-content">
            <h5>Peserta OTS</h5>
            <?php if ($peserta_ots == '') {
                $peserta_ots = 0;
                $persen = 0;
            }else{
                $persen = (($peserta_ots / $seluruh_peserta) * 100);
                } ?>
            <label><?=$peserta_ots;?></label>
        </div>
        <div class="col-md-6 top-content1">
            <?php $persen ?>
            <div id="demo-pie-3" class="pie-title-center" data-percent="<?=$persen?>"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>

    <div class="col-md-4">
        <div class="content-top-1">
        <div class="col-md-6 top-content">
        <?php if ($peserta_hadir == '') {
                $peserta_hadir = 0;
                $persen = 0;
            }else{
                $persen = (($peserta_hadir / $seluruh_peserta) * 100);
                } ?>
            <h5>Peserta Hadir</h5>
            <label><?=$peserta_hadir;?></label>
        </div>
        <div class="col-md-6 top-content1">
            <?php $persen;  ?>
            <div id="demo-pie-4" class="pie-title-center" data-percent="<?=$persen?>"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="content-top-1">
        <div class="col-md-6 top-content">
        <?php if ($peserta_belum_hadir == '' || $peserta_belum_hadir == 0) {
                $peserta_belum_hadir = 0;
                $persen = 0;
            }else{
                if ($peserta_hadir == 0) {
                    $persen = 100;
                }else{
                    $persen = (($peserta_belum_hadir / $peserta_hadir) * 100);
                }
                } ?>
            <h5>Peserta Belum Hadir</h5>
            <label><?=$peserta_belum_hadir;?></label>
        </div>
        <div class="col-md-6 top-content1">
            <?php $persen;  ?>
            <div id="demo-pie-1" class="pie-title-center" data-percent="<?=$persen?>"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
    </div>





<div class="clearfix"> </div>

</div>


<script type="text/javascript">
  $(document).ready( function () {
      $('#hari_ini_daftar').DataTable();
  } );
</script>

<?php $this->load->view('layout/footer.php'); ?>