<?php

$bola = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

// print_r($bola);

?>

<!-- <br><br><hr><br> -->
<b>Daftar pemain bola terkenal</b>
<ol>
    <?php
    for ($i = 0; $i < count($bola); $i++) {
        echo "<li>$bola[$i]</li>";
    }
    ?>
</ol>

<b>Daftar pemain bola terkenal baru</b>
<ol>
    <?php

    //menambah data baru pada array yang sudah ada :
    $bola[] = "Luca Modric";
    $bola[] = "Sadio Mane";
    //data baru diatas akan dimasukan dalam array $bola sebagai data yang baru dan membuat index yang baru. 

    // cara mengurutkan data array adalah menggunakan metode sort();
    sort($bola);

    for ($i = 0; $i < count($bola); $i++) {
        echo "<li>$bola[$i]</li>";
    }

    ?>
</ol>
<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../tubes/assets/img_stock/back.png" alt=""></a>