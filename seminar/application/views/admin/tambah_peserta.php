<?php $this->load->view('layout/header.php'); ?>

<!--banner-->
           <div class="banner">
                <h2>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Peserta Seminar</span>
                <i class="fa fa-angle-right"></i>
                <span>Tambah Peserta Peserta</span>
                </h2>
            </div>
        <!--//banner-->
    <!--grid-->
    <div class="validation-system">

        <div class="validation-form">
    <!---->

        <form method="post" action="<?=base_url()?>admin/peserta/tambah_peserta/">
            <div class="vali-form">
                <div class="col-md-6 form-group1">
                  <label class="control-label">Nama</label>
                  <input type="text" name="nama" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group1 form-last">
                  <label class="control-label">Nim</label>
                  <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa">
                </div>
            </div>

            <div class="col-md-6 form-group1">
              <label class="control-label">Jurusan</label>
              <select name="jurusan" class="form-control">
                <option value="">--- Pilih Jurusan ---</option>
                <option value="TI">Teknik Informatika</option>
                <option value="SI">Sistem Informasi</option>
              </select>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Semester</label>
              <select name="semester" class="form-control">
                <option value="">--- Pilih Semester ---</option>
                <option value="1">I</option>
                <option value="2">II</option>
                <option value="3">III</option>
                <option value="4">IV</option>
                <option value="5">V</option>
                <option value="6">VI</option>
                <option value="7">VII</option>
                <option value="8">VIII</option>
              </select>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-6 form-group1">
              <label class="control-label">No Telpon</label>
              <input type="text" name="no_telp" placeholder="Telepon">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Invoice</label>
              <input type="text" name="invoice" placeholder="Nomor Invoice">
            </div>

            <div class="col-md-6 form-group1">
              <label class="control-label">Status</label>
              <select name="status" class="form-control">
                <option value="mahasiswa" selected="">Mahasiswa</option>
                <option value="umum">Umum</option>
              </select>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">On The Spot</label>
              <select name="ots" class="form-control">
                <option value="n" selected="">No</option>
                <option value="y">Yes</option>
              </select>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-12 form-group1 ">
              <label class="control-label">Alamat</label>
              <textarea  placeholder="Alamat" name="alamat"></textarea>
            </div>
             <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
                <input type="submit" value="submit" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
          <div class="clearfix"> </div>
        </form>
 </div>

</div>

<?php $this->load->view('layout/footer.php'); ?>