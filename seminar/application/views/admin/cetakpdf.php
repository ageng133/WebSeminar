<html>
<head>
    <title>Cetak PDF</title>
    <style type="text/css">
        table{
            width: 100%;
        }
        th, td{
            padding: 5px;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;"><?=$judul?></h1>
<p>Jumlah Peserta: <?=$jumlah?> Orang</p>
<table border="1" width="100%" cellpadding="20px" style="border-collapse: collapse;">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Usia</th>
    <th>Email</th>
    <th>Telepon</th>
    <th>Bayar</th>
</tr>
<?php
    $no = 1;
    foreach($peserta as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->usia."</td>";
        echo "<td>".$data->email."</td>";
        echo "<td>".$data->no_telp."</td>";
        echo "<td>".$data->is_bayar."</td>";
        echo "</tr>";
        $no++;
    }
?>
</table>
</body>
</html>