<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');?>

<?php

    if (!$this->session->userdata('logged_in')) {
        redirect('login','refresh');
    }

    $data = $this->session->userdata('logged_in');

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Seminar Dashboard Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?=base_url()?>asset/backend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css"/>


<!-- Custom Theme files -->
<link href="<?=base_url()?>asset/backend/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?=base_url()?>asset/backend/css/font-awesome.css" rel="stylesheet">
<script src="<?=base_url()?>asset/backend/js/jquery.min.js"> </script>
<script src="<?=base_url()?>asset/backend/js/bootstrap.min.js"> </script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js"></script>

<!-- Mainly scripts -->
<script src="<?=base_url()?>asset/backend/js/jquery.metisMenu.js"></script>
<script src="<?=base_url()?>asset/backend/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?=base_url()?>asset/backend/css/custom.css" rel="stylesheet">
<script src="<?=base_url()?>asset/backend/js/custom.js"></script>
<script src="<?=base_url()?>asset/backend/js/screenfull.js"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });

        });
        </script>

<script src="<?=base_url()?>asset/backend/js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-4').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
<!--skycons-icons-->
<script src="<?=base_url()?>asset/backend/js/skycons.js"></script>




</head>
<body>
<div id="wrapper">

        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="<?=base_url()?>">Seminar IT</a></h1>
               </div>
             <div class=" border-bottom">
            <div class="full-left">
              <section class="full-top">
                <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
            </section>
            <form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>


            <!-- Brand and toggle get grouped for better mobile display -->

           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men" >
                <ul class=" nav_1">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?=$data['username'];?><i class="caret"></i></span><img src="<?=base_url()?>asset/backend/images/user-dummy.png"></a>
                      <ul class="dropdown-menu " role="menu">
                        <li><a href="<?=base_url()?>VerifyLogin/logout"><i class="fa fa-clipboard"></i>Logout</a></li>
                      </ul>
                    </li>

                </ul>
             </div><!-- /.navbar-collapse -->
            <div class="clearfix">

     </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?=base_url()?>admin/dashboard" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Peserta Seminar</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?=base_url()?>admin/peserta/" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Daftar Seluruh Peserta</a></li>
                            <li><a href="<?=base_url()?>admin/peserta/ots" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Peserta OTS</a></li>
                       </ul>
                    </li>
                    <!-- <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon "></i> <span class="nav-label">Kehadiran Peserta</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?=base_url()?>admin/kehadiran/sudah_hadir" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Peserta Hadir</a></li>
                            <li><a href="<?=base_url()?>admin/kehadiran/belum_hadir" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Peserta Belum Hadir</a></li>
                       </ul>
                    </li> -->
                    <li>
                        <a href="<?=base_url()?>admin/kehadiran" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i><span class="nav-label">Kehadiran</span> </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/laporan" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon "></i><span class="nav-label">Report</span> </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
         <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
