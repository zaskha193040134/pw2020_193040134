<?php

function br()
{
    echo "<br>";
}

// nama-nama bulan dalam array

$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

print_r($bulan);

br();
br();

// for($i = 0; $i < count($bulan); $i++ ){
//     echo "bulan $bulan[$i] <br>";
// }

// echo "<br><br>";

// foreach ($bulan as $b){
//     echo $b . "<br>";
// }
br();
br();

echo $bulan[6];

br();
br();

//array_pop : mengambil elemen terakhir dari sebuah array dan menghapus elemen yang tidak diambil
// echo array_pop($bulan);
// $bulan = array_pop($bulan);

//array push : menambah element baru dalam sebuah array 

array_push($bulan, 'Okhoyer');
br();
print_r($bulan);

$angka = [1, 2, 3, 4, 5, 6];

array_push($angka, 7, 8, 9, 10);
print_r($angka);

function hr()
{
    echo "<hr>";
}

hr();



// 



?>
<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>