<?php

    function cetak($nama_p, $no_p, $no_temp = "/SEMINAR-UKMIT/BEMSTIKOMCKI/IV/2018")
    {
        $gambar = "./Template/Sertifikat_Sertifikat_Machine.jpg";

        // nomor dan nama yang akan dicetak
        $nama = strtoupper($nama_p);
        // $no = "No. P".$no_p.$no_temp;
        $no = $no_p.$no_temp;

        // if (intval($no_kwitansi) > 10) {
        //     $tulisan = "0".$no_kwitansi."/UKM/IT/STIKOMCKI/2017";
        // }else{
        //     $tulisan = $no_kwitansi."/UKM/IT/STIKOMCKI/2017";
        // }

        $image = imagecreatefromjpeg($gambar);

        // mengatur warna yang akan digunakan
        $white = imageColorAllocate($image, 255, 255, 255);
        $black = imageColorAllocate($image, 0, 0, 0);

        // gunakan parameter dalam penggantian font yang digunakan
        $font_no = "./Fonts/Century_Gothic_Regular.ttf";
        $font_nama = "./Fonts/Century_Gothic_Regular.ttf";

        // gunakan parameter dalam penggantian nomor
        // $size_no = 40; // Machine Learning
        // $size_nama = 110; // Machine Learning
        $size_no = 23; // Machine Learning peserta
        $size_nama = 70; // Machine Learning peserta
        // $size_no = 15; // Machine Learning panitia
        // $size_nama = 37; // Machine Learning panitia

        //definisikan lebar gambar agar posisi teks selalu ditengah berapapun jumlah hurufnya
        $image_width = imagesx($image);
        $image_height = imagesy($image);

        //membuat textbox agar text centered
        $text_box_no = imagettfbbox($size_no,0,$font_no,$no); // parameter (ukuran, angle, jenis huruf, text)
        $text_box_nama = imagettfbbox($size_nama,0,$font_nama,$nama);

        $text_width_no = $text_box_no[2]-$text_box_no[0];
        $text_width_nama = $text_box_nama[2]-$text_box_nama[0];

        // $text_height = $text_box[3]-$text_box[1];

        $x_no = (($image_width/2) - ($text_width_no/2));
        $x_nama = (($image_width/2) - ($text_width_nama/2));



        //generate sertifikat beserta namanya
        // imagettftext($image, $size_no, 0, 2300, 350, $white, $font_no, $no); // seminar android dadang
        // imagettftext($image, $size_nama, 0, $x_nama, 740, $black, $font_nama, $nama); // seminar machine
        // imagettftext($image, $size_no, 0, $x_no, 740, $black, $font_nama, $no); // seminar machine
        // imagettftext($image, $size_nama, 0, $x_nama, 1010, $black, $font_nama, $nama); // seminar machine
        imagettftext($image, $size_no, 0, $x_no, 450, $black, $font_nama, $no); // seminar enterpreneur peserta
        imagettftext($image, $size_nama, 0, $x_nama, 628, $black, $font_nama, $nama); // seminar enterpreneur peserta
        // imagettftext($image, $size_no, 0, $x_no, 270, $black, $font_nama, $no); // seminar enterpreneur PANITIA
        // imagettftext($image, $size_nama, 0, $x_nama, 375, $black, $font_nama, $nama); // seminar enterpreneur PANITIA

        //tampilkan di browser
        header("Content-type:  image/jpeg");
        imagejpeg($image);

        // menyimpan nama dengan nama yang dissseuikan
        imagejpeg($image,  $fileName = 'Sertifikat/'.$nama.'.jpg', $quality = 100); // parameter (gambar, nama file, kualitas gambar)
    }

?>