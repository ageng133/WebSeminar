<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Print Sertifikat</title>

    <!-- Bootstrap -->
    <link href="Style/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="Style/css/datatables.bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="Style/css/datatables.min.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.css"/>

    <!-- <script src="Style/js/jquery.min.js"></script> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>



<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->



    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script> -->


    <!-- <script type="text/javascript" src="Style/js/datatables.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <a class="navbar-brand" href="http://localhost/print_sertifikat/">Print Sertifikat</a>
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="http://localhost/print_sertifikat/">Home</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Master <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="event.php">Event</a></li>
              <li><a href="peserta.php">Peserta</a></li>
              <li><a href="panitia.php">Panitia</a></li>
              <li><a href="template.php">Template</a></li>
              <li><a href="font.php">Font</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cetak Sertifikat <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="cetakPeserta.php">Peserta</a></li>
              <li><a href="cetakPanitia.php">Panitia</a></li>
            </ul>
        </li>
        <li>
          <a href="setting.php">Setting</a>
        </li>
      </ul>
    </div>
  </nav>

