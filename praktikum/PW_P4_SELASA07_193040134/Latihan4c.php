<?php

$bola = array(
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
);


// print_r($bola);

?>

<table style="border:1px solid black;padding:10px;">
    <tr>
        <td colspan="3"><b>Daftar pemain bola terkenal dan clubnya</b></td>
        <td style="visibility:hidden;">ini adalah spasi hilang</td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <?php
    foreach ($bola as $b => $value) { ?>
        <tr>
            <td><b> <?= $b ?> </b></td>
            <td> : </td>
            <td> <?= $value ?></td>
        </tr>
    <?php } ?>
</table>

<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../tubes/assets/img_stock/back.png" alt=""></a>