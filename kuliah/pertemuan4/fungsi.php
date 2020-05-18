<?php

$lirik = "
balonku ada lima<br>
rupa- rupa warnanya<br>
hijau kuning kelabu<br>
merah muda dan biru<br>
meletus balon hijau dor<br>
hatiku sangat kacau<br>
balonku tinggal empat<br>
kupegang erat-erat<br>
";

$lirik2 = str_replace("a", "o", "$lirik");
$lirik3 = str_replace("i", "o", "$lirik2");
$lirik4 = str_replace("u", "o", "$lirik3");
$lirik5 = str_replace("e", "o", "$lirik4");

echo $lirik5;

//function yang baik adalah function yang hanya mengerjakan satu hal saja

//function : blok kode yang ditunjukan untuk melaksanakan tugas tertentu
// function dapat dipanggil berkali kali
//memudahkan pelacakan kesalahan & tidak perlu menulis berkali kali


?>
<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>