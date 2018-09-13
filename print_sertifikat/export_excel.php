<?php
    require_once "conn.php";

    $table = $_POST['table'];
    $output = "";

    $query = "SELECT * FROM $table ORDER BY no";
    $sql = $mysqli->query($query);

    $output .= '
        <table class="table" bordered="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
    ';
    while ($row = $sql->fetch_assoc()) {
        $output .= '
            <tr>
                <td>'.$row['no'].'</td>
                <td>'.$row['nama'].'</td>
            </tr>
        ';
    }
    $output .= '</table>';
    header("Content-Type: application/xls");
    header("Content-Disposition:attachment; filename=".$table.".xls");
    echo $output;

?>