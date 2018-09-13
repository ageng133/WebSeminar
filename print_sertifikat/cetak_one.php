<?php

    require_once "conn.php";
    require_once "function.php";

    $id = @$_GET['p'];
    $table = @$_GET['t'];
    // $table = @$_GET['t'];

    // echo $no . $table;

    // print_r($_POST);
    // exit();

    // $query = $mysqli->query("SELECT * FROM regis_ulang WHERE no_kwitansi = '01' ORDER BY no_kwitansi");
    $query = $mysqli->query("SELECT * FROM $table WHERE id = '$id'");
    while($row = $query->fetch_assoc()){
        cetak($row["nama"], $row["no"]);
    }

?>

<script>
function myFunction() {
    $("#awal").val("");
    $("#akhir").val("");
    $("#awal").focus();
}
</script>