<?php $this->load->view('layout/header.php'); ?>

<!--banner-->
           <div class="banner">
                <h2>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Peserta Seminar</span>
                <i class="fa fa-angle-right"></i>
                <span>Edit Peserta</span>
                </h2>
            </div>
        <!--//banner-->
    <!--grid-->
    <div class="validation-system">

        <div class="validation-form">
    <!---->

        <form method="post" action="<?=base_url()?>home/update_peserta">
            <div class="vali-form">
                <div class="col-md-6 form-group1">
                  <label class="control-label">Nama</label>
                  <input type="text" name="nama" placeholder="Nama" value="<?= $peserta_edit->nama;?>" >
                </div>
                <div class="col-md-6 form-group1 form-last">
                  <label class="control-label">Email</label>
                  <input type="text" name="email" placeholder="Email" value="<?= $peserta_edit->email?>">
                </div>
                <div class="clearfix"> </div>
            </div>

                <div class="col-md-6 form-group2 group-mail">
                  <label class="control-label">Jenis Kelamin</label>
                  <select name="j_kel">
                      <?php if ($peserta_edit->j_kel == 'L'): ?>
                        <option value="L" selected>Laki - Laki</option>
                        <option value="P">Perempuan</option>
                      <?php else: ?>
                          <option value="L">Laki - Laki</option>
                        <option value="P" selected>Perempuan</option>
                      <?php endif ?>
                  </select>
                </div>

                <div class="col-md-6 form-group1 form-last">
                  <label class="control-label">Usia</label>
                  <input type="text" placeholder="usia" name="usia" value="<?= $peserta_edit->usia?>">
                </div>
                <div class="clearfix"> </div>


                <div class="col-md-6 form-group1">
                  <label class="control-label">No Telpon</label>
                  <input type="text" name="no_telp" placeholder="No Telepon" value="<?= $peserta_edit->no_telp;?>" >
                </div>
                <div class="col-md-6 form-group1 form-last">
                  <label class="control-label">Kode Verivikasi</label>
                  <input type="text" placeholder="Kode verifikasi" name="invoice" value="<?= $peserta_edit->invoice?>" disabled>
                </div>
                <div class="clearfix"> </div>

                 <div class="col-md-6 form-group1">
                  <label class="control-label">Tanggal Daftar</label>
                  <input type="text" name="tgl_daftar" placeholder="Tanggal Daftar" value="<?= $peserta_edit->tgl_daftar;?>" >
                </div>
                <div class="col-md-6 form-group1 form-last">
                  <label class="control-label">Tanggal Tempo</label>
                  <input type="text" placeholder="Tanggal Tempo" name="tgl_tempo" value="<?= $peserta_edit->tgl_tempo?>">
                </div>
                <div class="clearfix"> </div>

            <div class="col-md-12 form-group1 ">
              <label class="control-label">Your Comment</label>
              <textarea  placeholder="Alamat" name="alamat"><?=$peserta_edit->alamat;?></textarea>
            </div>
             <div class="clearfix"> </div>

             <input type="hidden" name="id" value="<?=$peserta_edit->id;?>">

            <div class="col-md-12 form-group">

                <input type="submit" value="submit" class="btn btn-primary">
                <a href="#" class="btn btn-warning">Back</a>
            </div>
          <div class="clearfix"> </div>
        </form>

    <!---->
 </div>

</div>
    <!--//grid-->


<?php $this->load->view('layout/footer.php'); ?>