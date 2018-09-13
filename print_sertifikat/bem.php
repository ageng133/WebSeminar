<?php

        require_once "conn.php";

        $query = $mysqli->query("SELECT * FROM jabatan WHERE no BETWEEN '0139' AND '0141' ORDER BY no");
        // $query = $mysqli->query("SELECT * FROM jabatan WHERE no = '0110'");

        while($row = $query->fetch_assoc()){

            // $row = $query->fetch_assoc();
            // echo $row['jabatan']. "<br>";

            $jumlah = str_word_count($row['jabatan']);

            // $pecah = explode(' ', $row['jabatan']);
            // $jab_1 = $pecah[0];
            // $jab_2 = $pecah[1]." ".$pecah[2];

            // cetak($row['no'], $row['nama'], $jab_1, $jab_2);

            if ($jumlah > 3) {
                $pecah = explode(' ', $row['jabatan']);
                if ($jumlah < 5) {
                    $jab_1 = $pecah[0];
                    $jab_2 = $pecah[1]." ".$pecah[2]." ".$pecah[3];
                }else{
                    $jab_1 = $pecah[0]." ".$pecah[1];
                    $jab_2 = $pecah[2]." ".$pecah[3]." ".$pecah[4];
                }

                echo $jab_1. " ----- ". $jab_2;
                cetak($row['no'], $row['nama'], $jab_1, $jab_2);

            }else{
                $jab_1 =$row['jabatan'];
                echo $jab_1;
                cetak($row['no'], $row['nama'], $jab_1);
            }

            // echo "<br>";

        }




function cetak($no_p, $nama_p, $jab1, $jab2 = NULL)
    {
        $nama = ucfirst($nama_p);
        $no_temp = "/SEK-BEM/STIKOMCKI/II/2018";
        $gambar = "./Template/BEM.jpg";
        $no = "NO. ".$no_p.$no_temp;

        $image = imagecreatefromjpeg($gambar);

        // mengatur warna yang akan digunakan
        $white = imageColorAllocate($image, 255, 255, 255);
        $black = imageColorAllocate($image, 0, 0, 0);

        // gunakan parameter dalam penggantian font yang digunakan
        $font_no = "./Fonts/Century_Gothic_Regular.ttf";
        $font_nama = "./Fonts/Script_MT_Bold.ttf";
        $font_jabatan = "./Fonts/Century_Gothic_Bold.ttf";

        $size_no = 22; // Machine Learning peserta
        $size_nama = 78; // Machine Learning peserta
        $size_jabatan = 58; // Machine Learning peserta

        $image_width = imagesx($image);
        $image_height = imagesy($image);


        if ($jab2 != NULL) {

            $jab1 = strtoupper($jab1);
            $jab2 = strtoupper($jab2);

            //membuat textbox agar text centered
            $text_box_no = imagettfbbox($size_no,0,$font_no,$no); // parameter (ukuran, angle, jenis huruf, text)
            $text_box_nama = imagettfbbox($size_nama,0,$font_nama,$nama);
            $text_box_jab1 = imagettfbbox($size_jabatan,0,$font_jabatan,$jab1);
            $text_box_jab2 = imagettfbbox($size_jabatan,0,$font_jabatan,$jab2);

            $text_width_no = $text_box_no[2]-$text_box_no[0];
            $text_width_nama = $text_box_nama[2]-$text_box_nama[0];
            $text_width_jab1 = $text_box_jab1[2]-$text_box_jab1[0];
            $text_width_jab2 = $text_box_jab2[2]-$text_box_jab2[0];

            $x_no = (($image_width/2) - ($text_width_no/2));
            $x_nama = (($image_width/2) - ($text_width_nama/2));
            $x_jab1 = (($image_width/2) - ($text_width_jab1/2));
            $x_jab2 = (($image_width/2) - ($text_width_jab2/2));


            imagettftext($image, $size_no, 0, $x_no, 433, $white, $font_no, $no); // seminar enterpreneur peserta
            imagettftext($image, $size_nama, 0, $x_nama, 1200, $white, $font_nama, $nama); // seminar enterpreneur peserta
            imagettftext($image, $size_jabatan, 0, $x_jab1, 1540, $white, $font_jabatan, $jab1); // seminar enterpreneur peserta
            imagettftext($image, $size_jabatan, 0, $x_jab2, 1620, $white, $font_jabatan, $jab2); // seminar enterpreneur peserta


            //tampilkan di browser
            header("Content-type:  image/jpeg");
            imagejpeg($image);

            // menyimpan nama dengan nama yang dissseuikan
            imagejpeg($image,  $fileName = 'Sertifikat/'.$nama.'.jpg', $quality = 100); // parameter (gambar, nama file, kualitas gambar)


        }else{

            $jabatan = $jab1;

            $jabatan = strtoupper($jabatan);

            //membuat textbox agar text centered
            $text_box_no = imagettfbbox($size_no,0,$font_no,$no); // parameter (ukuran, angle, jenis huruf, text)
            $text_box_nama = imagettfbbox($size_nama,0,$font_nama,$nama);
            $text_box_jabatan = imagettfbbox($size_jabatan,0,$font_jabatan,$jabatan);

            $text_width_no = $text_box_no[2]-$text_box_no[0];
            $text_width_nama = $text_box_nama[2]-$text_box_nama[0];
            $text_width_jabatan = $text_box_jabatan[2]-$text_box_jabatan[0];

            $x_no = (($image_width/2) - ($text_width_no/2));
            $x_nama = (($image_width/2) - ($text_width_nama/2));
            $x_jabatan = (($image_width/2) - ($text_width_jabatan/2));


            imagettftext($image, $size_no, 0, $x_no, 433, $white, $font_no, $no); // seminar enterpreneur peserta
            imagettftext($image, $size_nama, 0, $x_nama, 1200, $white, $font_nama, $nama); // seminar enterpreneur peserta
            imagettftext($image, $size_jabatan, 0, $x_jabatan, 1580, $white, $font_jabatan, $jabatan); // seminar enterpreneur peserta


            //tampilkan di browser
            header("Content-type:  image/jpeg");
            imagejpeg($image);

            // menyimpan nama dengan nama yang dissseuikan
            imagejpeg($image,  $fileName = 'Sertifikat/'.$nama.'.jpg', $quality = 100); // parameter (gambar, nama file, kualitas gambar)


        }

}

?>