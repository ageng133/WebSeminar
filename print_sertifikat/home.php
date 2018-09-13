<?php

    require_once "conn.php";
    require_once "function.php";

    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];
    $table = $_POST['table'];

    // print_r($_POST);
    // exit();

    // $query = $mysqli->query("SELECT * FROM regis_ulang WHERE no_kwitansi = '01' ORDER BY no_kwitansi");
    // $string = "SELECT * FROM $table WHERE no BETWEEN '$awal' AND '$akhir' ORDER BY no";
    // echo $string;
    // exit();
    $query = $mysqli->query("SELECT * FROM $table WHERE no BETWEEN '$awal' AND '$akhir' ORDER BY no");
    // print_r($query);
    // exit();
    while($row = $query->fetch_assoc()){
        cetak($row["nama"], $row["no"]);
    }

?>