<?php $this->load->view('layout/header.php'); ?>

<div class="banner">
    <h2>
    <a href="<?=base_url()?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Dashboard</span>
    </h2>
</div>


<div class="content-top" style="min-height: 100%">
    <div class="blank">
        <div class="blank-page">
            <div class="col-12">
            <div class="col-md-12">
                <h1>Peserta
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>

            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Invoice</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>


<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Peserta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Invoice</label>
                            <div class="col-md-10">
                              <input type="text" name="invoice" id="invoice" class="form-control" placeholder="No Invoice">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nim</label>
                            <div class="col-md-10">
                              <input type="text" name="nim" id="nim" class="form-control" placeholder="Nomor Induk Mahasiswa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jurusan</label>
                            <div class="col-md-10">
                              <select name="jurusan" id="jurusan" class="form-control">
                                <option value="">--- Pilih Jurusan ---</option>
                                <option value="TI">Teknik Informatika</option>
                                <option value="SI">Sistem Informasi</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">semester</label>
                            <div class="col-md-10">
                              <select name="semester" id="semester" class="form-control">
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
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No Telp</label>
                            <div class="col-md-10">
                              <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <select name="status" id="status" class="form-control">
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="umum">umum</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">OTS</label>
                            <div class="col-md-10">
                              <select name="ots" id="ots" class="form-control">
                                <option value="n">No</option>
                                <option value="y">Yes</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Alamat</label>
                            <div class="col-md-10">
                              <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <input type="hidden" name="id_edit" id="id_edit">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_edit" id="nama_edit" class="form-control" placeholder="Nama Peserta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Invoice</label>
                            <div class="col-md-10">
                              <input type="text" name="invoice_edit" id="invoice_edit" class="form-control" placeholder="No Invoice">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nim</label>
                            <div class="col-md-10">
                              <input type="text" name="nim_edit" id="nim_edit" class="form-control" placeholder="Nomor Induk Mahasiswa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jurusan</label>
                            <div class="col-md-10">
                              <select name="jurusan_edit" id="jurusan_edit" class="form-control">
                                <option value="">--- Pilih Jurusan ---</option>
                                <option value="TI">Teknik Informatika</option>
                                <option value="SI">Sistem Informasi</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">semester</label>
                            <div class="col-md-10">
                              <select name="semester_edit" id="semester_edit" class="form-control">
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
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No Telp</label>
                            <div class="col-md-10">
                              <input type="text" name="no_telp_edit" id="no_telp_edit" class="form-control" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <select name="status_edit" id="status_edit" class="form-control">
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="umum">umum</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">OTS</label>
                            <div class="col-md-10">
                              <select name="ots_edit" id="ots_edit" class="form-control">
                                <option value="n">No</option>
                                <option value="y">Yes</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Alamat</label>
                            <div class="col-md-10">
                              <textarea name="alamat_edit" id="alamat_edit" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<?php $this->load->view('layout/footer.php'); ?>

