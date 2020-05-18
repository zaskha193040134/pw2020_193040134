<?php


function hitungluaslingkaran($jari)
{
    $luas = $jari * $jari * 22 / 7;
    return $luas;
}

function tambahluas2lingkaran($luas, $luas2)
{
    $total_luas = $luas + $luas2;
    return $total_luas;
}

$jari1 = 7;
$jari2 = 14;

$luas_lingkaran = hitungluaslingkaran($jari1);

$luas_lingkaran2 = hitungluaslingkaran($jari2);

echo "Total Luas Lingkara  = " . tambahluas2lingkaran($luas_lingkaran, $luas_lingkaran2);





// Tugas : 
// 1. Latihan menggunakan str_replace, cari lagu yang berbeda per openssl_spki_export_challenge
// Tugas 3


?>
<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>