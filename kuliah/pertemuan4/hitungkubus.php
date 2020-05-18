<?php

function hitungluaskubus($sisi)
{
    $luas = $sisi * $sisi * 6;
    return $luas;
}

function tambahluas2kubus($luas, $luas2)
{
    $total_luas = $luas + $luas2;
    return $total_luas;
}
//kubus pertama
$sisi1 = 10;

//kubus kedua
$sisi2 = 2;

//luas kesatu
$luas_kb1 = hitungluaskubus($sisi1);

//luas kedua
$luas_kb2 = hitungluaskubus($sisi2);

// $total_luas = $luas_kb1 + $luas_kb2;
// echo "Total Luas = " . $total_luas;

echo "Total Luas = " . tambahluas2kubus($luas_kb1, $luas_kb2);


?>
<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>