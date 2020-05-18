<?php

$bola = [
    "pemain1" => ["nama" => "Cristiano Ronaldo", "club" => "Juventus", "main" => 100, "gol" => 76, "assist" => 30],
    "pemain2" => ["nama" => "Lionel Messi", "club" => "Barcelona", "main" => 120, "gol" => 80, "assist" => 12],
    "pemain3" => ["nama" => "Luca Modric", "club" => "Real Madrid", "main" => 87, "gol" => 12, "assist" => 48],
    "pemain4" => ["nama" => "Mohammad Salah", "club" => "Liverpool", "main" => 90, "gol" => 103, "assist" => 8],
    "pemain5" => ["nama" => "Neymar Jr", "club" => "Paris Saint Germain", "main" => 109, "gol" => 56, "assist" => 15],
    "pemain6" => ["nama" => "Sadio Mane", "club" => "Liverpool", "main" => 63, "gol" => 30, "assist" => 70],
    "pemain7" => ["nama" => "Zlatan Ibrahimovic", "club" => "Ac Milan", "main" => 100, "gol" => 10, "assist" => 12]
];

$main1 = $bola["pemain1"]["main"];
$main2 = $bola["pemain2"]["main"];
$main3 = $bola["pemain3"]["main"];
$main4 = $bola["pemain4"]["main"];
$main5 = $bola["pemain5"]["main"];
$main6 = $bola["pemain6"]["main"];
$main7 = $bola["pemain7"]["main"];

$counterMain = $main1 + $main2 + $main3 + $main4 + $main5 + $main6 + $main7;

$gol1 = $bola["pemain1"]["gol"];
$gol2 = $bola["pemain2"]["gol"];
$gol3 = $bola["pemain3"]["gol"];
$gol4 = $bola["pemain4"]["gol"];
$gol5 = $bola["pemain5"]["gol"];
$gol6 = $bola["pemain6"]["gol"];
$gol7 = $bola["pemain7"]["gol"];

$counterGol = $gol1 + $gol2 + $gol3 + $gol4 + $gol5 + $gol6 + $gol7;

$assist1 = $bola["pemain1"]["assist"];
$assist2 = $bola["pemain2"]["assist"];
$assist3 = $bola["pemain3"]["assist"];
$assist4 = $bola["pemain4"]["assist"];
$assist5 = $bola["pemain5"]["assist"];
$assist6 = $bola["pemain6"]["assist"];
$assist7 = $bola["pemain7"]["assist"];

$counterAssist = $assist1 + $assist2 + $assist3 + $assist4 + $assist5 + $assist6 + $assist7;

?>

<table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>CLUB</th>
        <th>MAIN</th>
        <th>GOL</th>
        <th>ASSIST</th>
    </tr>


    <?php for ($i = 1; $i <= count($bola); $i++) { ?>
        <tr>
            <td><?= $i ?></td>
            <td> <?= $bola["pemain$i"]["nama"] ?> </td>
            <td> <?= $bola["pemain$i"]["club"] ?> </td>
            <td> <?= $bola["pemain$i"]["main"] ?> </td>
            <td> <?= $bola["pemain$i"]["gol"] ?> </td>
            <td> <?= $bola["pemain$i"]["assist"] ?> </td>
        </tr>
    <?php } ?>

    <tr>
        <td>#</td>
        <td colspan="2" style="text-align:center;"><b>Jumlah</b></td>
        <td> <?= $counterMain; ?> </td>
        <td> <?= $counterGol; ?> </td>
        <td> <?= $counterAssist; ?></td>
    </tr>


</table>

<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../tubes/assets/img_stock/back.png" alt=""></a>