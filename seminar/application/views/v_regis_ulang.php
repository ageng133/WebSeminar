<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seminar UKM IT</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>asset/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>asset/frontend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?=base_url()?>asset/frontend/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.css" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>asset/frontend/css/freelancer.min.css" rel="stylesheet">
    <script src="<?=base_url()?>asset/frontend/vendor/jquery/jquery.min.js"></script>

    <style type="text/css">
      input[type=text] {
          /*width: 200px;
          padding: 5px;
          margin: 5px 0;
          box-sizing: border-box;*/
          height: 50px;
          font-size: 20px;
      }

      #autoSuggestionsList > li {
          background: none repeat scroll 0 0 #F3F3F3;
          border-bottom: 1px solid #E3E3E3;
          list-style: none outside none;
          padding: 10px 15px 10px 15px;
          text-align: left;
          width: 610px;
          font-size: 15px;
      }

      #autoSuggestionsList > li:hover {
          background: none repeat scroll 0 0 #9BDAF4;
          font-weight: 900;
      }

      #autoSuggestionsList > li a { color: #800000; }

      .auto_list {
          border: 1px solid #E3E3E3;
          border-radius: 5px 5px 5px 5px;
          position: absolute;
      }

      .data-peserta{
        cursor: pointer;
      }
      body{
        padding: 0;
        margin: 0;
        font-family: 'Libre Franklin', sans-serif;
      }
      body, html {
          height: 100%;
      }
      .conf{
        height: 50px;
        font-size: 20px;
      }
      .bg {
          /* The image used */
          background-image: url("http://hdwallpaperbackgrounds.net/wp-content/uploads/2016/07/white-background.jpg");

          /* Full height */
          height: 100%;

          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }
    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?=base_url()?>">SEMINAR IT</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=base_url()?>">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=base_url()?>regis">Registrasi Ulang</a>
            </li>
            <!-- <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="margin-top: 0px">
      <div class="row" style="padding-left: 250px; padding-right: 250px">
        <div class="col-md-12" style="margin-top: 200px">
          <!-- <form method="post" action="<?=base_url()?>Regis"> -->
            <div class="form-group">
              <h2 style="text-align: center; font-weight: 900 ">Silahkan Masukan Nama atau Kode verifikasi Anda:</h2>
              <input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" class="form-control">
              <input name="invoice" id="invoice" type="hidden" class="form-control">
            </div>
            <div id="suggestions">
                 <div id="autoSuggestionsList"></div>
             </div>
             <button type="button" class=" conf btn btn-primary btn-block" id="submit">Konfirmasi</button>
          <!-- </form> -->
        </div>
      </div>

    </div>



    <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_regis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <table class="table" width="100%">
                        <tr>
                          <td>Nama</td>
                          <td id="konf_nama"></td>
                        </tr>
                        <tr>
                          <td>Nim</td>
                          <td id="konf_nim"></td>
                        </tr>
                        <tr>
                          <td>Jurusan</td>
                          <td id="konf_jurusan"></td>
                        </tr>
                        <tr>
                          <td>Semester</td>
                          <td id="konf_semester"></td>
                        </tr>
                        <tr>
                          <td>Invoice</td>
                          <td id="konf_invoice"></td>
                        </tr>
                      </table>
                  </div>
                  <div class="modal-footer">
                    <div class="col-md-6">
                      <button type="button"  type="submit" id="btn_save_konf" class="btn btn-primary btn-block">Konfirmasi</button>
                    </div>
                    <div class="col-md-6">
                      <button type="button" id="btn_modal_keluar" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->

                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->


    <script type="text/javascript">

    $("#btn_modal_keluar").click(function(){
      $("#search_data").val("");
    });

    $("#btn_save_konf").click(function(){
      var invoice = $("#konf_invoice").html();

      $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>Regis/konfirmasi/",
          data: "invoice="+invoice,
          success: function (data) {
              // return success
              $("#search_data").val("");
              $("#invoice").val("");
              $('#suggestions').hide();
              $('#Modal_regis').modal('hide');

              if (data == 1) {
                swal(
                'Registrasi Ulang',
                'berhasil!',
                'success'
                )
                window.setTimeout(function(){

                    // Move to a new location or you can do something else
                    window.location.href = "<?php echo base_url(); ?>Regis";

                }, 2000);
              }else{
                swal(
                'Oops...',
                'Silahkan periksa kembali data anda',
                'error',
                )
                window.setTimeout(function(){

                    // Move to a new location or you can do something else
                    window.location.href = "<?php echo base_url(); ?>Regis";

                }, 2000);
              }


          }
       });


    });

    $("#submit").click(function(){
      var input_data = $('#search_data').val();

      if (input_data == '') {
        swal(
                'Oops...',
                'Silahkan Masukan Nama / Kode konfirmasi anda',
                'error'
        );
        return false;
      }

      //coba coba awal
      var kode = $("#invoice").val();
      // alert(kode);

      $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>Regis/get_individu_peserta/",
          data: "invoice="+kode,
          dataType:'json',
          success: function (data) {
            // alert(data[0].nim);

            // alert(data);
              // return success
              $("#konf_nama").html(data[0].nama);
              $("#konf_nim").html(data[0].nim);
              $("#konf_jurusan").html(data[0].jurusan);
              $("#konf_semester").html(data[0].semester);
              $("#konf_invoice").html(data[0].invoice);
              $('#suggestions').hide();

              $('#Modal_regis').modal('show');


          }
       });


      //coba coba akhir


      // var kode = $("#invoice").val();
      // $.ajax({
      //     type: "POST",
      //     url: "<?php echo base_url(); ?>Regis/konfirmasi/",
      //     data: "invoice="+kode,
      //     success: function (data) {
      //         // return success
      //         $("#search_data").val("");
      //         $("#invoice").val("");
      //         $('#suggestions').hide();

      //         if (data == 1) {
      //           swal(
      //           'Registrasi Ulang',
      //           'berhasil!',
      //           'success'
      //           )
      //           window.setTimeout(function(){

      //               // Move to a new location or you can do something else
      //               window.location.href = "<?php echo base_url(); ?>Regis";

      //           }, 2000);
      //         }else{
      //           swal(
      //           'Oops...',
      //           'Silahkan periksa kembali data anda',
      //           'error',
      //           )
      //           window.setTimeout(function(){

      //               // Move to a new location or you can do something else
      //               window.location.href = "<?php echo base_url(); ?>Regis";

      //           }, 2000);
      //         }
      //     }
      //  });
    });




    $(document).on('click', '.data-peserta', function(){
      var data = $(this).text();
      var kode = $(this).attr("data-id");

      $("#search_data").val(data);
      $("#invoice").val(kode);

      $('#suggestions').hide();

    });

    function ajaxSearch()
    {
        var input_data = $('#search_data').val();


        if (input_data.length === 0)
        {
            $('#suggestions').hide();
        }
        else
        {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Regis/autocomplete/",
                data: "search_data="+input_data,
                success: function (data) {
                    // return success
                    if (data.length > 0) {
                        // alert(data);
                        $('#suggestions').show();
                        $('#autoSuggestionsList').addClass('auto_list');
                        $('#autoSuggestionsList').html(data);
                    }
                }
             });

         }
     }
    </script>


    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>asset/frontend/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.js"></script>
    <script src="<?=base_url()?>asset/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>asset/frontend/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>asset/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?=base_url()?>asset/frontend/js/jqBootstrapValidation.js"></script>
    <!-- <script src="js/contact_me.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>asset/frontend/js/freelancer.min.js"></script>

  </body>

</html>