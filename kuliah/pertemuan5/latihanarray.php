<?php
function br()
{
    echo "<br>";
}
function br2()
{
    echo "<br><br>";
}

$arah = array('kanan', 'kiri');
// $arah = ['kanan' , 'kiri'];

$arah[2] = 'atas';
$arah[] = 'bawah';

$arah[0] = 'kiri';
$arah[1] = 'kanan';
print_r($arah);

br();
br();
for ($i = 0; $i < count($arah); $i++) {
    echo "aranya adalah ke " . $arah[$i];
    br();
}

br2();

foreach ($arah as $a) {
    echo $a . "<br>";
}


// BR();
// br();

// echo "Panjang Array adalah " . count($arah);

// br();
// br();

//multidimensi array 

// $mahasiswa = array();

// $mahasiswa[0][0] = '193040134';
// $mahasiswa[0][1] = 'Zaskha Sasmita';
// $mahasiswa[1][0] = 'D';
// $mahasiswa[1][1] = 'no.hp';


// print("<pre>" . print_r($mahasiswa , true). "</pre  >");

// $nama = ['zaskha' , 'emdy' , 'tiqa','aimar'];

// for($i=0; $i<count($nama); $i++){
//     echo $nama[$i] . "<br>";
// }

// for($i = 0 ; $i <= count($mahasiswa); $i++){
//     for($j = 0; $j <= count($mahasiswa); $j++ ){
//         echo $mahasiswa[$i][$j];
//         br();
//     }
// }


?>

<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>